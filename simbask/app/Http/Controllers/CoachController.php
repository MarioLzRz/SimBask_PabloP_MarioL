<?php
namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        return Coach::all(); // Devuelve todos los registros de Coach
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $coach = Coach::create($request->all());
        return response()->json($coach, 201);
    }

    public function show(Coach $coach)
    {
        return $coach; // Devuelve un registro específico
    }

    public function update(Request $request, Coach $coach)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $coach->update($request->all());
        return response()->json($coach, 200);
    }

    public function destroy(Coach $coach)
    {
        $coach->delete();
        return response()->json(null, 204);
    }
}