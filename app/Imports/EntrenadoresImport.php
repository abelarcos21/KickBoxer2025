<?php

namespace App\Imports;

use App\Models\Entrenador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;

class EntrenadoresImport implements ToModel,WithHeadingRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Entrenador([
            //campos
            'id' => $row['id'],
            'curp' => $row['curp'],
            'primer_nombre ' => $row['primer_nombre'],
            'segundo_nombre' => $row['segundo_nombre'],
            'apellido_paterno' => $row['apellido_paterno'],
            'apellido_materno' => $row['apellido_materno'],
            'año_nacimiento' => $row['año_nacimiento'],
            'fecha_nacimiento' => $row['fecha_nacimiento'],
            'edad' => $row['edad'],
            'genero' => $row['genero'],
            'nacionalidad' => $row['nacionalidad'],
            'domicilio' => $row['domicilio'],
            'colonia' => $row['colonia'],
            'municipio' => $row['municipio'],
            'codigo_postal' => $row['codigo_postal'],
            'estado' => $row['estado'],
            'correo' => $row['correo'],
            'telefono' => $row['telefono'],
            'escolaridad' => $row['escolaridad'],
            'grado_kickboxing' => $row['grado_kickboxing'],

            //'password' => Hash::make($row['password']), ejemplo para el password
        ]);

    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function rules(): array
    {
        return [

            'curp' => 'required|string|max:18|unique:entrenadors',
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'año_nacimiento' => 'required|integer|digits:4', //campo calculado automatico mediante campo fecha_nacimiento
            'fecha_nacimiento' => 'required|date',
            'edad' => 'required|integer', //campo calculado automatico mediante campo fecha_nacimiento
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'nacionalidad' => 'required|string|max:255',
            'domicilio' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'codigo_postal' => 'required|string|max:5',
            'estado' => 'required|string|max:255',
            'correo' => 'required|email|unique:entrenadors',
            'telefono' => 'required|string|max:10',
            'escolaridad' => 'required|string|max:255',
            'grado_kickboxing' => 'nullable|string|max:255',
        ];
    }
}
