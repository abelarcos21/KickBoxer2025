<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academia;

class AcademiaController extends Controller
{
    //metodo index
    public function index(){
        
        $academias = Academia::all();

        return view('academias.index', compact('academias'));
    }

    public function create(){
        return view('academias.create');
    }

    public function store(Request $request){

        // Validación de datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:academias,correo',
            'calle' => 'required|string|max:255',
            'numero_interior' => 'nullable|string|max:10',
            'numero_exterior' => 'required|string|max:10',
            'estado' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'codigo_postal' => 'required|digits:5',
            'telefono' => 'required|digits:10',
            'link_web_red_social' => 'nullable|url|max:255',
            'link_google_maps' => 'nullable|url|max:255'
    
        ]);

         // Guardar en la base de datos
         Academia::create($validated);

         return redirect()->route('academia.index')->with('success', 'Registro creado exitosamente.');

       

    }
}
