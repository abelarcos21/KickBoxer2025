<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juez;
use App\Models\Academia;
use App\Models\Asociacion;
use App\Models\Entrenador;
use App\Models\Afiliacion;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entrenadores = Entrenador::all();
        $jueces = Juez::all();
        $academias = Academia::all();
        $asociaciones = Asociacion::all();
        $afiliaciones = Afiliacion::all();
        return view('home', compact(
            'entrenadores','jueces', 'academias', 'asociaciones', 'afiliaciones'
        ));
    }
}
