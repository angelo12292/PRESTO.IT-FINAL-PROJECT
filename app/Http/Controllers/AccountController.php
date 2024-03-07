<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;

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
}
