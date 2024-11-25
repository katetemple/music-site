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
                'bio' => "Billie Eilish remains one of the biggest stars to emerge in the 21st century. Her third studio album, HIT ME HARD AND SOFT features 10 tracks written and recorded in her hometown of Los Angeles, with her brother and producer FINNEAS. In 2019, her debut album WHEN WE ALL FALL ASLEEP, WHERE DO WE GO? debuted at No. 1 in 18 countries, and was the most streamed album of that year. In 2021, her sophomore album 'Happier Than Ever’ debuted at #1 in 20 countries. Both albums were critically acclaimed worldwide and were written, produced, and recorded entirely by Billie Eilish and FINNEAS. 9-time GRAMMY® Award-winning Billie Eilish has made history as the youngest artist to receive nominations and win in all the major GRAMMY® categories, receiving an award for Best New Artist, Album of the Year, Record of the Year, Song of the Year, and Best Pop Vocal Album, and is the youngest artist to write and record an official James Bond theme song, ‘No Time To Die,’ which won an Academy Award for Best Original Song in 2022. In 2023, Eilish also wrote and released the critically acclaimed song “What Was I Made For?” for the Greta Gerwig-directed motion picture Barbie, which also won Academy and Golden Globe Award for Best Original Song, two GRAMMY® Awards for Song of the Year and Best Song Written For Visual Media, and has solidified Billie Eilish yet again in the history books as the youngest person ever to win two Academy Awards.",
                'image'=> 'BillieEilish.jpg'
            ],
            [
                'name' => 'FINNEAS',
                'bio' => "Finneas O'Connell is an American actor and musician who plays Alistaire in the Fox TV series Glee and stars as Shane in the award winning independent feature Life Inside Out. He is also known for his portrayal of the character Spencer (Twilight) in Columbia Pictures' Bad Teacher, has a recurring role on ABC's Modern Family and appears in the premiere episode of 'Aquarius'. Finneas began writing songs at the age of 12. He is the front man and lead singer/songwriter of the band, The Slightlys, whose song, 'Is There Anybody There' appeared in an episode of ABC Family's Switched At Birth. The band has won numerous awards and competitions in the Los Angeles area.",
                'image'=> 'Finneas.jpg'
            ],
            [
                'name' => 'Reneé Rapp',
                'bio' => "Reneé Rapp knew she was born to perform ever since she was a child. Even in her earliest memories, her love of music was always present. 'I couldn't sit still in the car unless there was music,' she says. 'Otherwise, I would cry the entire time.' The North Carolina native began harnessing her natural creativity by writing and recording songs when she was just a teenager. Eventually, her career took off when she landed the coveted role of Regina George in the Tony-nominated Mean Girls musical on Broadway. Shortly after, she found widespread recognition and praise—from the likes of W, Harper’s Bazaar, and The Hollywood Reporter for her performance as 'Leighton' on the HBO Max series 'College Girls' written by Mindy Kaling. Now, more empowered than ever, Rapp now turns her attention back to music, where sharing threadbare insecurities on 'Tattoos' is just the beginning. 'I was called emotional a lot growing up because I didn’t know what was going on with me,' she says. 'As I got older and started going to therapy, I reclaimed the word in a way that feels good to me.' In this song and in the rest of her music to come Rapp leans into a uniquely bold showcase of vulnerability to connect with her ever growing fandom. Eager to continue to share her emotions with the world, Reneé has much more music on the way under her recent signing to Interscope Records.",
                'image'=> 'ReneéRapp.jpg'
            ],
            [
                'name' => 'The Marías',
                'bio' => "bio",
                'image'=> 'TheMarías.jpg'
            ],
        ]);
    }
}
