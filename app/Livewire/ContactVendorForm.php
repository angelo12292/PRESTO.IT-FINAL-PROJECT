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
use Livewire\Attributes\On;


class ContactVendorForm extends Component
{
    public $emailSentId = null;
    public $body;
    public $receiving_user_id;


    public function rules(){
        return [
        'body'=> 'required|max:300'
        ];
    }
    
    public function render()
    {
        return view('livewire.contact-vendor-form');
    }

    public function store(Request $request)
    {
       
       EmailSents::create([
            

            'sending_user_id' => Auth::id(),
            'receiving_user_id' =>$this->receiving_user_id,
            
            'body' => $this->body,
            
        ]);
        
        

        $this->dispatch('mail-created');

    }

    
    // #[On('mail-created')]
    // public function contactVendor(User $user)
    // {

    //     // //dd(Auth::id()->email);
    //     Mail::to($user->email)->send(new ContactVendor(Auth::user()));
    //     //$user->email
    // }
}
