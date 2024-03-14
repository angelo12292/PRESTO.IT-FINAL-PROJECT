@if(session()->has('success'))

<p class="d-inline-flex gap-1">
    
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Notifiche
    </button>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
    {{ session('success') }}
    </div>
    </div>
    
@endif