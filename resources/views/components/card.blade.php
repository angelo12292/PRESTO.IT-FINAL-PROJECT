<div class="card-body">
    <h5 class="card-title">{{$title}}</h5>
    <h6>Categoria: {{$category}}</h6>
    <p class="card-text">{{$description}}</p>
    <p class="card-text">Prezzo: {{ Number::currency($price, in: 'EUR', locale: 'it') }}</p>
    <a href="{{ $root }}" class="btn btn-outline-info">Visualizza Articolo</a>
</div>