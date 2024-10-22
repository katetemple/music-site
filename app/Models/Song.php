<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'album',
        'release_date',
        'cover_image'
    ];

    use HasFactory;
}
