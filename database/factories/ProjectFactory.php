<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->firstName(),
            'deskripsi' => fake()->paragraph(),
            'tema_agent' => fake()->word(),
            'api_key_secure' => fake()->bothify('****************'),
        ];
    }
}
