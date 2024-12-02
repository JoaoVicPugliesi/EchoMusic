<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{

   protected $artists = [
        'The Beatles', 'Taylor Swift', 'Kendrick Lamar', 'Adele', 'Radiohead', 'Queen', 
        'Beyoncé', 'Kanye West', 'Nirvana', 'Coldplay', 'Billie Eilish', 'The Weeknd', 
        'Led Zeppelin', 'Drake', 'Pink Floyd', 'David Bowie', 'Rihanna', 'Bruno Mars', 
        'Frank Ocean', 'Arctic Monkeys', 'Fleetwood Mac', 'Sia', 'Ed Sheeran', 'Dua Lipa', 
        'Imagine Dragons', 'Harry Styles', 'Lana Del Rey', 'The Rolling Stones', 'Travis Scott', 
        'Eminem', 'J. Cole', 'Post Malone', 'Olivia Rodrigo', 'Hozier', 'Sam Smith', 'Gorillaz', 
        'Doja Cat', 'The Killers', 'Paramore', 'Daft Punk', 'Tame Impala', 'Florence + The Machine', 
        'Foo Fighters', 'Justin Bieber', 'The Strokes', 'Maroon 5', 'Childish Gambino', 
        'U2', 'Shawn Mendes', 'Lorde'
    ];

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->artists),
            'description' => fake()->paragraph(),
            'logo' => fake()->url()
        ];
    }
}
