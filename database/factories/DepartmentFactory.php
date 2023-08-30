<?php

namespace Database\Factories;

use App\Http\Resources\Employee;
use App\Models\Company;
use App\Models\Info;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'manager_id' => User::factory(),
            'company_id' => Company::factory()
        ];
    }
}