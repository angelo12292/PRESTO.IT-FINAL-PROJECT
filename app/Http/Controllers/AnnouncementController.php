<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\User;

class AnnouncementController extends Controller
{


    public function announceView(Announcement $announcement, $id)
    {
        $announcement = Announcement::findOrFail($id);
        $user = User::findOrFail($announcement->user_id);

        return view('pages.announcement.announcement', ['announcement' => $announcement,'user'=>$user]);
    }
}
