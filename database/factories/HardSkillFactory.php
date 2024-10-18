<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HardSkill>
 */
class HardSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'homework' => $this->faker->numberBetween(0, 100), // 0 dan 100 gacha tasodifiy raqam
            'participation' => $this->faker->numberBetween(0, 100),
        ];
    }
}
