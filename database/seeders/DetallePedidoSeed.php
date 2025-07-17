<?php

namespace Database\Seeders;

use App\Models\DetallePedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallePedidoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetallePedidos::factory()->count(30)->create();
    }
}
