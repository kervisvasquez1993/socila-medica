<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalServiceCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalServiceCost::create([
            'type_of_medical_appointment_id' => 1,
            'medical_service_id' => 1,
            'specialty_id' => 1,
            'cost' => 80000
        ]);
    }
}