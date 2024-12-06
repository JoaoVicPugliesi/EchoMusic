<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{

    protected $songs = [
        'Bohemian Rhapsody', 'Someone Like You', 'Smells Like Teen Spirit', 'Rolling in the Deep',
        'Shape of You', 'Hey Jude', 'Blinding Lights', 'HUMBLE.', 'All Too Well', 'Clocks',
        'Stairway to Heaven', 'Halo', 'Paint It Black', 'Billie Jean', 'Uptown Funk', 'Imagine',
        'Fix You', 'Summertime Sadness', 'Take On Me', 'Happier Than Ever', 'Good 4 U',
        'Levitating', 'Sunflower', 'Dynamite', 'Savage Love', 'Circles', 'Physical', 'Lose Yourself',
        'Stay', 'Shallow', 'Believer', 'Numb', 'Don\'t Start Now', 'Drivers License',
        'Radioactive', 'Toxic', 'The Less I Know the Better', 'Creep', 'I Will Survive',
        'Shake It Off', 'Boulevard of Broken Dreams', 'Bad Romance', 'Wonderwall', 'Counting Stars',
        'Wake Me Up', 'Happy', 'Time', 'Highway to Hell', 'Enter Sandman', 'November Rain',
        'Thank U, Next', 'Old Town Road', 'Montero (Call Me By Your Name)', 'Havana',
        'Positions', 'Love Story', 'Teardrops on My Guitar', 'Bleeding Love', 'Viva La Vida',
        'Despacito', 'Cheap Thrills', 'Work', 'Senorita', 'Bad Guy', 'Stay With Me',
        'Royals', 'Poker Face', 'Hotline Bling', 'Sicko Mode', 'My Universe',
        'We Don\'t Talk Anymore', 'Memories', 'Just The Way You Are', 'Seven Nation Army',
        'Runaway', 'Jesus Walks', 'Swimming Pools (Drank)', 'DNA', 'Butter', 'Electric Feel',
        'A Thousand Years', 'Latch', 'Wrecking Ball', 'Party Rock Anthem', 'Titanium',
        'On the Floor', 'Born to Die', 'No Tears Left to Cry', 'Ghost', 'Sugar', 'Yesterday',
        'Eleanor Rigby', 'The Scientist', 'In the End', 'Papercut', 'Smooth', 'Zombie',
        'I am Yours', 'Halo', 'Best Part',   'Rolling in the Deep', 'Someone Like You', 'Hello', 
        'Easy On Me', 'All Too Well', 'Love Story', 'Shake It Off', 'Blank Space', 'Perfect', 'Thinking Out Loud',
        'Shape of You', 'Photograph', 'Bad Habits', 'As It Was', 'Watermelon Sugar', 
        'Adore You', 'Levitating', 'Don’t Start Now', 'New Rules', 'One Kiss',
        'Happier Than Ever', 'Everything I Wanted', 'Bury A Friend', 'Drivers License', 'Good 4 U', 
        'Deja Vu', 'Blinding Lights', 'Save Your Tears', 'In Your Eyes', 'Peaches',
        'Stay', 'Intentions', 'Sorry', 'What Do You Mean?', 'Taki Taki', 
        'I Like It', 'Money', 'WAP', 'Montero (Call Me By Your Name)', 'Industry Baby',
        'Old Town Road', 'Circles', 'Rockstar', 'Sunflower', 'Wow.', 'God’s Plan', 
        'One Dance', 'In My Feelings', 'Toosie Slide', 'Passionfruit',
        'Thank U, Next', '7 Rings', 'No Tears Left To Cry', 'Positions', 'Rain On Me', 
        'Shallow', 'Poker Face', 'Just Dance', 'Bad Romance', 'Million Reasons',
    ];

    public function definition(): array
    {

        $album = Album::query()->inRandomOrder()->first();

        if ($album) {
            $artistId = $album->artist_id;
            $albumId = $album->id;
        }

        return [
            'artist_id' => $artistId,
            'album_id' => $albumId,
            'name' => fake()->randomElement($this->songs),
            'lyrics' => fake()->paragraph(),
        ];
    }
}
