<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index()
    {
        return League::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return League::create($request->all());
    }

    public function show(League $league)
    {
        return $league;
    }

    public function update(Request $request, League $league)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $league->update($request->all());
        return $league;
    }

    public function destroy(League $league)
    {
        $league->delete();
        return response()->json(null, 204);
    }
}