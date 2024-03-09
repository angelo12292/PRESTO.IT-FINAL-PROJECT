<nav class="navbar navbar-expand-lg p-0 shadow">
  <div class="container py-3  bg-trasparent">
    <a class="navbar-brand fw-bold fs-3 p-0" href="{{route('home')}}">Presto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fw-bold" href="#">Action</a></li>
            <li><a class="dropdown-item fw-bold" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item fw-bold" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>

      @guest
      <div class="btn-group me-2 ">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item fw-bold" href="/login">Login</a></li>
          <li><a class="dropdown-item fw-bold" href="/register">Register</a></li>
        </ul>
      </div>

      @else
      <div class="btn-group me-2 ">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->name}}
        </button>
        <ul class="dropdown-menu">
          <li>
            @if (Auth::user()->is_revisor)
            <a href="{{ route('revisor.index')}}" class="nav-link btn btn-primary btn-sm">Zona revisore <span class="text-black badge ">{{App\Models\Announcement::toBeRevisionedCount()}}</span></a>

            @endif
            <form action="/logout" method="POST">
              @csrf
              <button class="nav-link mx-3 fw-bold" type="submit">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      @endguest
      <div>
        <a href="{{route('insert_announcement')}}" type="submit" class="btn text-white rounded-5  primary-color-bg btnStatic"><span>Inserisci
            Annunci</span></a>
      </div>
    </div>
  </div>
</nav>