<div>
    
<form action class="mt-3" wire:submit.prevent>
    <div class="mb-3">
    <label for="body"  class="form-label"></label>
    <textarea type="text" wire:model="body" class="form-control" id="body" placeholder="scrivi al venditore" style="height: 200px"></textarea>
    
    </div>
    
    <div class="mb-3 d-grid">
        <a href=""><button  wire:click="store" class="btn btn-light" type="submit">salva messaggio</button></a>
    </div>

    
    
</form>

</div>
