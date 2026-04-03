<?php

namespace Database\Factories\Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quizz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence(),
            'quizz_id' => Quizz::first()?->id, 
            'answer_id' => Answer::first()?->id, 
        ];
    }
}
