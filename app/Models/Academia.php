<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Academia extends Model
{
    use HasFactory;
    
    //una academia pertenece a una asociacion
    public function Asociacion(): BelongsTO{
        return $this->belongsTo(Asociacion::class);
    }

    
    //campos que seran llenados
    protected $fillable = [

        'nombre',
        'asociacion_id',                // Nombre de la academia
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
