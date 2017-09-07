<?php

namespace App\Http\Controllers;

use App\tarifa;
use App\tipo_visitantes;
use App\rango_edade;
use Illuminate\Http\Request;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $result = tarifa::join('rango_edades', 'tarifas.rango', '=', 'rango_edades.id')
        ->join('tipo_visitantes', 'tarifas.tipov', '=', 'tipo_visitantes.id')
        ->select('tarifas.id',
        'tarifas.activo',
        'tarifas.monto',
        'tarifas.inicio',
        'tarifas.final',
        'rango_edades.nombre as rangoa',
        'tipo_visitantes.nombre as visitante')
        ->orderBy('tarifas.id','ASC')
        ->get();
       return view('tarifas.index',compact('result'));
    }

    
    public function create()
    {
        $visitante = tipo_visitantes::all();
        $rango     = rango_edade::all();
        return view('tarifas.create',['visitante'=>$visitante],['rango'=>$rango]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa = new tarifa;
        $tarifa->activo = true;
        $tarifa->monto  = $request->uname;
        $tarifa->inicio = $request->date;
        $tarifa->final  = $request->datetwo;
        $tarifa->rango  = $request->rango;
        $tarifa->tipov  = $request->visitante;
        $tarifa->save();
        alert()->success('Creada', 'Tarifa')->persistent("Cerrar");
        return redirect()->route('tarifas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function show(tarifa $tarifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarifa = tarifa::find($id);
        return view('tarifas.edit', compact('tarifa'));
    }

  
    public function update(Request $request, $id)
    {
        $tarifa = tarifa::find($id);
        $tarifa->activo = true;
        $tarifa->monto  = $request->uname;
        $tarifa->inicio = $request->date;
        $tarifa->final  = $request->datetwo;
        $tarifa->rango  = $request->rango;
        $tarifa->tipov  = $request->visitante;
        $tarifa->save();
        alert()->success('Tarifa', 'Actualizada');
        return redirect()->route('tarifas.index');
    }

   
    public function destroy($id)
    {
        $tarifa = tarifa::find($id);
        $tarifa -> delete();
        alert()->success('Eliminada', 'Tarifa')->persistent("Cerrar");;
        return back();
    }
}
