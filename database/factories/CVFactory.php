<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV>
 */
class CVFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(), // Tasodifiy student
            'lesson_id' => Lesson::factory(), // Tasodifiy lesson
            'hard_skill_id' => HardSkill::factory(), // Tasodifiy hard skill
            'soft_skill_id' => SoftSkill::factory(), // Tasodifiy soft skill
            'project_id' => Project::factory(), // Tasodifiy project
            'experience_id' => Experience::factory(), // Tasodifiy experience
        ];
    }
}
