<x-layout>
    <div class="container-fluid p5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                registrati
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
                
                <form action="{{route('register')}}" class="card p-5 shadow" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">username:</label>
                        <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email:</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password:</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">conferma password:</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-white">registrati</button>
                        <p class="small mt-2">Già registrato? <a href="{{route('login')}}">Clicca qui</a></p>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</x-layout>