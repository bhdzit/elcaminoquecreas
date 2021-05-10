<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use App\Models\Persona;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class InformeController extends Controller
{
    //

    public function selecionarAquinVaDirigidofunction($informe)
    {
        return view('informe', ['informe' => $informe, "personas" => Persona::where('pa_us', '=', auth()->id())->get()]);
    }

    public function selecionarCiudadDeInforme(Request $request, $informe)
    {
        //return $request;
        $request->validate([

            'persona' => 'required|exists:personas,pa_nombre',
            'date' => 'required',
        ]);

        return view('informeciudad', ["request" => $request, "persona" => Persona::find(request('personaId')), "informe" => $informe]);
    }

    public function generarInforme(Request $request)
    {

        // return $request;
        $informe = new Informe();

        $informe->in_us = auth()->id();
        $informe->in_ps = request("persona");
        $informe->in_nombre = request("informe");

        if (request("version") == "gratis") {
            $informe->in_tipo = true;
        } else {
            $informe->in_tipo = false;
        }


        $informe->in_date = request("date");
        $informe->in_lugar = request("ciudad") . ", " . request("pais");
        $informe->save();
        return redirect()->route('previstadeinforme', $informe->in_id);
    }



    public function verinforme($id)
    {

        $array = [
            "N4", "N5", "N6", "N7", "N8", "N9", "N10", "N11", "N12"
        ];

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $reader->setLoadSheetsOnly(["Sheet 1", "Informe de Revolución"]);
        $spreadsheet = $reader->load("PrimordialRSyRLparaenviar2.xlsx");
        for ($i = 0; $i < count($array); $i++) {
            echo ($spreadsheet->getActiveSheet()->getCell($array[$i])) . "<p>";
        }



/*BuscarReemplazar "[NombreyApellidosdelapersona]", ActiveSheet.Range("Z4")
BuscarReemplazar "[Fechadenacimiento]", ActiveSheet.Range("AB4")
BuscarReemplazar "[Lugardenacimiento]", ActiveSheet.Range("AC4")
BuscarReemplazar "[Lugardelarevolucionlunar]", ActiveSheet.Range("AH4")
BuscarReemplazar "[FechadeInicio]", ActiveSheet.Range("AE4")
BuscarReemplazar "[FechaFinal]", ActiveSheet.Range("AF4")

BuscarReemplazar "[1A]", ActiveSheet.Range("N4")
BuscarReemplazar "[2A]", ActiveSheet.Range("N5")
BuscarReemplazar "[3A]", ActiveSheet.Range("N6")
BuscarReemplazar "[4A]", ActiveSheet.Range("N7")
BuscarReemplazar "[5A]", ActiveSheet.Range("N8")
BuscarReemplazar "[6A]", ActiveSheet.Range("N9")
BuscarReemplazar "[7A]", ActiveSheet.Range("N10")
BuscarReemplazar "[8A]", ActiveSheet.Range("N11")
BuscarReemplazar "[9A]", ActiveSheet.Range("N12")*/
    }
}
