<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        //
        return [
            'name' => fake()->name(),
            'birthdate' => fake()->date(), // otomatis format Y-m-d
            'classroom_id' => Classroom::factory(),
            'email' => fake()->unique()->safeEmail(),
            'adress' => fake()->address(),
        ];
    }
}
