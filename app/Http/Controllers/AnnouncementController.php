<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{


    public function announceView(Announcement $announcement, $id)
    {
        $announcement = Announcement::findOrFail($id);

        return view('pages.announcement.announcement', ['announcement' => $announcement]);
    }
}
