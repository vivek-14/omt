<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(['O', 'C', 'D']),
            'status' => fake()->randomElement(['active', 'inactive', 'pending']),
            'slogan' => fake()->sentence(),
            'logo' => fake()->imageUrl(),
            'address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->country(),
            'country' => fake()->country(),
            'pin_code' => fake()->postcode(),
            'description' => fake()->paragraph()
        ];
    }
}