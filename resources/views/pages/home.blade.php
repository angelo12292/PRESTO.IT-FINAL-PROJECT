<x-layout>

    <img src="../img/image_black.jpg" alt="">

    <div class="imgSfondo">



        <section class="container text-center d-flex flex-column justify-content-center h-100 " style="height:50vh">
            <h1 class="p-4 fw-bold text-white top-50 ">Buy, Sell, Rent & Exchange<br> in one Click</h1>

            <div class="row ">
                <div class="col-8 m-auto border p-3 rounded-5 bg-white shadow z-3">
                    <form action="{{ route('searchByCategory') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-6">
                                <input type="text" name="announce" id="announce" placeholder="Cerca Annuncio" class="form-control rounded-4">
                            </div>

                            <div class="col-3">
                                <select name="category" id="category" class="form-select rounded-4">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <button type="submit" class="btn btn-primary w-100 rounded-4">Cerca</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>

    </div>
    </section>

    <section class="container mt-5">
        <div class="row g-2">
            @foreach($announcements as $announcement)
            <div class="col-4 mb-4 d-flex justify-content-center ">
                <div class="card " style="width: 18rem;">
                    <img src="https://picsum.photos/3{{rand(0, 9)}}{{rand(0, 9)}}/2{{rand(0, 9)}}{{rand(0, 9)}}" class="card-img-top" alt="...">
                    <x-card :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :title="$announcement->title" :root="route('announce.View',$announcement->id)" />

                </div>

            </div>
            @endforeach
        </div>
    </section>


</x-layout>