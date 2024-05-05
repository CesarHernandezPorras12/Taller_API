<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Televisor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Televisor>
 */
class TelevisorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->word,
            'tamaño' => $this->faker->randomElement(['30 pulgadas','40 pulgadas', '50 pulgadas', '60 pulgadas','70 pulgadas','75 pulgadas']), // Ejemplo de tamaño aleatorio
            'peso' => $this->faker->randomFloat(2, 10, 50), // Ejemplo de peso aleatorio entre 10 y 50
            'color' => $this->faker->colorName,
            'tipo_pantalla' => $this->faker->randomElement(['LCD', 'LED', 'OLED']), // Ejemplo de tipo de pantalla aleatorio
            'bluetooth' => $this->faker->boolean,
            'pais_fabricacion' => $this->faker->country,
            'fecha_importacion' => $this->faker->date,
        ];
    }
}