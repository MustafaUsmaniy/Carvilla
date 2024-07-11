<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'model' => fake()->word(),
            'title' => fake()->randomElement([
                'Toyota', 'Honda', 'Ford', 'Chevrolet',
            ]),
            'price' => fake()->numberBetween(10000, 50000),
            'description' => fake()->text(50)
        ];
    }
}
