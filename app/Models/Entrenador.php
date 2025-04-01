<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes; // ✅ Importa SoftDeletes


class Entrenador extends Model
{
    use HasFactory, SoftDeletes ;
    //DESACTIVAR LOS TIMESTAMPS
    //public $timestamps = false;

   // Define la tabla explícitamente
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

    protected $dates = ['deleted_at']; // Campo de eliminación

    //uso de los SCOPES EN LARAVEL Usar scopes en el modelo facilita el filtrado reutilizable.
    // Scope para CURP
    public function scopeCurp($query, $curp)
    {
        return $curp ? $query->where('curp', 'LIKE', "%$curp%") : $query;
    }

    // Scope para Apellido Paterno
    public function scopeApellidoPaterno($query, $apellido)
    {
        return $apellido ? $query->where('apellido_paterno', 'LIKE', "%$apellido%") : $query;
    }

    // Scope para Año de Nacimiento
    public function scopeAñoNacimiento($query, $año)
    {
        return $año ? $query->where('año_nacimiento', $año) : $query;
    }

    // Scope para Género
    public function scopeGenero($query, $genero)
    {
        return $genero ? $query->where('genero', $genero) : $query;
    }

    // Scope para Grado Kickboxing
    public function scopeGradoKickboxing($query, $grado)
    {
        return $grado ? $query->where('grado_kickboxing', 'LIKE', "%$grado%") : $query;
    }
}
