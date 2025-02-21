<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academia;
use App\Models\Asociacion;

class AcademiaController extends Controller
{
    //metodo index
    public function index(){
        $academias = Academia::with('asociacion')->get();

        return view('academias.index', compact('academias'));
    }

    public function create(){
        $asociaciones = Asociacion::all();
        return view('academias.create', compact('asociaciones'));
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'asociacion_id' => 'required|exists:asociacions,id',
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

        Academia::create($request->all());

        return redirect()->route('academia.index')->with('success', 'Academia creada exitosamente');

    }
}
