<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Academia extends Model
{
    use HasFactory;
    //campos que seran llenados
    protected $fillable = [

        'nombre',                // Nombre de la academia
        'correo',      // Correo
        'calle',        // Calle
        'numero_interior',  // Número interior
        'numero_exterior',      // Número exterior
        'estado',         // Estado
        'colonia',              // Colonia
        'municipio',      // Municipio
        'codigo_postal',         // Código postal
        'telefono',              // Teléfono
        'link_web_red_social', // Link web o red social
        'link_google_maps',    // Link Google Maps

    ];
}
