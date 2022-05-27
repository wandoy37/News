<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function edit($id)
    {
        $team = Team::find($id);
        // dd($team);
        return view('dashboard.team_edit', compact('team'));
    }

    public function update(TeamRequest $request, $id)
    {
        $team = Team::find($id);
        $data = [
            'name' => $request->name,
            'position' => $request->position,
        ];

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('team-image');
        }

        $team->update($data);

        return redirect('/admin/about');
    }
}
