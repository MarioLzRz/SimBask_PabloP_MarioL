<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return Player::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return Player::create($request->all());
    }

    public function show(Player $player)
    {
        return $player;
    }

    public function update(Request $request, Player $player)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $player->update($request->all());
        return $player;
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return response()->json(null, 204);
    }
}