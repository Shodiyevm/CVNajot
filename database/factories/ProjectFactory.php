<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
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
            'name' => $this->faker->sentence(3), // Tasodifiy 3 so'zdan iborat nom
            'description' => $this->faker->paragraph(), // Tasodifiy tavsif
            'link' => $this->faker->url, // Tasodifiy URL
        ];
    }
}
