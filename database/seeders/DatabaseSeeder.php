<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'name' => 'johnpugliesi',
            'email' => 'john@gmail.com',
            'password' => 'john1234',
            'description' => fake()->paragraph()
        ]);

        $this->call([
            ArtistSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            PlaylistSeeder::class
        ]);
    }
}
