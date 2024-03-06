<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Announcement;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['categories' => Category::all()]);
    }

    public function show() {
        $announcements=Announcement::all();
        return view('announcements.show-announcements', compact('announcements'));
    }
}

