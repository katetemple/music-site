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

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
