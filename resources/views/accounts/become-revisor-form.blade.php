<x-layout>
    <x-nav />


<div class="container-fluid">
    
    

    <div class="raw m-0 p-0">
        <div class="col-10 mx-auto text-center">
            <h5 class="primary-color-text ">richiedi di diventare revisore.</h5>
        </div>
    </div>

    <div class="raw m-0 p-0">
        <div class="col-6 mx-auto text-center">        
            <form>

            <div class="mb-3 text-secondary">
            <label for="exampleInputnaim" class="form-label">Nome</label>
            <input type="name" class="form-control" id="exampleInputnaim" value="">
            <div id="nameHelp" class="form-text">Inserisci il tuo nome.</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="">
            <div id="emailHelp" class="form-text">Non condividere con nessuno la tua email.</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="d-flex mt-3 ">
                <div class="mx-auto">
                    <a class="btn btn-primary" href="{{route('become.revisor')}}" role="button">Invia richiesta</a>
                </div>
            </div>

            </form>
        </div>
    </div>

    <x-footer />
</x-layout>