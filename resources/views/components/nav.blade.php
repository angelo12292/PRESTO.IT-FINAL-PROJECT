<nav class="navbar navbar-expand-lg  navShadow sticky-top  bg-body-white bg-body-tertiary mb-5">
  <div class="container py-4  bg-trasparent">
    <img src="../img/Speed_Shop_Logo.svg" alt="" style="width: 40px;">
    <a class="navbar-brand fw-bold fs-3 p-0 ms-2 primary-color-text" href="{{route('home')}}">Presto</a>

    <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navAnimation linkNav" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active navAnimation linkNav" aria-current="page" href="{{route('show_announcements')}}">Annunci</a>
        </li>

        <li class="nav-item">
          <x-success />
        </li>
      </ul>
      

      @guest
      <div class="d-flex gap-3  me-4 ">
        <a class="dropdown-item linkNav navAnimation " href="/login">Login</a>
        <a class="dropdown-item linkNav navAnimation" href="/register">Register</a>
      </div>

      @else
      <div class="btn-group me-2 ">
        <button class="btn dropdown-toggle linkNav " type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle me-1"></i>
          {{auth()->user()->name}}
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            @if (Auth::user()->is_revisor)
            <a href="{{ route('revisor.index')}}" class="nav-link btn btn-primary btn-sm ">Zona revisore (acetta
              annunci)<span class="text-black badge ">annunci da revisionare:
                {{App\Models\Announcement::toBeRevisionedCount()}}</span>
            </a>
            <a href="{{ route('revisor.index-revised')}}" class="nav-link btn btn-primary btn-sm ">Zona revisore
              (ripristina stato degli annunci)<span class="text-black badge ">annunci da ripristinare:
                {{App\Models\Announcement::revisionedCount()}}</span></span>
            </a>

            @endif
            <form action="/logout" method="POST" class="nav-link btn btn-primary">
              @csrf
              <button class="nav-link ms-2 " type="submit">Logout</button>
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