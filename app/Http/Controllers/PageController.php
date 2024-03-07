<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Announcement;

class PageController extends Controller
{

    public function home()
    {
        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')->get();

        return view('pages.home', ['categories' => Category::all(), 'announcements' => $announcements]);
    }
}
