<x-layout>

  <div class="container  mt-5  ">

    <h1 class="text-center mb-5 ">Annuncio singolo</h1>

    <div class="row">
      <div class="col-4 d-flex justify-content-center flex-column p-0 me-5 ">
        <img src="https://picsum.photos/300/300" alt="" class="rounded-4">
        <div class="row mt-3 ">
          <div class="col-4 p-0 d-flex justify-content-center">
            <img src="https://picsum.photos/130" alt="" class="rounded-4">
          </div>
          <div class="col-4 p-0 d-flex justify-content-center">
            <img src="https://picsum.photos/130" alt="" class="rounded-4">
          </div>
          <div class="col-4 p-0 d-flex justify-content-center">
            <img src="https://picsum.photos/130" alt="" class="rounded-4">
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