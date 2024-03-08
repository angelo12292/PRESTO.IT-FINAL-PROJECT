<x-layout>

  
  <div class="container-md mt-5 ">

    <div class="row ">
      <div class="col-12">
        <header>
          <h1>Annuncio: {{$announcement->title}}</h1>
          <h3>{{ Number::currency($announcement->price, in: 'EUR', locale: 'it') }} <span class="text-end fs-6 ">Categoria: {{$announcement->category->name}}</span></h3>
          
        </header>
      </div>
    

    </div>
    
    <div class="row mt-2 g-5">
      
      <div class="col-sm-6 col-md-8">


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

      <div class="col-4 col-md-3 flex-column ms-5 border-start">
        @auth
        <div>
          <h5>Contatta il venditore</h3>
          <p></p>
          <p>Email: {{$user->email}}</p>
        </div>
        <div>
          <form >
        <div class="mb-3">
          <label for="validationTextarea" class="form-label">Venditore: {{$user->name}}</label>
          <textarea class="form-control" value="" id="validationTextarea" placeholder="scrivi al venditore" style="height: 200px"></textarea>
          
        </div>



          <div class="mb-3 text-secondary">
            <label for="exampleInputnaim" class="form-label">Nome</label>
            <input type="name" class="form-control" id="exampleInputnaim" value="{{auth()->user()->name}}">
            <div id="nameHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->email}}">
            <div id="emailHelp" class="form-text">Non condividere con nessuno la tua email.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <div id="emailHelp" class="form-text">Non condividere con nessuno la tua Password.</div>
          </div>

          @else
          <div>
            <h5>Contatta il venditore</h3>
            <p></p>
            <p>Email: {{$user->email}}</p>
          </div>
          <div>
            <form >
          <div class="mb-3">
            <label for="validationTextarea" class="form-label">Venditore: {{$user->name}}</label>
            <textarea class="form-control" value="" id="validationTextarea" placeholder="scrivi al venditore" style="height: 200px"></textarea>
            
          </div>



            <div class="mb-3 text-secondary">
              <label for="exampleInputnaim" class="form-label">Nome</label>
              <input type="name" class="form-control" id="exampleInputnaim" value="{{auth()->user()->name}}">
              <div id="nameHelp" class="form-text">Inserisci il tuo nome.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" value="{{auth()->user()->email}}">
              <div id="emailHelp" class="form-text">Non condividere con nessuno la tua email.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

          @endauth
          





        

        

        <div class="mb-3">
          <button class="btn btn-primary" type="submit" disabled>Invia email</button>
        </div>
        </form>
        </div>
      
        
        
        

        

        
        
      </div>
    </div>

  </div>

</x-layout>