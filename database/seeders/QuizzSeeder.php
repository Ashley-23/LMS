<?php

namespace Database\Seeders;

use App\Models\Quizz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quizz::factory()->count(10)->create()->each(function ($quizz) {
            // Create 5 questions for each quizz
            $questions = \Database\Factories\QuestionFactory::new()->count(5)->make();
            $quizz->questions()->saveMany($questions);
        });
    }
}
