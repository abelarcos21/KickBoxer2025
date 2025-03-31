<?php

namespace App\Imports;

use App\Models\Entrenador;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

use Hash;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings; //para carteres codificacion utf-8

class EntrenadoresImport implements ToModel,WithHeadingRow,WithValidation,WithCustomCsvSettings
{

    use Importable;

    // Forzar UTF-8 para carecteres especiales tildes
    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1',
            'delimiter' => ',', // Asegúrate que sea coma
        ];
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);
        return new Entrenador([
            //campos
           
            '*.curp' => $row['curp'],
            '*.primer_nombre ' => $row['primer_nombre'],
            '*.segundo_nombre' => $row['segundo_nombre'],
            '*.apellido_paterno' => $row['apellido_paterno'],
            '*.apellido_materno' => $row['apellido_materno'],
            //'*.año_nacimiento' => $row['año_nacimiento'] ?? $row['ao_nacimiento'], // Ajuste por si la ñ falla  // Ajuste temporal
            '*.año_nacimiento' => $row['ano_nacimiento'] ?? $row['año_nacimiento'] ?? null,
            '*.fecha_nacimiento' => $row['fecha_nacimiento'] ?? null,
            '*.edad' => $row['edad'],
            '*.genero' => $row['genero'],
            '*.nacionalidad' => $row['nacionalidad'],
            '*.domicilio' => $row['domicilio'],
            '*.colonia' => $row['colonia'],
            '*.municipio' => $row['municipio'],
            '*.codigo_postal' => $row['codigo_postal'],
            '*.estado' => $row['estado'],
            '*.correo' => $row['correo'],
            '*.telefono' => $row['telefono'],
            '*.escolaridad' => $row['escolaridad'],
            '*.grado_kickboxing' => $row['grado_kickboxing'],

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
            'año_nacimiento' => 'required|numeric', //campo calculado automatico mediante campo fecha_nacimiento
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
