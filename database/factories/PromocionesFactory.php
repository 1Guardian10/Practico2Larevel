<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promociones>
 */
class PromocionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->sentence(4),
            'descuento' => fake()->randomFloat(2, 1, 50),
            'fecha_inicio' =>  fake()->date(),
            'fecha_fin' => fake()->date(),
            'id_producto' => Productos::inRandomOrder()->first()->id,
        ];
    }
}
