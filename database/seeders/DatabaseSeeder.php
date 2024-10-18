<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StudentSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(HardSkillSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(SoftSkillSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
