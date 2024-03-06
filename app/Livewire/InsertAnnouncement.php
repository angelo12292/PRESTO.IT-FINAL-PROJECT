<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;


class InsertAnnouncement extends Component
{
    public $AnnTitle;
    public $AnnCategory;
    public $AnnDescrip;
    public $AnnPrice;

    public function store()
    {
        Announcement::create([
            'title'=> $this->AnnTitle,
            'user_id'=>Auth::id(),
            'category_id'=>$this->AnnCategory,
            'description'=>$this->AnnDescrip,
            'price'=>$this->AnnPrice,
        ]);

    session()->flash('success', 'Annuncio creato con successo!');


    }
    public function render()
    {
        return view('livewire.insert-announcement', ['categories'=>Category::all()]);
    }
}
