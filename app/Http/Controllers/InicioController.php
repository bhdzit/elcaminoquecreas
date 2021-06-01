<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use App\Models\Persona;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio',['personas'=>Persona::where('pa_us','=',auth()->id())->get(),
        'informes'=>Informe::leftjoin("personas","pa_id","=","in_ps")->where('in_us','=',auth()->id())->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $persona = new Persona();
        $persona->pa_us=auth()->id();
        $persona->pa_nombre=request('name');
        $persona->pa_lugar_nacimiento=request('provincia').','.request('ciudad');
        $persona->fecha_nacimiento=request('date').' '.request('time');
        $persona->save();

        return redirect()->route('inicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->pa_nombre=request('name');
        $persona->pa_lugar_nacimiento=request('provincia').','.request('ciudad');
        $persona->fecha_nacimiento=request('date').' '.request('time');
        $persona->save();

        return redirect()->route('inicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect()->route('inicio.index');
    }
}
