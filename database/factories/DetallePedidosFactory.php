<?php

namespace Database\Factories;

use App\Models\Pedidos;
use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetallePedidos>
 */
class DetallePedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cantidad' => fake()->numberBetween(1, 10),
            'precio_unitario' =>fake()->randomFloat(2, 1, 1000),
            'id_pedido' => Pedidos::inRandomOrder()->first()->id ,
            'id_producto' => Productos::inRandomOrder()->first()->id,
        ];
    }
}
