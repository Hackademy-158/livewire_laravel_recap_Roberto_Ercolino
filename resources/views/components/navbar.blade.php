<nav class="navbar navbar-expand-lg fixed-top navbar-scroll bg-info">
    <div class="container">
      <div class="collapse navbar-collapse row" id="navbarExample01">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-evenly">
        @auth
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
            </li>
            <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">
                @csrf
            </form>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"> Ciao {{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('recipe.create')}}">Inserisci ricetta</a>
            </li>
        @endauth
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('recipe.index')}}">visualizza ricette</a>
        </li>
        @guest
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#help">How can I help?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#contact">Contact</a>
            </li>

        @endguest
        </ul>
      </div>
    </div>
  </nav>
