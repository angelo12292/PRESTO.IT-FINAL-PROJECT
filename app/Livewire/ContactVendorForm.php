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
    public $emailSentId;
    #[Validate]
    public $body;
    public $receiving_user_id;
    public $receiving_user_email;



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
        $this->validate();

       EmailSents::create(
        [


            'sending_user_id' => Auth::id(),
            'receiving_user_id' =>$this->receiving_user_id,
            'body' => $this->body,

        ]);



        $this->dispatch('mail-created');

    }

    public function resetEmailBody()
    {
        $this->body = '';

    }


    #[On('mail-created')]
    public function contactVendor()
    {

        Mail::to($this->receiving_user_email)->send(new ContactVendor(Auth::user()));
        $this->resetEmailBody();

        session()->flash('success', 'Hai inviato correttamente la mail al venditore.');


    }
}
