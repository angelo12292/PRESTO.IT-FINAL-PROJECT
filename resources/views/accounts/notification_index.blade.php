<x-layout>
    <x-nav />
        

        <ul class="list-group">
            <li class="list-group-item ps-3 w-100">
                <p class=" primary-color-text   text-start "
                type="submit"></p>
            </li>
            <ul class="list-group">
            @foreach($notifications as $notification)
                <li class="list-group-item">{{$notification->id}}: {{$notification->body}}</li>
                
            @endforeach    
        </ul>
        
    <x-footer/>
</x-layout>