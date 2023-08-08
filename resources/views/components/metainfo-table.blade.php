<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if($metaType == "tags")
            <td>
                <form action="{{route('admin.editTag', [$metaInfo->id])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome con tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', [ $metaInfo->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-info text-white">Elimina</button>
                </form> 
            </td>
            @else 
            <td>
                <form action="{{route('admin.editCategory', [$metaInfo->id])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', [$metaInfo->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-info text-white">Elimina</button>
                </form> 
            </td>
            
            @endif
        </tr>
        @endforeach
        
    </tbody>
</table>
            <td>
                <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex">
                    @csrf
                    @method('post')
                    <input type="text" name="name" placeholder="inserisci una nuova categoria" class="form-control w-5000 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiungi</button>
                </form>
            </td>