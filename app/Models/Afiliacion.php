<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Afiliacion extends Model
{
    use HasFactory;
    //campos
    protected $fillable = [
        'folio',
        'fecha_solicitud',
        'nombre_solicitante',
        'curp',
        'sexo',
        'fecha_nacimiento',
        'telefono_movil',
        'email',
        'nombre_escuela',
        'calle',
        'numero_exterior',
        'colonia',
        'municipio',
        'codigo_postal',
        'red_social',
        'aviso_privacidad'
    ];
    
}
