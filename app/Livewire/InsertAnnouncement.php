<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;


class InsertAnnouncement extends Component
{
    #[Validate('required|max:50')]
    public $AnnTitle;
    public $AnnCategory;
    #[Validate('required|max:200')]
    public $AnnDescrip;
    #[Validate('required|min:1')]
    public $AnnPrice;



    public function store()
    {
        $this->validate();

        Announcement::create([
            'title' => $this->AnnTitle,
            'user_id' => Auth::id(),
            'category_id' => $this->AnnCategory,
            'description' => $this->AnnDescrip,
            'price' => $this->AnnPrice,
        ]);

        $this->resetAnnounce();
        
        return redirect()->route('insert_announcement')->with('success', 'Annuncio creato con successo!');
        

        
    }

    public function resetAnnounce()
    {
        $this->AnnTitle = '';
        $this->AnnDescrip = '';
        $this->AnnCategory = '';
        $this->AnnPrice = '';
    }

    public function render()
    {
        return view('livewire.insert-announcement', ['categories' => Category::all()]);
    }
}
