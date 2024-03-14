<x-layout>
  <x-nav />
  <x-access-denied />
  <x-success />
  <x-error />
  <x-message />

  <div class="container-md mt-5 ">


    <div class="container-fluid p-0">

      <div class="row m-0">
        <div class="col-12 p-0">
          <x-nav />
        </div>

      </div>

      <div class="row m-0">
        <div class="col-5">
          <x-access-denied />
          <x-success />
          <x-error />
          <x-message />
        </div>
      </div>




      <div class="row text-center m-0 ">
        <div class="col-12 p-0 ">
          <header>
            <h1>Annuncio: {{$announcement->title}}</h1>
            <h3 class="d-flex align-items-center ">{{ Number::currency($announcement->price, in: 'EUR', locale: 'it') }}
              <span class="text-end fs-6 ms-3">Categoria: {{$announcement->category->name}}</span>
            </h3>

          </header>
        </div>


      </div>

      <div class="row mt-2 g-5">

        <div class="col-sm-6 col-md-8">

          <div class="row m-0 text-center mt-2 d-block d-sm-flex ">

            <div class="col-10 mx-auto col-sm-5 col-md-6 col-lg-7 p-0 mx-0">


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

              <h4 class="mb-2 fw-light h2">Descrizione:</h4>
              <h4 class="mb-4 ">{{$announcement->description}}</h4>

            </div>


            <div class="col-10 mx-auto col-sm-5 col-md-4 col-lg-3 flex-column m-0 p-0 ">
              @auth
              <div>
                <h5>Contatta il venditore {{$user->name}}.</h5>
              </div>

              <livewire:contact-vendor-form />

              <div class="mb-3 d-grid">
                <a href="{{route('contact.vendor',compact('user'))}}"><button wire:click="save" class="btn btn-light" type="submit">Invia email </button></a>
              </div>

              <livewire:contact-vendor-form :receiving_user_id="$user->id" :receiving_user_email="$user->email" />



              @else
              <div>
                <h5>Contatta il venditore {{$user->name}}.</h3>

              </div>

              <form>

                <div class="mb-3 text-secondary">
                  <label for="exampleInputnaim" class="form-label">Nome</label>
                  <input type="name" class="form-control" id="exampleInputnaim" value="">
                  <div id="nameHelp" class="form-text">Inserisci il tuo nome.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="">
                  <div id="emailHelp" class="form-text">Non condividere con nessuno la tua email.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="d-flex mt-3 ">
                  <div class="mx-2">
                    <a class="btn btn-primary" href="/login" role="button">Login</a>
                  </div>
                  <div class="mx-2">
                    <a class="btn btn-primary" href="/register" role="button">Register</a>
                  </div>
                </div>

              </form>
              @endauth

            </div>
          </div>

          <x-footer />
        </div>

</x-layout>