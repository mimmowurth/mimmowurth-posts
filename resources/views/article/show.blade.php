<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser', ['user'=>$article->user_id])}}" class="px-2 small text-muted fst-italic text-capitalize">{{$article->user->name}}</a>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                @if(Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-success text-white my-5">rifiuta articolo</a>
                    @endif
                <div class="text-center">
                    <a href="{{route('article.index', 2)}}" class="btn btn-info text-white my-5">torna indetro</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>