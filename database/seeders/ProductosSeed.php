<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productos::factory()->count(100)->create();
    }
}
