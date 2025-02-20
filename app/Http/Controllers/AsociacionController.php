<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asociacion;

class AsociacionController extends Controller
{
    //metodo index listar
    public function index(){
        $asociaciones = Asociacion::withCount('academias')->get();
        return view('asociaciones.index', compact('asociaciones'));
    }

    //Metodo para crear
    public function create(){

        return view('asociaciones.create');

    }

    //guardar los datos
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',

        ]);

        Asociacion::create($request->all());
        return redirect()->route('asociacion.index')->with('success', 'Asociacion creada Correctamente');
    }

    public function show(Asociacion $asociacion){
        $asociacion->load('academias');
        return view('asociaciones.show', compact('asociacion'));
    }

}
