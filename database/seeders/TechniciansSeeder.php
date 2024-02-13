<?php

namespace Database\Seeders;

use App\Models\Technicians;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechniciansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technicians::factory()->count(10)->create();
    }
}