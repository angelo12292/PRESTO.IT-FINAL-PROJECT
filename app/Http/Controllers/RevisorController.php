<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\MakeUserRevisor;


use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {

        $announcement_to_check = Announcement::where('is_accepted', null)->first();

        

        
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function indexRevised()
    {

        $announcement_checked = [

            'true'=>Announcement::where('is_accepted', true)->first(),
            'false'=>Announcement::where('is_accepted', false)->first(),

        ] ;

        return view('revisor.index-revised', compact('announcement_checked'));
    }

    public function acceptAnnouncement(Announcement $announcement)

    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('success', 'Annuncio accettatto!');
    }

    public function rejectAnnouncement(Announcement $announcement)

    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('fail', 'Annuncio rifiutato!');
    }

    public function restoreRevisionAnnouncement(Announcement $announcement)

    {
        $announcement->setAccepted(NULL);
        return redirect()->back()->with('success', 'Revisone dell \'annuncio ripristinata!');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')->with('success', 'complementi! hai richesto di diventare revisore correttamente, attendi la conferma da parte dell\'admin');
    }

    public function makeRevisor(User $user)
    {

        if (Auth::check() && Auth::user()->is_revisor){
            
            return redirect('/')->with(['error' => 'Hai già reso revisore questo utente']);
        }
        
        Artisan::call('presto:MakeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with(['success' => 'Complimenti! l\'utente è diventato revisore']);
        
    }
}
