<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuarios;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_producto'=>fake()->word(),
            'precio'=>fake()->randomFloat(2,1,1000),
            'cantidad'=>fake()->numberBetween(1,200),
            'descripcion'=>fake()->sentence(4),
            'id_usuario'=>Usuarios::inRandomOrder()->first()->id
        ];
    }
}
