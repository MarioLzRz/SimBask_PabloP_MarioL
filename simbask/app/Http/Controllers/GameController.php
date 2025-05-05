<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return Game::create($request->all());
    }

    public function show(Game $game)
    {
        return $game;
    }

    public function update(Request $request, Game $game)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $game->update($request->all());
        return $game;
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return response()->json(null, 204);
    }
}