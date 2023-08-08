
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @auth
  <li class="nav-link dropdown nav-item">
    <a class="nav-link" href="" id="navbarDropdown" role="buttton"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
      benvenuto {{Auth::user()->name}}
    </a>
    
    
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li>
        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
      </li>
      <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
        @csrf
      </form>
      
    </ul>
    
    <li class="nav-link dropdown nav-item dropdown-menu bg-info">
      <a class="nav-link dropdown-toggle text-center" href="" id="navbarDropdown" role="button"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
        dashboard
      </a>
      <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
        @if(Auth::user()->is_admin)
        <li>
          <a href="{{route('admin.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard admin</a>
        </li>
        @endif
        @if(Auth::user()->is_revisor)
        <li>
          <a href="{{route('revisor.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard revisor</a>
        </li>
        @endif
        @if(Auth::user()->is_writer)
        <li>
          <a href="{{route('writer.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard redattore</a>
        </li>
        @endif
      </ul>
    </li>
    
    @endauth
    @guest 
    <li class="nav-item nav-link dropdown">
      <a class="nav-link" href="" id="navbarDropdown" role="buttton"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
        benvenuto ospite
      </a>
      
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a href="{{route('register')}}" class="dropdown-item">registrati</a></li>
        <li><a href="{{route('login')}}" class="dropdown-item">accedi</a></li>
      </ul>
    </li>
    @endguest
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">inserisci un articolo</a>
        </li>     
      </ul>
      <form action="{{route('article.search')}}" class="d-flex " method="GET">
        <input type="search" class="form-control me-2" name="query" placeholder="cosa stai cercando?" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">cerca</button>
      </form>
    </div>
  </nav> --}}
  
  
  
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.create')}}">inserisci un articolo</a>
        </li>     
      </ul>
      {{-- <form action="{{route('article.search')}}" class="d-flex " method="GET">
        <input type="search" class="form-control me-2" name="query" placeholder="cosa stai cercando?" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">cerca</button>
      </form> --}}
    </div>
    <div class=" flex-grow-1 text-right">
      <form action="{{route('article.search')}}" class="d-flex " method="GET">
        <input type="search" class="form-control me-2" name="query" placeholder="cosa stai cercando?" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">cerca</button>
      </form>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
      <ul class="navbar-nav ms-auto flex-nowrap">
        @auth
        <div class="dropdown" style="margin-top: 10px">
          <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dashboard
          </button>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
            @if(Auth::user()->is_admin)
            <li>
              <a href="{{route('admin.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard admin</a>
            </li>
            @endif
            @if(Auth::user()->is_revisor)
            <li>
              <a href="{{route('revisor.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard revisor</a>
            </li>
            @endif
            @if(Auth::user()->is_writer)
            <li>
              <a href="{{route('writer.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard redattore</a>
            </li>
            @endif
          </ul>
        </div>
        @endauth
        {{-- <li class="nav-link dropdown nav-item dropdown-menu bg-info">
            <a class="nav-link dropdown-toggle text-center" href="" id="navbarDropdown" role="button"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
              dashboard
            </a>
            <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
              @if(Auth::user()->is_admin)
              <li>
                <a href="{{route('admin.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard admin</a>
              </li>
              @endif
              @if(Auth::user()->is_revisor)
              <li>
                <a href="{{route('revisor.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard revisor</a>
              </li>
              @endif
              @if(Auth::user()->is_writer)
              <li>
                <a href="{{route('writer.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard redattore</a>
              </li>
              @endif
            </ul>
          </li> --}}

        @auth
        <li class="nav-link dropdown nav-item">
          <a class="nav-link" href="" id="navbarDropdown" role="buttton"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
            benvenuto {{Auth::user()->name}}
          </a>
          
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
              @csrf
            </form>
            
          </ul>
          
          {{-- <li class="nav-link dropdown nav-item dropdown-menu bg-info">
            <a class="nav-link dropdown-toggle text-center" href="" id="navbarDropdown" role="button"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
              dashboard
            </a>
            <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
              @if(Auth::user()->is_admin)
              <li>
                <a href="{{route('admin.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard admin</a>
              </li>
              @endif
              @if(Auth::user()->is_revisor)
              <li>
                <a href="{{route('revisor.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard revisor</a>
              </li>
              @endif
              @if(Auth::user()->is_writer)
              <li>
                <a href="{{route('writer.dashboard')}}" class="nav-link " id="navbarDropdawn" role="button" data-bs-toggle="dropdawn" aria-expanded="false">dashboard redattore</a>
              </li>
              @endif
            </ul>
          </li> --}}
          @endauth
          @guest 
          <li class="nav-item nav-link dropdown">
            <a class="nav-link" href="" id="navbarDropdown" role="buttton"  data-bs-toggle="dropdown" aria-expanded="false"  class="nav link dropdown-toggle">
              benvenuto ospite
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="{{route('register')}}" class="dropdown-item">registrati</a></li>
              <li><a href="{{route('login')}}" class="dropdown-item">accedi</a></li>
            </ul>
          </li>
          @endguest
          
        </ul>
      </div>
    </nav>