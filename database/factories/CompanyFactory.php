<?php

namespace Database\Factories;

use App\Models\Industry;
use App\Models\Info;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ceo_id' => User::factory(),
            'org_id' => Organization::factory(),
            'industry_id' => Industry::factory()
        ];
    }
}