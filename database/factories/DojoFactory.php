<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ninja;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dojo>
 */
class DojoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(10),
        ];
    }
}
