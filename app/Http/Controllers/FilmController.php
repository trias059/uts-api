<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'title' => 'required|string',
            'genre' => 'required|string',
            'director' => 'required|string',
            'release_year' => 'nullable|integer',
            'rating' => 'required|numeric|between:0,10'
        ]);

        $film = Film::create($validated);
        return response()->json($film, 201);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $film = Film::find($id);
        if ($film) {
            return response()->json($film);
        }
        return response()->json(['message' => 'Film not found'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $film = Film::find($id);
    
    if (!$film) {
        return response()->json(['message' => 'Film not found'], 404);
    }

    $validated = $request->validate([
        'title' => 'sometimes|string',
        'genre' => 'sometimes|string',
        'director' => 'sometimes|string',
        'release_year' => 'nullable|integer',
        'rating' => 'sometimes|numeric|between:0,10'
    ]);

    $film->update($validated);

    return response()->json(['message' => 'Film updated successfully', 'data' => $film], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        if ($film) {
            $film->delete();
            return response()->json(['message' => 'Film deleted successfully']);
        }
        return response()->json(['message' => 'Film not found'], 404);
    }
    public function rating7lebih()
    {
        $films = Film::where('rating', '>', 7)->get();
        return response()->json($films);
    }
}
