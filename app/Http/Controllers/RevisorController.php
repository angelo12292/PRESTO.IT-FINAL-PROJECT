<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\MakeUserRevisor;


use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index() {

        $announcement_to_check = Announcement::where('is_accepted', null)->first();

        return view('revisor.index',compact('announcement_to_check'));

    }

    public function acceptAnnouncement(Announcement $announcement)

    {   $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettatto!');
    }

    public function rejectAnnouncement(Announcement $announcement)

    {   $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato!');
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('succes', 'complementi! hai richesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:MakeUserRevisor', ["email"=>$user->email]);
        return redirect()->route('home')->with(['message'=>'Complimenti! l\'utente è diventato revisore']);
    }
}
