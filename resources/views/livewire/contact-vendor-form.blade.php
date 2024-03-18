<div>

<form class="mt-3" wire:submit="store">
    <div class="mb-3">
        <label for="body"  class="form-label"></label>
        <textarea type="text" wire:model="body" class="form-control p-0" id="body" placeholder="  Scrivi al venditore" style="height: 200px"></textarea>
    </div>
     
    <div class="mb-3 d-grid">
        <button wire:confirm="Confermi di voler inviare l'email" wire:click="emailSent" class="btn btn-light p-0" type="submit">invia messaggio</button>
    </div>
    <input type="text" class="invisible z-n1" value="{{$receiving_user_id}}" wire:model="receiving_user_id">
    <input type="text" class="invisible z-n1" value="{{$receiving_user_email}}" wire:model="receiving_user_email">
    <div class="dropdown background ">
          @if(session()->has('success'))
          <span class="position-absolute top-0 start-100 translate-middle rounded-pill bg-danger" style="width:10px; height:10px"></span>
          @endif
          <button class="btn primary-color-text dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell-fill"></i>
          </button>
          <ul class="dropdown-menu background ">
            <li>
              <livewire:notifications-list />
            </li>
          </ul>
        </div>
       
    <!-- <div class="mb-3 d-grid">
          <a href=""><button  wire:click="save" class="btn btn-light" type="submit">Invia email </button></a>
        </div> -->

        
</form>

</div>
