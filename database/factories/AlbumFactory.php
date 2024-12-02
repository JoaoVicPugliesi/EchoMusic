<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{

    protected $albums = [
        'Abbey Road', '1989', 'DAMN.', 'Lemonade', 'The Dark Side of the Moon', 
        'Thriller', '25', 'Goodbye Yellow Brick Road', 'Rumours', 'Nevermind', 
        'To Pimp a Butterfly', 'A Moon Shaped Pool', 'Future Nostalgia', 'Melodrama', 
        'After Hours', 'Born to Die', 'Scorpion', 'Fine Line', 'Random Access Memories', 
        'Sgt. Pepper\'s Lonely Hearts Club Band'
    ];
    
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->albums),
            'artist_id' => Artist::factory(),
            'year' => fake()->year()
        ];
    }
}
