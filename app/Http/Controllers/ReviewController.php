<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Song $song)
    {

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        // Create the review associated with the book and user
        $song->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'song_id' => $song->id
        ]);

        return redirect()->route('songs.show', $song)->with('success', 'Review added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        // Check if user is the owner or an admin
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('songs.index')->with('error', 'Access denied.');
        }

        // Passing the song and the review object to the view, as they are both needed
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        // check to ensure user is authorised

        // Validation code

        $review->update($request->only(['rating', 'comment']));

        // once its updated in the db, redirect 
        return redirect()->route('songs.show', $review->song_id)
                        ->with('success', 'Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review, Song $song)
    {
        $review->delete();

        return redirect()->route('songs.show', $review->song_id)
                        ->with('success', 'Song deleted successfully!');
    }
}
