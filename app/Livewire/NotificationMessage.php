<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationMessage extends Component
{


    public function closeMessage()
    {
        

        $this->dispatch('message-closed');

    }
    public function render()
    {
        return view('livewire.notification-message');
    }
}
