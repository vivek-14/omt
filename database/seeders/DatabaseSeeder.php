<?php

namespace Database\Seeders;


use Database\Seeders\OrganizationSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OrganizationSeeder::class,
            CompanySeeder::class,
            DepartmentSeeder::class
        ]);
    }
}