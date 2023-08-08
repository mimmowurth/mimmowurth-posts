<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Mail;
use App\Models\User;



class PublicController extends Controller
{
    public function homepage(){
        $articles = Article::where('is_accepted',true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }

    public function __construct(){
        $this->middleware('auth')->except('homepage');
    }

    public function careers(){
        return view('careers');
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        

        $user = Auth::user();
        $role = $request->role;
        $mail = $request->email;
        $message = $request->message;

        Mail::to('admin@presto.it')->send(new CareerRequestMail(compact('role', 'mail', 'message')));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                 break;
            
            case 'writer':
                 $user->is_writer = NULL;
                 break;        
        }
        

        $user->update();

        return redirect(route('homepage'))->with('message', 'grazie per averci contattato');
    }
    
}
