<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistic>
 */
class StatisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number_of_flights' => $this->faker->randomNumber(),
            'passengers' => $this->faker->randomNumber(),
            'distance' => $this->faker->randomNumber(),
        ];
    }
}
