<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;


class InsertAnnouncement extends Component
{
    use WithFileUploads;

    #[Validate('required|max:50')]
    public $AnnTitle;
    
    public $AnnCategory;
    #[Validate('required|max:200')]
    public $AnnDescrip;
    #[Validate('required|min:1')]
    public $AnnPrice;
    
    public $images = [];
    #
    public $temporary_images =[];
    public $announcement_id;
    
    protected $messages =[
        'required'=> 'il campo :attribute è richiesto',
        'images.max'=>'L\'immagine è richiesta'
        
    
    ];

    public function store()
    {
        $this->validate();

        
        $this->announcement_id = Announcement::create([
            'title' => $this->AnnTitle,
            'user_id' => Auth::id(),
            'category_id' => $this->AnnCategory,
            'description' => $this->AnnDescrip,
            'price' => $this->AnnPrice,
            
        ])->id;
        
            


        if (count($this->images)) {
            foreach ($this->images as $image) {
                Image::create([
                    'announcement_id'=> $this->announcement_id,
                    'path'=>$image->store('images', 'public')
                ]);
            }
        }

        $this->resetAnnounce();
        
        session()->flash('announcementSuccess');
        
    }

    public function resetAnnounce()
    {
        $this->AnnTitle = '';
        $this->AnnDescrip = '';
        $this->AnnCategory = '';
        $this->images = [];
        $this->temporary_images = [];
        $this->AnnPrice = '';
    }

    public function announcementCreated()
    {
        $this->dispatch('announcement-created');
        session()->flash('success');
    }

    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=>'image|max:10000',
            

        ])){
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
        
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.insert-announcement', ['categories' => Category::all()]);
    }
}
