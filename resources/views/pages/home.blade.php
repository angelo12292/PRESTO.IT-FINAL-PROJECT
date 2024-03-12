<x-layout>
<x-access-denied />
<x-success />
<x-error />
<x-message />
  <!-- HERO SECTION -->
  <section class="container mt-4 searchBar" style="height:100vh">
    <div class="row">
      <div class="col-6 d-flex flex-column justify-content-center pe-5 ">
        <h1 class="fw-bold mb-5 animate__animated animate__fadeInLeft primary-color-text">Buy, Sell, Rent & Exchange<br> in one Click</h1>
        
        <div class="row  ">
          <div class="col-12 searchStyle  p-2 rounded-5 animate__animated animate__fadeInLeft bg-white">
            <form action="{{ route('announcements.search') }}" method="GET">
              @csrf

              <div class="row">

                <div class="col-6">
                  <input type="text" name="searched" id="searched" placeholder="Cerca Annuncio" class="form-control rounded-5 ">
                </div>

                <div class="col-4">
                  <select name="searched" id="searched" class="form-select rounded-5">
                    <option selected>Categorie</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                </select>
              </div>

              <div class="col-2">
                <button type="submit" class="btn searchBtn  w-100 rounded-5 btnStatic">Cerca</button>
              </div>
          </div>
          </form>
        </div>
      </div>

    </div>

    <div class="col-6  ">
      <img src="img/Online-Shopping.png" alt="" class="shopImage animate__animated animate__fadeInRight">
      <img src="img/Online-Shopping-background.png" alt="" class="shopBack ">
    </div>

    </div>
  </section>

  <!-- END HERO SECTION -->


  <!-- SEARCH BY CATEGORY SECTION -->

  <a class="text-center " name="category-section"></a>
  <section class=" categoryCardContainer py-5 position-relative overflow-hidden  ">

    <img src="../img/Speed_Shop_Logo_grey.svg" alt="" style="width: 1000px; top:-100px; opacity: 10%; " class="position-absolute">
    <div class="container py-4">
      <h2 class="text-center mb-5 text-white display-6 " style="z-index: 1;">Categorie</h2>

      <div class="category-container mt-5">
        <div class="row gap-5">

          @foreach($categories as $category)
          <a href="{{ route('category.View', $category->id) }}" class="col-2 text-decoration-none ">
            <div class="shadow rounded-5 categoryCard d-flex flex-column justify-content-center align-items-center reveal reveal.active" style="height: 210px;">
              <h5 class=" fw-bold ">{{$category->name}}</h5>
              <div class="circle">
                <h5 class=" fw-bold m-0">{{$category->announcements()->where('is_accepted', true)->count()}}</h5>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>


  </section>





  <section class="container mt-5 pt-5  ">
    <div class="row g-2">
      @foreach($announcements as $announcement)
      <div class="col-4 mb-4 d-flex justify-content-center ">
        <x-card :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :title="$announcement->title" :root="route('announce.View',$announcement->id)" />
      </div>
      @endforeach
    </div>
  </section>


</x-layout>