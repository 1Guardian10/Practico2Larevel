<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_pedido' => fake()->date(),
            'estado' =>fake()->randomElement(['pendiente', 'procesado', 'enviado', 'entregado', 'cancelado']),
            'id_usuario'=>Usuarios::inRandomOrder()->first()->id
        ];
    }
}
