<?php

namespace Database\Factories;

use App\Models\Pedidos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetallePagos>
 */
class DetallePagosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto_total' => fake()->randomFloat(2, 10, 5000),
            'metodo_pago' =>fake()->randomElement(['efectivo', 'tarjeta', 'transferencia', 'paypal']),
            'fecha_pago' =>fake()->date(),
            'id_pedido' => Pedidos::inRandomOrder()->first()->id,
        ];
    }
}
