<x-layout>
    <x-nav />
        
        <h1 class=" m-5">Tutte le notifiche</h1>
        <ul class="list-group pb-5">
            
            <ul class="list-group">
            @foreach($notifications as $notification)
                <li class="list-group-item primary-color-bg text-white">{{$notification->body}}</li>
                
            @endforeach    
        </ul>
        
    
</x-layout>