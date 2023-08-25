<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        $manager_id = Employee::inRandomOrder()->first();

        if ($manager_id !== null) {
            $manager_id->id;
        } else {
            $manager_id = null;
        }

        return [
            'user_id' => Users::factory(),
            'company_id' => Company::factory(),
            'dept_id' => Department::factory(),
            'role_id' => Roles::factory(),
            'manager_id' => $manager_id,
            'position' => fake()->jobTitle(),
            'join_date' => fake()->dateTimeThisDecade(),
            'leave_date' => fake()->dateTimeThisDecade(),
            'return_date' => fake()->dateTimeThisDecade(),
            'status' => fake()->word(),
            'description' => fake()->paragraph(),
            'national_identity' => fake()->word(),
            'identity_proof' => fake()->imageUrl(),
            'immigration_status' => fake()->word(),
            'immigration_proof' => fake()->imageUrl(),
            'social_number' => fake()->phoneNumber()
        ];
    }
}