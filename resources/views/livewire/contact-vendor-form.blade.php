<div>

<form action"" class="mt-3" wire:submit.prevent="store">
    <div class="mb-3">
        <label for="body"  class="form-label"></label>
        <textarea type="text" wire:model="body" class="form-control p-0" id="body" placeholder="scrivi al venditore" style="height: 200px"></textarea>
        @error('taskName')<span class="text-danger small">{{$message}}</span> @enderror
        
    
    </div>
     
    <x-success/>

    <div class="mb-3 d-grid">
        <button  wire:click="" class="btn btn-light p-0" type="submit">invia messaggio</button>
    </div>
    <input type="text" class="invisible z-n1" value="{{$receiving_user_id}}" wire:model="receiving_user_id">
    <input type="text" class="invisible z-n1" value="{{$receiving_user_email}}" wire:model="receiving_user_email">
    
       
    <!-- <div class="mb-3 d-grid">
          <a href=""><button  wire:click="save" class="btn btn-light" type="submit">Invia email </button></a>
        </div> -->

        
</form>

</div>
