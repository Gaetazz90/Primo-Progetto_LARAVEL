
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid bg-nav">
      <a class="navbar-brand">Rapido.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome_page')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('index_page')}}">Tutti gli Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('create_page')}}">Carica il tuo articolo</a>
          </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> --}}

        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            @guest
            <li class="nav-item">
                <a class="nav-link active" href="{{route("register")}}">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route("login")}}">Accedi</a>
            </li>
            @endguest

            @auth
            <li class="nav-item mt-2 me-2">
                <p> Ciao <strong> {{Auth::user()->name}} </strong> | </p>
            </li>
            <li class="nav-item">
              <a href="{{route('user_page')}}" class="nav-link active">I miei articoli |</a>
            </li>       
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="nav-link active">Esci</button>
                </form>
            </li>
            @endauth
   
        </ul>
      </div>
    </div>
</nav>