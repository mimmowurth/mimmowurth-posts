<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="siplay-1">
                lavora con noi 
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>lavora come amministratore</h2>
                <p>cosa farai: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur porro doloremque, laborum sunt corporis fugiat provident vitae iure quae aliquam veritatis, doloribus velit similique temporibus in dolorem consectetur, aut voluptatibus?</p>
                <h2>lavora come revisore</h2>
                <p>cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore pariatur repudiandae maxime voluptatem quam eos recusandae officia harum, quasi modi hic beatae, quas, architecto deserunt tenetur cum eum voluptas aperiam!</p>
                <h2>lavora come rdattore</h2>
                <p>cosa farai: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, explicabo velit dolorum ex aliquid nam illum fugiat quidem reprehenderit amet, iste optio atque at impedit ullam deserunt dolor officia nobis!</p>
            </div>
            <div class="col-12 col-md-6">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('careers.submit')}}" method="post" class="p-5">
                 @csrf

                    <div class="mb-3">
                        <label for="role" class="form-label">per quale ruolo ti stai candidando</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">scegli qui</option>
                            <option value="admin">amministratore</option>
                            <option value="revisor">revisore</option>
                            <option value="writer">rdattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" class="dorm-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-control">parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-info text-white" >invia la candidatura</button>
                    </div>
                </form>
                   

            </div>
        </div>
    </div>
</x-layout>