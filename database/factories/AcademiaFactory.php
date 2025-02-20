<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Academia>
 */
class AcademiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //datos falsos
            'nombre' => fake()->company(),
            'correo' => fake()->unique()->safeEmail(),
            'calle' => fake()->streetName(),
            'numero_interior' => fake()->optional(70)->bothify('?##'), // 70% de probabilidad de generar dato
            'numero_exterior' => fake()->numerify('####'),
            'estado' => fake()->randomElement([
                'Aguascalientes', 'Baja California', 'Baja California Sur',
                'Campeche', 'Chiapas', 'Chihuahua', 'Ciudad de México',
                'Coahuila', 'Colima', 'Durango', 'Estado de México',
                'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'Michoacán',
                'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 'Puebla',
                'Querétaro', 'Quintana Roo', 'San Luis Potosí', 'Sinaloa',
                'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz',
                'Yucatán', 'Zacatecas'
            ]),
            'colonia' => fake()->words(2, true), // Ejemplo: "Colonia San Juan"
            'municipio' => fake()->city(),
            'codigo_postal' => fake()->numerify('#####'),
            'telefono' => fake()->numerify('##########'), // 10 dígitos
            'link_web_red_social' => fake()->optional()->url(),
            'link_google_maps' => fake()->optional()->url(),
        ];
    }
}
