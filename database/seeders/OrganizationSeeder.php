<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::factory()->count(3)->forTable('organization')->create();
    }
}