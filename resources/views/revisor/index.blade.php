<x-layout>
  <x-nav />
  <div class="container mt-5">
    <livewire:notification-message />


    <div class="row ">
      <div class="col-12">
        <header>
          <h1 class="text-center primary-color-text mb-5 ">
            {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
          </h1>
        </header>
      </div>
    </div>
    @if($announcement_to_check)

    <div class="row">
      <div class="col-6 mx-auto">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

          @if(count($announcement_to_check->images))
            <div class="carousel-inner">
              @foreach($announcement_to_check->images as $image)
              <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{$image->getUrl(300,200)}}" class="d-block w-100" alt="...">
              </div>
              @endforeach
            </div>
          @else  
            <div class="carousel-inner">
              <div class="carousel-item active">
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
          @endif
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h5 class="mb-2 mt-4 fw-light h2 primary-color-text">Titolo: </h5>
        <h4 class="mb-4  primary-color-text">{{$announcement_to_check->title}}</h4>
        <h4 class="mb-2 fw-light h2 primary-color-text">Descrizione:</h4>
        <h4 class="mb-4  primary-color-text">{{$announcement_to_check->description}}</h4>
        <h4 class="mb-2 fw-light h2 primary-color-text">Prezzo:</h4>
        <h4 class="mb-4  primary-color-text">
          {{ Number::currency($announcement_to_check->price, in: 'EUR', locale: 'it') }}
        </h4>

        <div class="d-flex">
        <form action="{{route ('revisor.accept_announcement',['announcement'=>$announcement_to_check])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <button type="submit" class="btn text-white rounded-5  primary-color-bg btnStatic">Accetta</button>
        </form>
  
  
        <form class="ps-3" action="{{route ('revisor.reject_announcement',['announcement'=>$announcement_to_check])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <button type="submit" class="btn btn-danger rounded-5 ">Rifiuta</button>
        </form>
      </div>
  
    @endif

      </div>
    </div>
  </div>
  </div>
  


  </div>
  <x-footer />
</x-layout>