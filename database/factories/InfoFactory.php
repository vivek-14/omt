<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use App\Models\Organization;
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
    public $attributes = [

    ];

    public function definition(): array
    {
        return [
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

    public function forTable($class)
    {
        if (strtolower($class) === 'organization') {
            return $this->state(function () {
                return [
                    'infoable_type' => Organization::class,
                    'infoable_id' => Organization::factory()
                ];
            });
        } elseif (strtolower($class) === 'company') {
            return $this->state(function () {
                return [
                    'infoable_type' => Company::class,
                    'infoable_id' => Company::factory()
                ];
            });
        } elseif (strtolower($class) === 'department') {
            return $this->state(function () {
                return [
                    'infoable_type' => Department::class,
                    'infoable_id' => Department::factory()
                ];
            });
        }
    }
}