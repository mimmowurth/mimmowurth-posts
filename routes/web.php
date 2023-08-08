<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WriterController;
use App\Http\Middleware\UserIsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');
route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])-> name('article.byCategory');
route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name ('careers.submit');
route::middleware([UserIsAdmin::class])->group(function(){
    route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    route::get('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    route::get('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    route::get('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
});
route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
});
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/{article}/accept',[RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle'); 
});
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/{article}/reject',[RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle'); 
});
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/{article}/undo',[RevisorController::class, 'undoArticle'])->name('revisor.undoArticle'); 
});
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');
Route::middleware('writer')->group(function(){
    Route::get('/writer/dashboard/', [WriterController::class, 'dashboard'])->name('writer.dashboard');
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');
});

    


    
