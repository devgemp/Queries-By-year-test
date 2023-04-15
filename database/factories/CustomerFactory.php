<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'importe' => $this->faker->numberBetween(50000, 1000000),
            'marca' => $this->faker->word(),
            'medio' => $this->faker->randomElement(['Facebook', 'Google', 'Instagram']),
            'fecha' => $this->faker->date("2023-{$this->faker->month()}-{$this->faker->dayOfMonth()}")
        ];
    }
}
