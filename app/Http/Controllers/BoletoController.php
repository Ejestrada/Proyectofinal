<?php

namespace App\Http\Controllers;

use App\boleto;
use App\tipo_visitantes;
use App\rango_edade;
use App\tarifa;
use Illuminate\Http\Request;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitante = tipo_visitantes::all();
        $rango     = rango_edade::all();
        return view('boletos.index',['visitante'=>$visitante],['rango'=>$rango]);
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
     * @param  \App\boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function show(boleto $boleto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function edit(boleto $boleto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boleto $boleto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function destroy(boleto $boleto)
    {
        //
    }
}
