<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::insert([
            [
                'name' => 'Billie Eilish',
                'bio' => "bio",
                'image'=> 'Billie-Eilish-Hit-Me-Hard-and-Soft.jpg'
            ],
            [
                'name' => 'FINNEAS',
                'bio' => "bio",
                'image'=> 'Finneas-For-Cryin-Out-Loud.png'
            ],
            [
                'name' => 'Reneé Rapp',
                'bio' => "bio",
                'image'=> 'Reneé_Rapp_Everything_To_Everyone.png'
            ],
            [
                'name' => 'The Marías',
                'bio' => "bio",
                'image'=> 'The_Marías_-_Submarine.jpg'
            ],
            [
                'name' => 'Chappell Roan',
                'bio' => "bio",
                'image'=> 'Chappell-Roan-Princess.jpg'
            ],
        ]);
    }
}
