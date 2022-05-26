<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
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
        return view('dashboard.about', compact('about', 'team'));
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('dashboard.about_edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        $about = About::find($id);
        $about->update([
            'description' => $request->description,
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);
        return redirect('/admin/about');
    }
}
