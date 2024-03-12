<x-layout>
    <div class="container mt-5">
        @if(session()->has('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif
        @if(session()->has('fail'))
        <div class="alert alert-warning ">
        {{ session('fail') }}
        </div>
        @endif



        <div class="row">
            <div class="col-5">

                <div class="row ">
                    <div class="col-12">
                        <header>
                        <h1 class="text-center">{{$announcement_checked['true'] ? 'Ecco l\'annuncio accettato' : 'Non ci sono annunci da revisionare'}}</h1>
                        </header>
                    </div>
                </div>
                @if($announcement_checked['true'])

                <div class="row">
                    <div class="col-12">
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

                        <h5 class="mb-2 fw-light h2">Titolo: </h5>
                        <h4 class="mb-4 ">{{$announcement_checked['true']->title}}</h4>
                        <h4 class="mb-2 fw-light h2">Descrizione:</h4>
                        <h4 class="mb-4 ">{{$announcement_checked['true']->description}}</h4>
                        <h4 class="mb-2 fw-light h2">Prezzo:</h4>
                        <h4 class="mb-4 ">{{$announcement_checked['true']->price}}</h4>

                    </div>
                </div>
                <div class="row gap-3 ">


                    <form action="{{route ('revisor.restore_announcement',['announcement'=>$announcement_checked['true']])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary ">Ripristina </button>
                    </form>


                    <form action="{{route ('revisor.reject_announcement',['announcement'=>$announcement_checked['true']])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger ">Rifiuta</button>
                    </form>
                </div>
                @endif
            </div>


            <div class="col-5">

                <div class="row ">
                    <div class="col-12">
                        <header>
                        <h1 class="text-center">{{$announcement_checked['false'] ? 'Ecco l\'annuncio scartato' : 'Non ci sono annunci da revisionare'}}</h1>
                        </header>
                    </div>
                </div>
                @if($announcement_checked['false'])

                <div class="row">
                    <div class="col-12">
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

                        <h5 class="mb-2 fw-light h2">Titolo: </h5>
                        <h4 class="mb-4 ">{{$announcement_checked['false']->title}}</h4>
                        <h4 class="mb-2 fw-light h2">Descrizione:</h4>
                        <h4 class="mb-4 ">{{$announcement_checked['false']->description}}</h4>
                        <h4 class="mb-2 fw-light h2">Prezzo:</h4>
                        <h4 class="mb-4 ">{{$announcement_checked['false']->price}}</h4>

                    </div>
                </div>
                <div class="row gap-3 ">

                    <form action="{{route ('revisor.restore_announcement',['announcement'=>$announcement_checked['false']])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary ">Ripristina </button>
                    </form>

                    <form action="{{route ('revisor.accept_announcement',['announcement'=>$announcement_checked['false']])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-secondary ">Accetta</button>
                    </form>

                </div>
                @endif
            </div>

        </div>
    </div>
    
    
  
</x-layout>