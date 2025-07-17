<?php

namespace Database\Seeders;

use App\Models\Pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pedidos::factory()->count(60)->create();
    }
}
