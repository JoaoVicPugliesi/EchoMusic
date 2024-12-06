<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{

    protected $artists = [
        'Adele', 'Taylor Swift', 'Ed Sheeran', 'Beyoncé', 'Drake', 'The Weeknd', 'Billie Eilish', 'Ariana Grande', 'Harry Styles', 'Bruno Mars',
        'Kendrick Lamar', 'Doja Cat', 'Post Malone', 'Olivia Rodrigo', 'Rihanna', 'Bad Bunny', 'Justin Bieber', 'Kanye West', 'Shawn Mendes', 'Dua Lipa',
        'Lady Gaga', 'Halsey', 'Sam Smith', 'Travis Scott', 'Lizzo', 'Camila Cabello', 'Lil Nas X', 'Miley Cyrus', 'SZA', 'J. Cole',
        'Imagine Dragons', 'Coldplay', 'Maroon 5', 'Eminem', 'Khalid', 'Lana Del Rey', 'Charlie Puth', 'Nicki Minaj', 'Cardi B', 'Ellie Goulding',
        'Selena Gomez', 'Zayn', 'One Direction', 'Paramore', 'Linkin Park', 'Green Day', 'Red Hot Chili Peppers', 'The Chainsmokers', 'Blackpink', 'BTS',
        'TWICE', 'NCT', 'EXO', 'TXT', 'Stray Kids', 'Seventeen', 'ITZY', 'Aespa', 'GOT7', 'BigBang',
        'Arctic Monkeys', 'Tame Impala', 'Florence + The Machine', 'The 1975', 'The Killers', 'Twenty One Pilots', 'Pink Floyd', 'Led Zeppelin', 'Queen', 'The Beatles',
        'Metallica', 'Nirvana', 'Foo Fighters', 'Pearl Jam', 'Radiohead', 'The Rolling Stones', 'Fleetwood Mac', 'Elton John', 'Stevie Wonder', 'Bob Dylan',
        'Bob Marley', 'Frank Ocean', 'Childish Gambino', 'Tyler, The Creator', 'Mac Miller', 'Anderson .Paak', 'Lorde', 'The Strokes', 'Phoenix', 'Vampire Weekend',
        'James Blake', 'Bon Iver', 'John Mayer', 'Norah Jones', 'Alicia Keys', 'Sia', 'Shakira', 'Enrique Iglesias', 'Gloria Estefan', 'Luis Miguel'
    ];
    

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->artists),
            'description' => fake()->paragraph(),
        ];
    }
}
