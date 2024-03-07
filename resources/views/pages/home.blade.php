<x-layout>

    <div class="w-75 position-fixed top-0 z-n1 w-100 bg-black">
        <img src="img\image.jpeg" alt="" class="img-fluid w-100">
    </div>

    <section class="container text-center mt-4" style="height:50vh">


        <h1 class="p-4">Buy, Sell, Rent & Exchange<br> in one Click</h1>

        <div class="row">
            <div class="col-6 m-auto border p-3">
                <form action="{{ route('searchByCategory') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-6">
                            <input type="text" name="announce" id="announce" placeholder="Cerca Annuncio" class="form-control">
                        </div>

                        <div class="col-3">
                            <select name="category" id="category" class="form-select">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-3">
                            <button type="submit" class="btn btn-primary w-100">Cerca</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>


    </section>

    <section class="container">
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