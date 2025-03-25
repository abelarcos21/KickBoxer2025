<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;
use PDF;

class PDFController extends Controller
{
    //GENERAR PDF
    public function generatePDF(){

        $entrenadores = Entrenador::all();
        $titulo = "Lista de Entrenadores"; // Título dinámico

        $pdf = PDF::loadView('entrenadorpdf.entrenadores',compact('entrenadores','titulo',));
        
       
        $pdf->setPaper('a4', 'landscape')->setOptions([//PAGINA HORIZONTAL tamaño A4
            //PARA TABLAS MUY ANCHAS
            'isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            'margin-top', 20
        ]);
    

        //return $pdf->download('AsociacionEstatalKickBoxing.pdf');//DESCARGAR PDF
        return $pdf->stream('AsociacionEstatalKickBoxing.pdf');//VISALISAR EL PDF ANTES DE DESCARGAR
    }
}
