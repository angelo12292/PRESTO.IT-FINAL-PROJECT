<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;
use App\Models\User;
Use Illuminate\Support\Facades\Mail;
use App\Mail\ContactVendor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;


class AccountController extends Controller
{
    public function insertAnnouncement()
    {
        return view('accounts.insert_announcement');
    }

    public function showAnnouncements()
    {
        $announcements = Announcement::all();
        return view('accounts.show-announcements', compact('announcements'));
    }
    
   public function contactVendor(User $user)
   {
        
       Mail::to($user->email)->send(new ContactVendor(Auth::user()));
       return redirect()->back()->with(['success' => 'hai inviato l\'email al venditore']);
       
        
   }

//    public function store(Request $request)
//     {
//         EmailSents::create([
            
//             'sending_user_id' => Auth::id(),
            
//             'body' => $this->body,
            
//         ]);

//         $this->dispatch('mail-created');

//     }

    

    

    
}
