<nav class="navbar navbar-expand-lg bg-transparent position-fixed z-3 w-100">
  <div class="container-fluid">
    <a class="navbar-brand text-white fw-bold" href="{{route('home')}}">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white fw-bold" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-white fw-bold" href="#">Action</a></li>
            <li><a class="dropdown-item text-white fw-bold" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-white fw-bold" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <div>
        <a href="{{route('insert_announcement')}}" type="submit" class="btn btn-outline-info text-dark fw-bold">Inserisci
            Annunci</a>
      </div>
      @guest
      <div class="btn-group me-5 ">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item text-white fw-bold" href="/login">Login</a></li>
          <li><a class="dropdown-item text-white fw-bold" href="/register">Register</a></li>
        </ul>
      </div>

      @else
      <div class="btn-group me-5 ">
        <button class="btn dropdown-toggle text-white fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name}}
        </button>
        <ul class="dropdown-menu">
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button class="nav-link mx-3 text-white fw-bold" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      @endguest
    </div>
  </div>
</nav>