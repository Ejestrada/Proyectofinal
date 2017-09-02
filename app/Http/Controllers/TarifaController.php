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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(tarifa $tarifa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarifa $tarifa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tarifa  $tarifa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarifa $tarifa)
    {
        //
    }
}
