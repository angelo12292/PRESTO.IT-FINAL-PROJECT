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

class NotificationForm extends Component
{

    public $user;
    public $success='operazione avvenuta con successo';
    public $error="sono in error";
    


    public function rules(){
        return [
        'body'=> 'required|max:300'
        ];

    }

    public function render()
    {
        return view('livewire.notification-form');
    }
    #[On('message-closed')]
    public function store(Request $request)
    {
       

       Notification::create(
        [
            'user_id' => Auth::id(),
            'body' => $this->success,
        ]);

        $this->dispatch('notification-created');

    }
    



}
