<?php

namespace App\Http\Controllers;
use App\Models\Announcement;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index() {

        return view('revisor.index');

    }
}
