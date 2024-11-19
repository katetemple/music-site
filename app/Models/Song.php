<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'genre',
        'album',
        'release_date',
        'cover_image'
    ];

    // song can have many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Song can have many artists
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }
}
