<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Announcement;

class PageController extends Controller
{

    public function home()
    {
        $announcements = Announcement::where('is_accepted',true)->take(6)->orderBy('created_at', 'desc')->get();

        return view('pages.home', ['categories' => Category::all(), 'announcements' => $announcements]);
    }

    public function searchByCategory(Request $request)
    {

        $category = $request->input('category');

        $announcements = Announcement::where('category_id', $category)->get();

        return view('pages.home', ['announcements' => $announcements, 'categories' => Category::all()]);
    }
}
