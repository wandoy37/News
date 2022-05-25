<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all()->first();
        $team = Team::all();
        $title = ('News - About Us');
        return view('home.about', compact('title', 'about', 'team'));
    }

    public function show()
    {
        return view('dashboard.about');
    }
}
