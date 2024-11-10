<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Song management routes (index, create, show, edit, update, delete, search)
    Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
    Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
    Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');
    Route::get('/songs/{song}/edit', [SongController::class, 'edit'])->name('songs.edit');
    Route::patch('/songs/{song}', [SongController::class, 'update'])->name('songs.update');
    Route::delete('/songs/{song}/destroy', [SongController::class, 'destroy'])->name('songs.destroy');
    Route::post('/songs', [SongController::class, 'store'])->name('songs.store');

    // Profile management routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
