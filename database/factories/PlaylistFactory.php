<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaylistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'name' => fake()->company(),
            'description' => fake()->paragraph(),
            'year' => now()->year
        ];
    }
}
