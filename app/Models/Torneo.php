<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;//importar hasfactory

class Torneo extends Model
{

    use HasFactory;//USO DE HASFACTORY

    //campos rellenables
    protected $fillable= [
        'poster',
        'fecha',
        'fin_registro',
        'nombre_torneo',
        'estado_registro',
    ];

    protected $casts = [
        'fecha' => 'date:Y-m-d', // Formato correcto
    ];
}
