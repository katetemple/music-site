<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all(); // Fetch all songs
        return view('songs.index', compact('songs')); // Return the view with songs
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'release_date' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('cover_image')) {
            $imageName = time().'.'.$request->cover_image->extension();
            // $request->image-.move(public_path('images/songs'), $imageName);
        }
        // Create a song record in the database
        Song::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'album' => $request->album,
            'release_date' => $request->release_date,
            'cover_image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Redirect to the index page with a success message
        return to_route('songs.index')->with('success', 'Song added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view('songs.show')->with('song', $song);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return view('songs.edit')->with('song', $song);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'release_date' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('cover_image')) {
            $imageName = time().'.'.$request->cover_image->extension();
        }

        $song->update($validated);

        return to_route('songs.index')->with('success', 'Song updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return to_route('songs.index')->with('success', 'Song deleted successfully!');
    }
}
