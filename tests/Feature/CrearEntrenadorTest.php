<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Carbon\Carbon;

class CrearEntrenadorTest extends TestCase
{
    use RefreshDatabase; //para refrescar la base de datos y vaciar ,no llenar la BD

    /**
     * A basic feature test example.
     */
    public function test_an_entrenador_can_be_created(): void
    {
        //ARRANGE(PREPARAR)

        $this->withoutExceptionHandling();


        $entrenadorData = [

            'curp' => 'ABCD123456HDFLRS07',
            'primer_nombre' => 'Juan',
            'segundo_nombre' => 'Carlos',
            'apellido_paterno' => 'Pérez',
            'apellido_materno' => 'Gómez',
            'año_nacimiento' =>  1985,
            'fecha_nacimiento' =>  '1985-03-19',
            'edad' =>  40,
            'genero' => 'Masculino',
            'nacionalidad' => 'Mexicana',
            'domicilio' => 'Av. Siempre Viva 123',
            'colonia' => 'Centro',
            'municipio' => 'CDMX',
            'codigo_postal' => '01000',
            'estado' => 'CDMX',
            'correo' => 'juan.perez@example.com',
            'telefono' => '5512345678',
            'escolaridad' => 'Licenciatura',
            'grado_kickboxing' => 'Cinturón Negro',

        ];

        //ACTUAR(ACT)
        
        $response = $this->post(route('entrenador.store', $entrenadorData));

        //AFIRMACION(ASSERT)
        
        $response->assertStatus(302);// Código 201 Created


        $this->assertDatabaseHas('entrenadors', $entrenadorData);
    }
}
