<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'bio', 'image'];

    // Artist can have many songs
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
}
