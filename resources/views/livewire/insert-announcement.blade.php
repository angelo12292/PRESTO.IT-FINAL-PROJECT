<div class="container">
    <x-nav />

    <div class="col-12 mt-5 pt-5 " style="height: 80vh">
        <form wire:submit.prevent="store">

            <div class="row">
                <div class="col-6 m-auto mt-5 ">
                    <x-success />
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('AnnTitle') is-invalid @enderror" id="title" placeholder="nome annuncio" wire:model="AnnTitle">
                        @error('AnnTitle') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label ">Prezzo € </label>
                        <input type="number" class="form-control @error('AnnPrice') is-invalid @enderror" id="price" placeholder="prezzo" wire:model="AnnPrice">
                        @error('AnnPrice') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <select id="category_id" class="form-select" wire:model="AnnCategory">
                            <option selected>Categorie</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('AnnDescrip') is-invalid @enderror" id="description" rows="3" wire:model="AnnDescrip">

                </textarea>
                        @error('AnnDescrip') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn text-white rounded-5  primary-color-bg btnStatic" type="submit">Crea</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <x-footer />
</div>