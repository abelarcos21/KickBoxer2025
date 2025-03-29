<?php

namespace App\Exports;

use App\Models\Entrenador;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EntrenadoresExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Entrenador::all();
        return Entrenador::select( 
            
            'id',
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

        )->get();
    }

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [

            "#", 
            "Curp",
            "Primer Nombre",
            "Segundo Nombre",
            "Apellido Paterno",
            "Apellido Materno",
            "Año Nacimiento",
            "Fecha Nacimiento",
            "Edad",
            "Genero",
            "Nacionalidad",
            "Domicilio",
            "Colonia",
            "Municipio",
            "Codigo Postal",
            "Estado",
            "Correo",
            "Telefono",
            "Escolaridad",
            "Grado Kickboxing",
        ];
    }
}
