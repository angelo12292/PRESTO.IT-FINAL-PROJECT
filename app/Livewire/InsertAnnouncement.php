<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class InsertAnnouncement extends Component
{
    use WithFileUploads;

    use WithFileUploads;

    #[Validate('required|max:50')]
    public $AnnTitle;
    
    public $AnnCategory;
    #[Validate('required|max:200')]
    public $AnnDescrip;
    #[Validate('required|min:1')]
    public $AnnPrice;
    
    public $images = [];
    
    public $temporary_images =[];

    public $announcement_id = null;

    protected function rules()
    {
        return [
            'AnnTitle'=>'required|max:50',
            'AnnCategory'=>'required|max:200',
            'AnnDescrip'=>'required|min:1',
            'AnnPrice'=>'required|max:10000',
            
            'images.*'=>'image|max:10000',
            'temporary_images.*'=>'image|max:10000',
        ];
    }

    
    protected $messages =[
        'required'=> 'il campo :attribute è richiesto',
        'images.max'=>'L\'immagine è richiesta',
        'temporary_images.*.max'=>'il file deve essere massimo di ',
        'temporary_images.required'=>'L\'immagine è richiesta'
        
    
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

        $this->announcement->user()->associate(Auth::user());

        $this->announcement->save();

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
