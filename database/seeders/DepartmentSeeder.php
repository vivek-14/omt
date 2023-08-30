<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::factory()->count(3)->forTable('department')->create();
    }
}