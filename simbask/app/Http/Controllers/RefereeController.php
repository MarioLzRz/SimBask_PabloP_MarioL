<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    public function index()
    {
        return Referee::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return Referee::create($request->all());
    }

    public function show(Referee $referee)
    {
        return $referee;
    }

    public function update(Request $request, Referee $referee)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $referee->update($request->all());
        return $referee;
    }

    public function destroy(Referee $referee)
    {
        $referee->delete();
        return response()->json(null, 204);
    }
}