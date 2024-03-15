<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Announcement;

class PageController extends Controller
{

    public function home()
    {
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();

        


        return view('pages.home', ['categories' => Category::all(), 'announcements' => $announcements]);
    }

    // public function searchByCategory(Request $request)
    // {

    //     $category = $request->input('category');

    //     $announcements = Announcement::where('category_id', $category)->get();

    //     return view('pages.home', ['announcements' => $announcements, 'categories' => Category::all()]);
    // }

    public function searchAnnouncements(Request $request)
    {
        // Quello incrociato

        if ($request->searched && $request->searchedCategory != 'Categorie') {
            $announcements = Announcement::search($request->searched)->where('is_accepted', true)->where('category_id', $request->searchedCategory)->paginate(10);

            return view('pages.announcement.index', compact('announcements'));
        }



        // Per il solo titolo

        elseif ($request->searched && $request->searchedCategory == 'Categorie') {
            $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
            return view('pages.announcement.index', compact('announcements'));
        }

        // Errore

        elseif (!$request->searched && $request->searchedCategory == 'Categorie') {
            return redirect()->back()->with('errorSearch', 'Ricerca sbagliata');
        }

        // Per la categoria

        elseif (!$request->searched) {
            $announcements = Announcement::search($request->searchedCategory)->where('is_accepted', true)->paginate(10);

            return view('pages.announcement.index', compact('announcements'));
        }
    }
}
