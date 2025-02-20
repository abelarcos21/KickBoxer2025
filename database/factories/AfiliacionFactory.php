<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Afiliacion>
 */
class AfiliacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'folio' => 'AFI-' . now()->format('YmdHis') . Str::random(4),
            'nombre_solicitante' => $this->faker->name(),
            'curp' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}'),
            'sexo' => $this->faker->randomElement(['H', 'M']),
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'telefono_movil' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'nombre_escuela' => $this->faker->company(),
            'calle' => $this->faker->streetName(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->citySuffix(),
            'municipio' => $this->faker->city(),
            'codigo_postal' => $this->faker->postcode(),
            'codigo_postal' => str_pad($this->faker->numberBetween(1000, 99999), 5, '0', STR_PAD_LEFT),
            'red_social' => $this->faker->optional(0.7)->url(),
            'aviso_privacidad' => $this->faker->boolean(100) // Siempre true
        ];
    }
}
