<x-layout>
    <section class="container text-center mt-4  " style="height:80vh">

        <div>
            <a href="{{route('insert_announce')}}" type="submit" class="btn btn-outline-info">Inserisci
                Annunci</a>
        </div>

        <h1>Buy, Sell, Rent & Exchange<br> in one Click</h1>

        <div class="row">
            <div class="col-6 m-auto border p-3">
                <form action="" method="POST">
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


</x-layout>