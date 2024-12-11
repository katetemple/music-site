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
                'bio' => "Billie Eilish Pirate Baird O'Connell is an American musician, singer and actress from Los Angeles. She performed hit songs such as 'Bad Guy' and 'No Time to Die,' which was used in the James Bond film of the same name. She provided ADR for Ramona and Beezus, Diary of a Wimpy Kid: Rodrick Rules and X-Men: Apocalypse.",
                'image'=> 'BillieEilish.jpg',
                'dob' => '2001-12-18'
            ],
            [
                'name' => 'FINNEAS',
                'bio' => "Finneas O'Connell is an American actor and musician who plays Alistaire in the Fox TV series Glee and stars as Shane in the award winning independent feature Life Inside Out. He is also known for his portrayal of the character Spencer (Twilight) in Columbia Pictures' Bad Teacher, has a recurring role on ABC's Modern Family and appears in the premiere episode of 'Aquarius'. Finneas began writing songs at the age of 12. He is the front man and lead singer/songwriter of the band, The Slightlys, whose song, 'Is There Anybody There' appeared in an episode of ABC Family's Switched At Birth. The band has won numerous awards and competitions in the Los Angeles area.",
                'image'=> 'Finneas.jpg',
                'dob' => '1997-07-30'
            ],
            [
                'name' => 'Reneé Rapp',
                'bio' => "Reneé Rapp, a North Carolina native, discovered her passion for music at a young age, writing and recording songs as a teenager. Her career soared when she starred as Regina George in Broadway's Mean Girls and later gained widespread acclaim as Leighton in HBO Max's College Girls. Now signed with Interscope Records, Rapp returns to music, channeling her emotions into bold and vulnerable songs like 'Tattoos', with much more to come.",
                'image'=> 'ReneéRapp.jpg',
                'dob' => '2000-01-19'
            ],
            [
                'name' => 'The Marías',
                'bio' => "bio",
                'image'=> 'TheMarías.jpg',
                'dob' => null
            ],
            [
                'name' => 'Clairo',
                'bio' => "Clairo, born Claire Cottrill, is an indie-pop artist who first gained attention with her viral hit 'Pretty Girl.' Known for her soft vocals and deeply personal lyrics, she has since released critically acclaimed albums that showcase her introspective artistry and genre-blending sound.",
                'image' => '',
                'dob' => '1998-08-18',
            ],
            [
                'name' => 'Inhaler',
                'bio' => "Inhaler is a Dublin-based rock band led by Elijah Hewson, the son of U2's Bono. The band burst onto the scene in 2016 and quickly gained a reputation for their energetic performances and anthemic songs, drawing comparisons to some of rock’s greatest acts while carving out their own unique sound.",
                'image' => '',
                'dob' => null, // Formation date
            ],
            [
                'name' => 'Ruel',
                'bio' => "Ruel, an Australian singer-songwriter, began his career as a teenager and quickly captivated audiences with his soulful voice and relatable lyrics. Known for hits like 'Painkiller' and 'Dazed & Confused,' he has solidified himself as a rising star in the global music scene.",
                'image' => '',
                'dob' => '2002-10-29',
            ],
            [
                'name' => 'Dominic Fike',
                'bio' => "Dominic Fike is a genre-defying artist blending rap, rock, and pop to create a sound uniquely his own. He first gained recognition with his hit '3 Nights' and continues to captivate audiences with his bold music and his acting debut in HBO’s *Euphoria*.",
                'image' => '',
                'dob' => '1995-12-30',
            ],
            [
                'name' => 'George Michael',
                'bio' => "George Michael was a legendary pop star and former Wham! member whose soulful voice and chart-topping hits like 'Careless Whisper' and 'Faith' made him one of the most iconic musicians of all time. His career spanned decades, leaving a lasting impact on music and pop culture.",
                'image' => '',
                'dob' => '1963-06-25',
            ],
            [
                'name' => 'Frank Ocean',
                'bio' => "Frank Ocean is a Grammy-winning artist celebrated for his innovative approach to R&B and deeply emotional storytelling. Known for albums like *Channel Orange* and *Blonde,* Ocean continues to redefine modern music with his unique style and introspective lyrics.",
                'image' => '',
                'dob' => '1987-10-28',
            ],
            [
                'name' => 'Phoebe Bridgers',
                'bio' => "Phoebe Bridgers is an indie rock singer-songwriter known for her haunting voice and deeply personal lyrics. Her albums *Stranger in the Alps* and *Punisher* have earned widespread acclaim, making her a prominent voice in the indie music scene.",
                'image' => '',
                'dob' => '1994-08-17',
            ],
            [
                'name' => 'Billie Eilish',
                'bio' => "Billie Eilish is an award-winning singer-songwriter who rose to fame with her hit 'Ocean Eyes.' Known for her unique style and genre-defying sound, she has become one of the most influential artists of her generation.",
                'image' => '',
                'dob' => '2001-12-18',
            ],
            [
                'name' => 'Taylor Swift',
                'bio' => "Taylor Swift is a globally renowned artist whose music spans genres from country to pop. Known for hits like 'Love Story' and 'Shake It Off,' she has won numerous awards for her storytelling and chart-topping albums.",
                'image' => '',
                'dob' => '1989-12-13',
            ],
            [
                'name' => 'The 1975',
                'bio' => "The 1975 is a British band known for their eclectic style and thought-provoking lyrics. Fronted by Matty Healy, they have gained international acclaim with hits like 'Somebody Else' and 'Love It If We Made It.'",
                'image' => '',
                'dob' => null, 
            ],
            [
                'name' => 'Adele',
                'bio' => "Adele is a British singer-songwriter known for her powerful vocals and emotional ballads. With hits like 'Hello' and 'Someone Like You,' she has become one of the best-selling music artists of all time.",
                'image' => '',
                'dob' => '1988-05-05',
            ],
            [
                'name' => 'Harry Styles',
                'bio' => "Harry Styles is a former One Direction member turned solo artist. Known for his charismatic stage presence and hits like 'Watermelon Sugar,' he has established himself as a global pop icon.",
                'image' => '',
                'dob' => '1994-02-01',
            ],
            [
                'name' => 'Hozier',
                'bio' => "Hozier is an Irish singer-songwriter best known for his soulful hit 'Take Me to Church.' His music blends blues, folk, and rock influences to create a unique and captivating sound.",
                'image' => '',
                'dob' => '1990-03-17',
            ],
            [
                'name' => 'Mitski',
                'bio' => "Mitski is an indie rock artist known for her raw, emotional lyrics and unique sound. With albums like *Be the Cowboy,* she has become a beloved figure in the indie music scene.",
                'image' => '',
                'dob' => '1990-09-27',
            ],
            [
                'name' => 'Lana Del Rey',
                'bio' => "Lana Del Rey is a critically acclaimed singer-songwriter known for her cinematic style and melancholic lyrics. Hits like 'Born to Die' and 'Summertime Sadness' have cemented her as a cultural icon.",
                'image' => '',
                'dob' => '1985-06-21',
            ],
            [
                'name' => 'The Weeknd',
                'bio' => "The Weeknd, born Abel Tesfaye, is a Canadian artist known for his distinctive voice and genre-defying hits like 'Blinding Lights' and 'Can't Feel My Face.'",
                'image' => '',
                'dob' => '1990-02-16',
            ],
            [
                'name' => 'Arctic Monkeys',
                'bio' => "Arctic Monkeys are a British rock band known for their dynamic sound and sharp lyrics. Fronted by Alex Turner, they achieved global fame with albums like *AM* and hits like 'Do I Wanna Know?'",
                'image' => '',
                'dob' => null, 
            ],
            [
                'name' => 'SZA',
                'bio' => "SZA is an R&B singer-songwriter whose soulful voice and introspective lyrics have earned her critical acclaim. Her album *Ctrl* is regarded as a modern classic.",
                'image' => '',
                'dob' => '1989-11-08',
            ],
            [
                'name' => 'Florence + The Machine',
                'bio' => "Florence + The Machine, fronted by Florence Welch, is known for their ethereal sound and powerful vocals. Hits like 'Dog Days Are Over' have made them a staple of modern indie rock.",
                'image' => '',
                'dob' => '2007-01-01', 
            ],
            [
                'name' => 'Paramore',
                'bio' => "Paramore is an American rock band fronted by Hayley Williams. Known for their high-energy performances and hits like 'Misery Business,' they have been a mainstay in alternative rock.",
                'image' => '',
                'dob' => null, 
            ],
            [
                'name' => 'Mac Miller',
                'bio' => "Mac Miller was a talented rapper, singer, and producer known for his introspective lyrics and artistic evolution. Albums like *Swimming* solidified his legacy in music.",
                'image' => '',
                'dob' => '1992-01-19',
            ],
            [
                'name' => 'Radiohead',
                'bio' => "Radiohead is an iconic British rock band led by Thom Yorke, known for their innovative sound and critically acclaimed albums like *OK Computer* and *Kid A.*",
                'image' => '',
                'dob' => null, 
            ],
            [
                'name' => 'Gracie Abrams',
                'bio' => "Gracie Abrams is an up-and-coming singer-songwriter known for her heartfelt lyrics and intimate sound. Songs like 'I Miss You, I’m Sorry' have gained her a devoted following.",
                'image' => '',
                'dob' => '1999-09-07',
            ],
            [
                'name' => 'Troye Sivan',
                'bio' => "Troye Sivan is an Australian artist known for his synth-pop hits like 'Youth' and 'Bloom.' His music explores themes of identity and love with a fresh, modern sound.",
                'image' => '',
                'dob' => '1995-06-05',
            ],
            [
                'name' => 'Tame Impala',
                'bio' => "Tame Impala is a psychedelic music project led by Kevin Parker, known for hits like 'The Less I Know the Better' and critically acclaimed albums such as *Currents.*",
                'image' => '',
                'dob' => null, 
            ],
        ]);
    }
}
