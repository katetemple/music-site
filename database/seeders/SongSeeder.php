<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Artist;
use Carbon\Carbon;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        // Create a list of songs
            $songs = [
                [
                'title' => 'LUNCH',
                'genre' => 'Pop Rock',
                'album' => 'HIT ME HARD AND SOFT',
                'release_date' => '2024-05-17',
                'cover_image' => 'Billie-Eilish-Hit-Me-Hard-and-Soft.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'Lotus Eater',
                'genre' => 'Indie', 
                'album' => "For Cryin' Out Loud!", 
                'release_date' => '2024-10-01', 
                'cover_image' => 'Finneas-For-Cryin-Out-Loud.png', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'Red Wine Supernova', 
                'genre' => 'Pop', 
                'album' => 'The Rise and Fall of a Midewest Princess', 
                'release_date' => '2023-09-22', 
                'cover_image' => 'Chappell-Roan-Princess.jpg', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'In The Kitchen', 
                'genre' => 'Pop', 
                'album' => 'Everything to Everyone', 
                'release_date' => '2022-11-11', 
                'cover_image' => 'Reneé_Rapp_Everything_To_Everyone.png', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'No One Noticed', 
                'genre' => 'Indie', 
                'album' => 'Submarine', 
                'release_date' => '2022-05-31', 
                'cover_image' => 'The_Marías_-_Submarine.jpg', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ]
            ];

            foreach ($songs as $songData)
            {
                // insert the song into the song table
                $song = Song::create(array_merge($songData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));

                // randomly select two artists
                $artists = Artist::inRandomOrder()->take(2)->pluck('id');

                // Attach artists to songs
                $song->artists()->attach($artists);
            }
    }
}
