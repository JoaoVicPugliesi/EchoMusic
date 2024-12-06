<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    public function run(): void
    {
        $playlists = Playlist::factory(10)->create();

        foreach($playlists as $playlist) {
            $songs = Song::inRandomOrder()->take(rand(5, 10))->pluck('id');

            $playlist->songs()->attach($songs);
        }
    }
}
