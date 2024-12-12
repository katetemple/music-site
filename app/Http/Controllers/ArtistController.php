<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchInput = $request->input('search');
        $query = Artist::query();

        if($searchInput) {
            $query->where('name', 'LIKE', "%$searchInput%");

        }

        $artists = $query->orderBy('name', 'asc')->get(); // in alphabetical order

        return view('artists.index', compact('artists')); // Return the view with artists
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        // add in 
        $validated = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'dob' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image required in create form only
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/artists'), $imageName);
            $validated['image'] = $imageName;
        }

        // Create a artist record in the database
        Artist::create([
            'name' => $validated['name'],
            'bio' => $validated['bio'],
            'dob' => $validated['dob'],
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        // Redirect to the index page with a success message
        return to_route('artists.index')->with('success', 'Artist added successfully!');
    }

    /**
     * Display the artists details.
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit')->with('artist', $artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'dob' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // image required in create form only
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/artists'), $imageName);
            $validated['image'] = $imageName;
        }

        $artist->update($validated);

        return to_route('artists.index')->with('success', 'Artist updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        // Delete the song from the database
        $artist->delete();

        return to_route('artists.index')->with('success', 'Artist deleted successfully!');
    }
}
