
<div class="container">
    <div class="col-12">
    <form wire:submit.prevent="store">
    
    <x-success />

         <div class="mb-3">
            <label for="name" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="nome annuncio" wire:model="AnnTitle">
            @error('AnnTitle') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo € </label>
            <input type="number" class="form-control" id="price" placeholder="prezzo" wire:model="AnnPrice">
            @error('AnnPrice') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
        <select id="category_id" class="form-select" wire:model="AnnCategory">
             @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" wire:model="AnnDescrip">

            </textarea>
            @error('AnnDescrip') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-light" type="submit">Crea</button>
        </div>
    </form>
    </div>
</div>
