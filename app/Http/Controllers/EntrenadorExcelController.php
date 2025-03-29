<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;//uso de la libreria
use App\Exports\EntrenadoresExport;
use App\Imports\EntrenadoresImport;
use App\Models\Entrenador;

class EntrenadorExcelController extends Controller
{
    //
    public function export(){

        return Excel::download(new EntrenadoresExport, 'entrenadores.xlsx');

    }

    //
    public function import(Request $request){

        // Validar los datos de la solicitud entrante
        $request->validate([
            'file' => 'required|max:2048|mimes:csv,txt',
        ]);

        //$file = $request->file('file');
        //dd($file->getClientOriginalName(), $file->getMimeType());

        try {
            Excel::import(new EntrenadoresImport, $request->file('file'));
            return redirect()->back()->with('success', 'Entrenadores importados correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al importar: ' . $e->getMessage());
        }


    }
}
