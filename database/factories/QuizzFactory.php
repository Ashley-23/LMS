<?php

namespace Database\Factories\Database\Factories\Database;

use App\Models\Model;
use App\Models\Subsection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class QuizzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'subsection_id' => Subsection::factory(),
        ];
    }
}
