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
    
    function verprevistaDeinforme($id){
        $informe= Informe::find($id);
        return view('previstadeinforme',["informe"=>$informe]);
    }

    function verinforme($id){
//return Informe::leftJoin("personas","pa_id","=","in_ps")->where("in_id","=",$id)->first();
 
return view('verinforme',["informe"=>Informe::leftJoin("personas","pa_id","=","in_ps")->where("in_id","=",$id)->first()]);
    }

    
}
