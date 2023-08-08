<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                inserisci un articolo
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('article.store')}}" class="card p-5 shadow" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">tags:</label>
                        <input name="tags" id="tags" class="form-control" value="{{old('tags')}}">
                        <span class="small fst-italic">dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-info text-green">inserisci un articolo</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-info">torna alla home</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>