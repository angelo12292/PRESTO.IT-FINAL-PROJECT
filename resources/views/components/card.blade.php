<div class="card  reveal reveal.active rounded-4 h-100 shadow-sm" style="width: 22rem;">
  <img src="https://picsum.photos/300/20{{rand(0, 9)}}" class="card-img-top rounded-top-4 " alt="...">
  <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between ">
    <h5 class="card-title">{{$title}}</h5>
    <p class="card-text"><span class="h6">Categoria: </span> {{$category}}</p>

    <p class="card-text text-truncate"><span class="h6">Descrizione: </span>{{$description}}</p>
    <p class="card-text"><span class="h6">Prezzo: </span> {{ Number::currency($price, in: 'EUR', locale: 'it') }}</p>

    <a href="{{ $root }}" class="btn btn-outline-info rounded-3 ">Visualizza Articolo</a>
  </div>

</div>