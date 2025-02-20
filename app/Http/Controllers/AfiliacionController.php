<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfiliacionController extends Controller
{
    public function create(){

        return view('solicitudafiliacion.create');
    }

    public function store(Request $request){
        //validacion de datos

    }
}
