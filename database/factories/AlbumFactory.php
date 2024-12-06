<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{

    protected $albums = [
        '21', '25', '30', 'Red', '1989', 'Reputation', 'Fearless', 'Divide', 'Multiply', 'Subtract',
        'Lemonade', 'Beyoncé', 'Views', 'Scorpion', 'After Hours', 'Dawn FM', 'Happier Than Ever', 'When We All Fall Asleep, Where Do We Go?', 'Positions', 'Dangerous Woman',
        'Chromatica', 'Born This Way', 'Joanne', 'In the Lonely Hour', 'Thrill of It All', 'Love Goes', 'Hollywood’s Bleeding', 'Beerbongs & Bentleys', 'Stoney', 'Circles',
        'Lover', 'Folklore', 'Evermore', 'Midnights', 'Harry’s House', 'Fine Line', 'Love on Tour', 'Overexposed', 'Songs About Jane', 'Viva La Vida',
        'A Head Full of Dreams', 'Everyday Life', 'Parachutes', 'Music of the Spheres', 'X&Y', 'Ghost Stories', 'The Eminem Show', 'Kamikaze', 'Music to Be Murdered By', 'Revival',
        'DAMN.', 'Good Kid, M.A.A.D City', 'To Pimp a Butterfly', 'Mr. Morale & The Big Steppers', 'Blurryface', 'Trench', 'Scaled and Icy', 'Regional at Best', 'Hybrid Theory', 'Meteora',
        'Minutes to Midnight', 'Living Things', 'One More Light', 'Night Visions', 'Evolve', 'Origins', 'Smoke + Mirrors', 'AM', 'Tranquility Base Hotel & Casino', 'Whatever People Say I Am, That’s What I’m Not',
    ];
    
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->albums),
            'artist_id' => Artist::all()->random()->id,
            'year' => fake()->year()
        ];
    }
}
