<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Torneo;

class TorneoController extends Controller
{
    //metodo index
    public function index(){

        $torneos = Torneo::all();
        return view('torneos.index', compact('torneos'));

    }

    public function create(){
        return view('torneos.create');

    }

    public function store(Request $request){

        $validated = $request->validate([
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha' => 'required|date',
            'fin_registro' => 'required|date',
            'nombre_torneo' => 'required|string|max:255',
            'estado_registro' => 'required|in:ABIERTO,CERRADO',
        ]);

        //guardar ruta dela imagen
        if($request->hasFile('poster')){
            $rutaImagen = $request->file('poster')->store('torneos', 'public');//guarda la imagen en storage app/public/torneos
            $validated['poster'] = $rutaImagen;//guarda la ruta de la img en la BD
        }

        Torneo::create($validated);

        return redirect()->route('torneo.index')->with('success', 'Registro creado exitosamente.');


    }

    public function edit(Torneo $torneo){

    }

    public function show(Torneo $torneo){

    }

    public function update(Request $request, Torneo $torneo){

    }

    public function destroy(Torneo $torneo){

    }
}
