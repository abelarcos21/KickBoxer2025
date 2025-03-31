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
            'file' => 'required|file|max:2048|mimes:csv,txt,xlsx',
        ]);

        $file = $request->file('file');
        //dd($file->getClientOriginalName(), $file->getMimeType());

        //$fileName = $request->file('file')->getClientOriginalName();
        //$request->file('file')->move(public_path(), $fileName);
        //dd($request->file('file')->getRealPath());


        try {
            Excel::import(new EntrenadoresImport, $file);
            return redirect()->back()->with('success', 'Entrenadores importados correctamente.');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            return redirect()->back()->with('error', 'Error de validación: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error inesperado: ' . $e->getMessage());
        }


    }
}
