<div>
@if(session()->has('success'))
    
    <button type="button" class="btn btn-primary position-relative">
        Hai una nuova notifica <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
    </button>
    <button type="button" class="btn-close " wire:click="closeMessage"></button>
  

    @endif    

        
</div>
