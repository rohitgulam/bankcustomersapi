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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'account_type' => "Savings",
            'account_number' => fake()->creditCardNumber(),
            'balance' => fake()->numberBetween($min = 10000, $max = 100000),
            'address' => fake()->unique()->city(),
            'email' => fake()->unique()->safeEmail(),
            'dob' => fake()->unique()->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
