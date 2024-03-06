<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class InsertAnnouncement extends Component
{
    public $AnnTitle;
    public $AnntUser;
    public $AnnCategory;
    public $AnnDescrip;
    public $AnnPrice;

    public function store()
    {
        Announcement::create([
            'title'=> $this->AnnTitle,
            'user'=>$this->AnntUser,
            'category_id'=>$this->AnnCategory,
            'description'=>$this->AnnDescrip,
            'price'=>$this->AnnPrice,
        ]);

    session()->flash('success', 'Annuncio creato con successo!');


    }
    public function render()
    {
        return view('livewire.insert-announcement');
    }
}
