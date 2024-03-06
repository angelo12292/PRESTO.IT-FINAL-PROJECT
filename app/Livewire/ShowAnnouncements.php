<?php

namespace App\Livewire;

use Livewire\Component;

class ShowAnnouncements extends Component
{
    public $announcements = [];

    public function render()
    {
        return view('livewire.show-announcements');
    }

    public function mount()
    {
        $this->loadAnnouncements();
    }

    #[on('announcements-created')]
    public function loadAnnouncements()
    {
        $this->announcements = Announcement::orderBy('created_at','desc')->get();
    }
}
