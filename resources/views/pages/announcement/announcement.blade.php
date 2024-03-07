<x-layout>

  <div class="container  mt-5  ">

    <h1 class="text-center mb-5 ">Annuncio singolo</h1>
    
    <div class="row">
      <div class="col-4 d-flex justify-content-center flex-column p-0 me-5 ">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/400/300" class="d-block w-100 rounded-4" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/400/300" class="d-block w-100 rounded-4" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/400/300" class="d-block w-100 rounded-4" alt="...">
          </div>
        </div>
      </div>
        
      </div>
      <div class="col-6 border-start ">
        <h2 class="mb-2 fw-light">Titolo:</h2>
        <h2 class="mb-4">{{$announcement->title}}</h2>

        <h2 class="mb-2 fw-light">Categoria:</h2>
        <h3 class="mb-4">{{$announcement->category->name}}</h3>

        <h4 class="mb-2 fw-light h2">Descrizione:</h4>
        <h4 class="mb-4 ">{{$announcement->description}}</h4>

        <h4 class="mb-2 fw-light h2">Prezzo:</h4>
        <h4 class="mb-2 ">{{ Number::currency($announcement->price, in: 'EUR', locale: 'it') }}</h4>


      </div>
    </div>



  </div>


</x-layout>