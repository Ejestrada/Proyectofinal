<?php

namespace App\Http\Controllers;

use App\rango_edade;
use Illuminate\Http\Request;


class RangoEdadeController extends Controller
{
    
    public function index(){
        $rangos = rango_edade::orderBy('id','DESC')->get();
        return view('rangos.index',compact('rangos'));}
    
    public function show(rango_edade $rango_edade)
    {
        return "hola mundo";
    }
    public function destroy($id)
    {
        $rango = rango_edade::find($id);
        $rango -> delete();
        alert()->success('Rango', 'Eliminado');
        return back();
    }

    public function edit($id)
    {
        $rol = rango_edade::find($id);
        return view('roles.edit', compact('rol'));
    }

    
    public function create()
    {
        return view('tarifas.create'); 
    }
    
    public function store(Request $request)
    {
        $rango = new rango_edade;
        $rango->nombre = $request->nombre;
        $rango->save();
        return redirect()->route('rangos.index')->with('info','Rol ingresado');
    }
    public function update(Request $request, $id)
    {
        $rango = rango_edade::find($id);
        $rango->nombre = $request->nombre;
        $rango->save();
        return redirect()->route('rangos.index')->with('info','Tarifa Actualizada');}

    
}
