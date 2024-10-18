<?php

namespace Database\Seeders;

use App\Models\CV;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CV::factory()->count(10)->create();
    }
}