<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Carbon\Carbon;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
            Song::insert([
                [
                'title' => 'LUNCH',
                'genre' => 'Pop Rock',
                'album' => 'HIT ME HARD AND SOFT',
                'release_date' => '2024-05-17',
                'cover_image' => 'https://media.pitchfork.com/photos/6614092742a7de97785c7a48/master/w_1280%2Cc_limit/Billie-Eilish-Hit-Me-Hard-and-Soft.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'Lotus Eater',
                'genre' => 'Indie', 
                'album' => "For Cryin' Out Loud!", 
                'release_date' => '2024-10-01', 
                'cover_image' => 'https://i.scdn.co/image/ab67616d0000b2734db4ce3fe9ed73fb7bc79b4a', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'Red Wine Supernova', 
                'genre' => 'Pop', 
                'album' => 'The Rise and Fall of a Midewest Princess', 
                'release_date' => '2023-09-22', 
                'cover_image' => 'https://upload.wikimedia.org/wikipedia/en/3/34/Chappell_Roan_-_The_Rise_and_Fall_of_a_Midwest_Princess.png', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'In The Kitchen', 
                'genre' => 'Pop', 
                'album' => 'Everything to Everyone', 
                'release_date' => '2022-11-11', 
                'cover_image' => 'https://i.scdn.co/image/ab67616d0000b2737251a75664414e04757eafe7', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ],
                [
                'title' => 'No One Noticed', 
                'genre' => 'Indie', 
                'album' => 'Submarine', 
                'release_date' => '2022-05-31', 
                'cover_image' => 'https://i.scdn.co/image/ab67616d0000b2734d070fdf58fad8c54c5beb85', 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
                ]
            ]);
    }
}
