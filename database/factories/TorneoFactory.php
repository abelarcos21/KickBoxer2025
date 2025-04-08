<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Torneo>
 */
class TorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //datos ficticios
            'poster' => $this->faker->imageUrl(200, 300, 'sports'),
            'fecha' => $this->faker->date(),
            'fin_registro' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'nombre_torneo' => $this->faker->sentence(3),
            'estado_registro' => $this->faker->randomElement(['ABIERTO', 'CERRADO']),
        ];
    }
}
