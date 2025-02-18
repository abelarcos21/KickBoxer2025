<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;
use Carbon\Carbon;

class EntrenadorController extends Controller
{
    public function index(){

        $entrenadores = Entrenador::all();
        return view('entrenadores.index', compact('entrenadores'));
    }

    public function create(){
        return view('entrenadores.create');
    }

    public function store(Request $request){

        // Validación de datos
        $validated = $request->validate([
            'curp' => 'required|string|max:18|unique:entrenadors',
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
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
        ]);

        // Calcular año de nacimiento y edad automáticamente
        $fechaNacimiento = Carbon::parse($validated['fecha_nacimiento']);
        $validated['año_nacimiento'] = $fechaNacimiento->year;
        $validated['edad'] = $fechaNacimiento->age;

        // Guardar en la base de datos
        Entrenador::create($validated);

        return redirect()->route('entrenador.index')->with('success', 'Registro creado exitosamente.');

    }
}
