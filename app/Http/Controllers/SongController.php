<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    /**
     * Shows all songs, optionally filtered by a search input
     */
    public function index(Request $request)
    {
        $searchInput = $request->input('search');
        $query = Song::query();

        if($searchInput) {
            $query->where('title', 'LIKE', "%$searchInput%")
                ->orWhere('genre', 'LIKE', "%$searchInput%")
                ->orWhere('album', 'LIKE', "%$searchInput%");

        }

        $songs = $query->orderBy('title', 'asc')->get(); // in alphabetical order

        return view('songs.index', compact('songs')); // Return the view with songs
    }

    /**
     * Show the form for creating a new song
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Validates, processes, and saves the new song data
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'release_date' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image required in create form only
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('cover_image')) {
            $imageName = time().'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('images/songs'), $imageName);
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
     * Shows details of a single song
     */
    public function show(Song $song)
    {
        return view('songs.show')->with('song', $song);
    }

    /**
     * Displays song edit form with its current data
     */
    public function edit(Song $song)
    {
        return view('songs.edit')->with('song', $song);
    }

    /**
     * Validates and updates song data 
     */
    public function update(Request $request, Song $song)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'release_date' => 'required|date',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // image is optional for the sake of editing a song
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('cover_image')) {
            $imageName = time().'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('images/songs'), $imageName);
        }

        $song->update($validated);

        return to_route('songs.index')->with('success', 'Song updated successfully!');
    }

    /**
     * Deletes the song data
     */
    public function destroy(Song $song)
    {
        // Retrive the cover image filename
        $imagePath = public_path('images/songs/' . $song->cover_image);

        // Check if the file exists then delete it
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the song from the database
        $song->delete();

        return to_route('songs.index')->with('success', 'Song deleted successfully!');
    }
}

