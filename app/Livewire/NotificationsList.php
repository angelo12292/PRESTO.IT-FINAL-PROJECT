<?php

namespace App\Livewire;

use Livewire\Component;
Use Illuminate\Support\Facades\Mail;
use App\Mail\ContactVendor;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmailSentsRequest;
use App\Models\EmailSents;
use App\Models\User;
use App\Models\Notification;
use Livewire\Attributes\On;


class NotificationsList extends Component
{

    public $notifications=[];


    public function render()
    {
        return view('livewire.notifications-list');
    }
    
    public function mount()
    {
        return $this->loadNotification();
        
    }
   #[On('notification-created')]
    public function loadNotification()
    {

        if (Auth::user()) {
            
            $this->notifications = Notification::where('view',false)->where('user_id',Auth::user()->id)->take(4)->orderBy('id', 'DESC')->get();
        } else {
            $this->notifications =[];
        }
        
    }
    
 
}
