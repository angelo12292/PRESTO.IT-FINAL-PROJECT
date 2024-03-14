<nav class="navbar navbar-expand-lg  navShadow sticky-top  background mb-5">
  <div class="container py-4  bg-trasparent">
    <img src="../img/Speed_Shop_Logo.svg" alt="" style="width: 40px;">
    <a class="navbar-brand fw-bold fs-3 p-0 ms-2 primary-color-text" href="{{route('home')}}">Presto</a>

    <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active navAnimation linkNav" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active navAnimation linkNav" aria-current="page"
            href="{{route('show_announcements')}}">Annunci</a>
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

      <div class=" me-3 position-relative ">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          {{App\Models\Announcement::toBeRevisionedCount()}}
        </span>
        <button class="btn dropdown-toggle linkNav " type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle me-1"></i>
          {{auth()->user()->name}}
        </button>
        <ul class="dropdown-menu ">
          <li>
            @if (Auth::user()->is_revisor)
            <a href="{{ route('revisor.index')}}"
              class=" nav-link text-start position-relative dropdown-item primary-color-text ps-3 p-0 dropDownHover">
              acetta <br>annunci: <span class=" fw-bold">{{App\Models\Announcement::toBeRevisionedCount()}}</span>
            </a>
          <li>
            <hr class="dropdown-divider">
          </li>
          <a href="{{ route('revisor.index-revised')}}" class="nav-link primary-color-text ps-3 dropDownHover">
            ripristina <br>annunci: <span class="fw-bold">{{App\Models\Announcement::revisionedCount()}}</span>
          </a>
          <li>
            <hr class="dropdown-divider">
          </li>

          @endif
          <form action="/logout" method="POST" class="nav-link btn ">
            @csrf
            <button class="nav-link primary-color-text ps-3 dropDownHover w-100 text-start "
              type="submit">Logout</button>
          </form>
          </li>
        </ul>
      </div>
      @endguest
      <div>
        <a href="{{route('insert_announcement')}}" type="submit"
          class="btn text-white rounded-5  primary-color-bg btnStatic"><span>Inserisci
            Annunci</span></a>
      </div>
    </div>
  </div>
</nav>