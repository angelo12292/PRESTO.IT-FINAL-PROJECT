<x-layout>
  <x-nav />
  <div class="container mt-5">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    @if(session()->has('fail'))
    <div class="alert alert-warning ">
      {{ session('fail') }}
    </div>
    @endif

    <div class="row mb-4">
      <div class="col-12">
        <header>
          <h1 class="text-center primary-color-text">
            {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
          </h1>
        </header>
      </div>
    </div>
    @if($announcement_to_check)

    <div class="row">
      <div class="col-12">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4" aria-label="Slide 4"></button>

          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/1600/900" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1600/901" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1600/900" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1600/898" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/1600/899" class="d-block w-100 " alt="...">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h5 class="mb-2 mt-4 fw-light h2">Titolo: </h5>
        <h4 class="mb-4 ">{{$announcement_to_check->title}}</h4>
        <h4 class="mb-2 fw-light h2">Descrizione:</h4>
        <h4 class="mb-4 ">{{$announcement_to_check->description}}</h4>
        <h4 class="mb-2 fw-light h2">Prezzo:</h4>
        <h4 class="mb-4 ">{{ Number::currency($announcement_to_check->price, in: 'EUR', locale: 'it') }}</h4>

      </div>
    </div>
  </div>
  </div>
  <div class="container d-flex gap-3 ">


    <form action="{{route ('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
      @csrf
      @method('PATCH')
      <button type="submit" class="btn text-white rounded-5  primary-color-bg btnStatic">Accetta</button>
    </form>


    <form action="{{route ('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST">
      @csrf
      @method('PATCH')
      <button type="submit" class="btn btn-danger rounded-5 ">Rifiuta</button>
    </form>


  </div>
  @endif
  </div>
  <x-footer />
</x-layout>