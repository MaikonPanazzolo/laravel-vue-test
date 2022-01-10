<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NumbersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'number' => $this->faker->numberBetween(8, 14),
        ];
    }
}
