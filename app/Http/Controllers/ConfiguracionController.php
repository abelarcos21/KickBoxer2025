<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    //metodo index
    public function index(){
        return view('configuracion');
    }
}
