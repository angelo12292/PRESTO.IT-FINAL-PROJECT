<div >
    <h6 class="primary-color-text ps-3 border-top mb-0 py-2">NOTIFICHE</h6>
    <ul class="list-group ">
        
        @foreach($notifications as $notification)
        
        <li class="list-group-item ps-3 w-100">
            <a href="{{route('notification.index')}}" class="nav-link primary-color-text dropDownHover w-100 text-start "
              type="submit">{{$notification->id}}: {{$notification->body}}</a>
        </li>
        
        @endforeach
    </ul>
        

</div>





