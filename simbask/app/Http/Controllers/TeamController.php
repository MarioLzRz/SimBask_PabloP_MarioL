<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return Team::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return Team::create($request->all());
    }

    public function show(Team $team)
    {
        return $team;
    }

    public function update(Request $request, Team $team)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $team->update($request->all());
        return $team;
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return response()->json(null, 204);
    }
}