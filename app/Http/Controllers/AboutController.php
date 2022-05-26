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
        return view('dashboard.about', compact('about'));
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('dashboard.about_edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);

        $about->update([
            'description' => $request->description,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect('/admin/about');
    }

    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect('admin/about');
    }
}
