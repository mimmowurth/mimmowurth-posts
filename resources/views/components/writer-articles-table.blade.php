<table class="table table-striped table-hover border">
    
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">sottotitolo</th>
            <th scope="col">categoria</th>
            <th scope="col">tags</th>
            <th scope="col">creato il</th>
            <th scope="col">azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td> 
            <td>{{$article->subtitle}}</td> 
            <td>{{$article->category->name ?? 'non categorizzato'}}</td>
            <td>
                @foreach($article->tags as $tag)
                    {{$tag->name}}
                @endforeach    
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">leggi l'articolo</a>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-white">modifica l'articolo</a>
                <form action="{{route('article.destroy', compact('article'))}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">elimina articolo</button>
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
</table>