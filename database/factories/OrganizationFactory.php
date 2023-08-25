<?php

namespace Database\Factories;

use App\Models\Info;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'info_id' => Info::factory(['type' => 'O', 'status' => 'active']),
            'owner_id' => Users::factory()
        ];
    }
}