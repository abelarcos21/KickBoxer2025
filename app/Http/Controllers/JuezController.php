<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juez;
use Carbon\Carbon;

class JuezController extends Controller
{
    //metodo index
    public function index(){
        $jueces = Juez::all();
        return view('jueces.index', compact('jueces'));
    }

    public function create(){
        return view('jueces.create');
    }

    public function store(Request $request){

        // Validación de datos
        $validated = $request->validate([
            'curp' => 'required|string|max:18|unique:juezs',
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
            'correo' => 'required|email|unique:juezs',
            'telefono' => 'required|string|max:10',
            'escolaridad' => 'required|string|max:255',

        ]);

        // Calcular año de nacimiento y edad automáticamente
        $fechaNacimiento = Carbon::parse($validated['fecha_nacimiento']);
        $validated['año_nacimiento'] = $fechaNacimiento->year;
        $validated['edad'] = $fechaNacimiento->age;

        // Guardar en la base de datos
        Juez::create($validated);

        return redirect()->route('juez.index')->with('success', 'Registro creado exitosamente.');

    }
    //METODO PARA LLAMAR ALA VISTA EDIT
    public function edit(Juez $juez){

        return view('jueces.edit', compact('juez'));
    }

    //METODO PARA ACTUALIZAR LOS DATOS
    public function update(Request $request, Juez $juez){

        // Validación de datos
        $validated = $request->validate([
            'curp' => 'required|string|max:18|unique:juezs',
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
            'correo' => 'required|email|unique:juezs',
            'telefono' => 'required|string|max:10',
            'escolaridad' => 'required|string|max:255',

        ]);

        // Calcular año de nacimiento y edad automáticamente
        $fechaNacimiento = Carbon::parse($validated['fecha_nacimiento']);
        $validated['año_nacimiento'] = $fechaNacimiento->year;
        $validated['edad'] = $fechaNacimiento->age;

        // metodo fill es igual que el método save() pero sin crear un nuevo registro
        $juez->fill($validated);

        $juez->save();
 
        return redirect()->route('juez.index')->with('success', 'La Informacion del Juez se Actualizo Correctamente');


    }

    //METODO PARA ELIMINAR UN JUEZ
    public function destroy(Juez $juez){

        $nombreJuez = $juez->primer_nombre;
        $juez->delete();

        return redirect()->route('juez.index')->with('success', 'El Juez'.$nombreJuez.' se Elimino Correctamente');
    }
}
