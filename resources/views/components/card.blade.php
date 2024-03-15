<a href="{{ $root }}" class="">
  <div class="card  reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative "
    style="width: 22rem;">
    <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
      <div class="d-flex align-items-center">
        <i class="bi bi-person-circle fs-2 "></i>
        <h6 class="m-0 ms-2 "></h6>
      </div>

    </div>
    <div class="position-relative ">

      <div class="blackGradient"></div>
      <p class="card-text position-absolute accent-color-text fw-bold h5 price">
        {{ Number::currency($price, in: 'EUR', locale: 'it') }}
      </p>
      <img src="https://picsum.photos/300/20{{rand(0, 9)}}" class="card-img-top rounded-top-4 " alt="...">
    </div>

    <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4">
      <div class="d-flex">
        <i class="bi bi-tags-fill accent-color-text"></i>
        <p class="card-text m-0 primary-color-text ms-2 text-uppercase ">{{$category}}</p>
      </div>
      <h5 class="card-title primary-color-text">{{$title}}</h5>

      <!-- <p class="card-text text-truncate"><span class="h6">Descrizione: </span>{{$description}}</p> -->


    </div>

  </div>
</a>