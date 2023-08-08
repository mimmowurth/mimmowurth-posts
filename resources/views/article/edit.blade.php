<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                modifica un articolo
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('article.update', compact('article'))}}" method="post" enctype="multipart/form-data" class="card p-5 shadow">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" id="title" value="{{$article->title}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" id="subtitle" value="{{$article->subtitle}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">immagine:</label>
                        <input type="file" name="image" id="image"  class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category"  class="form-control text-capitalize">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"@if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach    
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-control">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{$article->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">tags:</label>
                        <input name="tags" id="tags" class="form-control" value="{{$article->tags->implode('name', ', ')}}">
                        <span class="small fst-italic">dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-info text-white">inserisci articolo</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-info">torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>