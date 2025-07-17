<?php

namespace Database\Seeders;

use App\Models\DetallePagos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallePagoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetallePagos::factory()->count(30)->create();
    }
}
