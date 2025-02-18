<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juez>
 */
class JuezFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fechaNacimiento = fake()->dateTimeBetween('-60 years', '-18 years');
        $yearNacimiento = Carbon::parse($fechaNacimiento)->format('Y');
        $edad = Carbon::parse($fechaNacimiento)->diffInYears(now());

        return [
            //datos falsos
            'curp' => strtoupper(Str::random(18)), // Formato simplificado
            'primer_nombre' => fake()->firstName(),
            'segundo_nombre' => fake()->optional()->firstName(),
            'apellido_paterno' => fake()->lastName(),
            'apellido_materno' => fake()->lastName(),
            'año_nacimiento' => $yearNacimiento,
            'fecha_nacimiento' => $fechaNacimiento,
            'edad' => $edad,
            'genero' => fake()->randomElement(['Masculino', 'Femenino', 'Otro']),
            'nacionalidad' => 'Mexicana',
            'domicilio' => fake()->streetAddress(),
            'colonia' => fake()->citySuffix(),
            'municipio' => fake()->city(),
            'codigo_postal' => fake()->postcode(),
            'estado' => fake()->state(),
            'correo' => fake()->unique()->safeEmail(),
            'telefono' => fake()->numerify('##########'), // 10 dígitos
            'escolaridad' => fake()->randomElement([
                'Primaria', 
                'Secundaria', 
                'Preparatoria', 
                'Licenciatura', 
                'Maestría', 
                'Doctorado'
            ]),
            
        ];
    }
}
