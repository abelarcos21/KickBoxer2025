<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Entrenador extends Model
{
    use HasFactory;
    //DESACTIVAR LOS TIMESTAMPS
    //public $timestamps = false;

    protected $table = 'entrenadors';
    
    //campos que seran llenados
    protected $fillable=[

        'curp',
        'primer_nombre',
        'segundo_nombre',
        'apellido_paterno',
        'apellido_materno',
        'año_nacimiento',
        'fecha_nacimiento',
        'edad',
        'genero',
        'nacionalidad',
        'domicilio',
        'colonia',
        'municipio',
        'codigo_postal',
        'estado',
        'correo',
        'telefono',
        'escolaridad',
        'grado_kickboxing',

    ];

    protected $casts = [
        'fecha_nacimiento' => 'date:Y-m-d', // Formato correcto
    ];
}
