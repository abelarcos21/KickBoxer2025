<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrearJuezTest extends TestCase
{
    use RefreshDatabase; //para refrescar la base de datos y vaciar ,no llenar la BD

    /**
     * A basic feature test example.
     */
    public function test_an_juez_can_be_created(): void
    {
        //ARRANGE(PREPARAR)

        $this->withoutExceptionHandling();

        $juezData = [

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
            

        ];

        //ACTUAR(ACT)
        $response = $this->post(route('juez.store', $juezData));

        //AFIRMACION(ASSERT)
        $response->assertStatus(302);//Código 302 si tiene un redirect despues de la creacion

        $this->assertDatabaseHas('juezs', $juezData);
    }
}
