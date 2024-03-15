<div>
@if(session()->has('success'))
    <button type="button" class="btn-close " wire:click="closeMessage"></button>
    <div class="d-flex" class="" >
   
    <div class="bg-primary text-white bg-body-secondary rounded">
      <button type="button" class="btn btn-primary">Hai una nuova notifica</button>
    </div>
    
  
</div>
    @endif    

        
</div>
