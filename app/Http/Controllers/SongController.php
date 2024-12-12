<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
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
        $artists = Artist::all(); // Get all artists to display in form
        return view('songs.create', compact('artists'));
    }

    /**
     * Validates, processes, and saves the new song data
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'release_date' => 'required|date',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image required in create form only
            'artists' => 'array|exists:artists,id'
        ]);

        // Check if image is uploaded and handle it
        if ($request->hasFile('cover_image')) {
            $imageName = time().'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('images/songs'), $imageName);
        }

        // Create a song record in the database
       // Create a song record in the database
        $song = Song::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'album' => $validated['album'],
            'release_date' => $validated['release_date'],
            'cover_image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // use attach method for artists
        if (isset($validated['artists'])) {
            $song->artists()->attach($validated['artists']);
        }

        // Redirect to the index page with a success message
        return to_route('songs.index')->with('success', 'Song added successfully!');
    }

    /**
     * Shows details of a single song
     */
    public function show(Song $song)
    {
        // Load the book with its associated reviews and the user who made each review
        $song->load(['reviews.user', 'artists']); // Assuming each review has a 'user_id' for the review
        // Compact is shorthand for this return view('songs.show')->with('song', $song);
        return view('songs.show', compact('song'));
    }

    /**
     * Displays song edit form with its current data
     */
    public function edit(Song $song)
    {
        $artists = Artist::all(); // Get all artists
        return view('songs.edit', compact('song', 'artists'));
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
        // Delete the song from the database
        $song->delete();

        return to_route('songs.index')->with('success', 'Song deleted successfully!');
    }
}

