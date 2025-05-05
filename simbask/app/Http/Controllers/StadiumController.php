<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index()
    {
        return Stadium::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        return Stadium::create($request->all());
    }

    public function show(Stadium $stadium)
    {
        return $stadium;
    }

    public function update(Request $request, Stadium $stadium)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $stadium->update($request->all());
        return $stadium;
    }

    public function destroy(Stadium $stadium)
    {
        $stadium->delete();
        return response()->json(null, 204);
    }
}