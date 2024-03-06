<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['categories' => Category::all()]);
    }
}
