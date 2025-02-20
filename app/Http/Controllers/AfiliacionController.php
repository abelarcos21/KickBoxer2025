<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliacion;

class AfiliacionController extends Controller
{
    public function create(){

        return view('solicitudafiliacion.create');
    }

    public function store(Request $request){
        //validacion de datos

        $validated = $request->validate([
            'nombre_solicitante' => 'required|string|max:255',
            'curp' => 'required|regex:/^[A-Z0-9]{18}$/|unique:afiliaciones',
            'sexo' => 'required|in:H,M',
            'fecha_nacimiento' => 'required|date|before:-18 years',
            'telefono_movil' => 'required|digits:10',
            'email' => 'required|email|max:255',
            'nombre_escuela' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
            'numero_exterior' => 'required|string|max:10',
            'colonia' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'codigo_postal' => 'required|digits:5',
            'red_social' => 'nullable|url',
            'aviso_privacidad' => 'required|accepted'
        ]);

        $validated['folio'] = 'AFI-' . now()->format('YmdHis');
        
        Afiliacion::create($validated);

        return redirect()->route('afiliaciones.create')
            ->with('success', 'Registro exitoso. Folio: ' . $validated['folio']);

    }
}
