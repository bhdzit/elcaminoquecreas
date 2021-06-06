<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Laravel\Cashier;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class InformeController extends Controller
{
    //

    public function selecionarAquinVaDirigidofunction($informe)
    {
        return view('informe', ['informe' => $informe, "personas" => Persona::where('pa_us', '=', auth()->id())->get()]);
    }

    public function selecionarCiudadDeInforme(Request $request)
    {
        // return $request;
        $request->validate([
            'informe' => 'required',
            'persona' => 'required|exists:personas,pa_nombre',
            'date' => 'required',
        ]);
        return view('informeciudad', ["request" => $request, "persona" => Persona::find(request('personaId')), "informe" => $request->informe]);
    }

    public function generarInforme(Request $request)
    {

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

    function verprevistaDeinforme($id)
    {
        $informe = Informe::find($id);
        return view('previstadeinforme', ["informe" => $informe]);
    }

    function verinforme($id)
    {


        $informe = Informe::leftJoin("personas", "pa_id", "=", "in_ps")->where("in_id", "=", $id)->first();
        if ($informe->in_pay_id == null) return view('verinforme', ["informe" => $informe,"tipoDeInforme"=>false]);

        Stripe::setApiKey(env('STRIPE_SECRET', false));
        $pay = Session::retrieve($informe->in_pay_id);
        if ($pay->payment_status != "unpaid") {
            return view('verinforme', ["informe" => $informe,"tipoDeInforme"=>true]);
        } else {
            abort(500);
        }
    }

    function checkoutInforme(Request $request)
    {
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
        $checkout =   User::find(3)->checkout('price_1IxTTCBjBlfQy6Pl188gBs9g', [
            'success_url' => route('previstadeinforme', $informe->in_id),
            'cancel_url' => route('home'),
        ]);
        $informe->in_pay_id = $checkout->id;
        $informe->save();
        return view('previstadeinforme', ["informe" => $informe, "checkout" => $checkout]);
    }
}
