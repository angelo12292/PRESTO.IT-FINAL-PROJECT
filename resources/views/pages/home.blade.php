<x-layout>
  <section class="container mt-4 d-flex flex-column justify-content-center  " style="height:80vh">

    <div class="row">
      <div class="col-6 d-flex flex-column justify-content-center pe-5 ">
        <h1 class="fw-bold mb-5 animate__animated animate__fadeInLeft">Buy, Sell, Rent & Exchange<br> in one Click</h1>

        <div class="row">
          <div class="col-12 border border-5  p-2 rounded-5 animate__animated animate__fadeInLeft">
            <form action="{{ route('searchByCategory') }}" method="POST">
              @csrf

              <div class="row">

                <div class="col-6">
                  <input type="text" name="announce" id="announce" placeholder="Cerca Annuncio"
                    class="form-control rounded-5 ">
                </div>

                <div class="col-4">
                  <select name="category" id="category" class="form-select rounded-5">

                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-2">
                  <button type="submit" class="btn btn-danger  w-100 rounded-5">Cerca</button>
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
      <div class="col-6 ">
        <img src="img/woman-02.png" alt="" class="img-fluid animate__animated animate__fadeInRight">
      </div>
    </div>






  </section>

  <section class="container mt-5 pt-5  ">
    <div class="row g-2">
      @foreach($announcements as $announcement)
      <div class="col-4 mb-4 d-flex justify-content-center ">
        <x-card :price="$announcement->price" :description="$announcement->description"
          :category="$announcement->category->name" :title="$announcement->title"
          :root="route('announce.View',$announcement->id)" />
      </div>
      @endforeach
    </div>
  </section>


</x-layout>