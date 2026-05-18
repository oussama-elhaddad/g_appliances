<?php

namespace Database\Seeders;

use App\Models\TypeAppliance;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TypeAppliance::factory(33)->create();

    }
}
