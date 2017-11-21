<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Redirect;
use App\tipo_pieza;
use App\pieza;
use App\evento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Pagina extends Controller
{
  public function index()
  {
    $tpiezas = pieza::join('tipo_piezas', 'piezas.id_tipopieza', '=', 'tipo_piezas.id_tipo')
      ->select(DB::raw('count(piezas.id_tipopieza) as numero,  tipo_piezas.nombre as nametipo'))
       ->groupBy('tipo_piezas.nombre')
      ->get();
      $piezas = pieza::join('fichas_informativas','piezas.id',"=","fichas_informativas.id_pieza")
                      ->join('tipo_piezas', 'piezas.id_tipopieza', '=', 'tipo_piezas.id_tipo')
                      ->select('piezas.nombre as nombrepieza','piezas.fotografia as foto',
                      'tipo_piezas.nombre as nombretipo', 'fichas_informativas.historia as historia',
                      'fichas_informativas.epoca as epoca')
                        ->where('activo', '!=', 0)
                        ->take(9)
                        ->get();
      
    $tipos = pieza::join('tipo_piezas', 'piezas.id_tipopieza', '=', 'tipo_piezas.id_tipo')
      ->select('tipo_piezas.nombre as nametipo')
        ->groupBy('tipo_piezas.nombre')
        ->where('activo', '!=', 0)
      ->get();


        $eventos = evento::orderBy('fecha_inicial','DESC')->where('fecha_inicial', '>=', 0)->take(3)->get();

      return view('pagina.index', compact('tpiezas','piezas','tipos','eventos'));
  }

  public function contact(Request $request)
  {
    Mail::send('emails.contact',$request->all(), function($msj){
        $msj->subject('Correo de contacto');
        $msj->to('museohistoriasbx@gmail.com');
    });
    Session::flash('message:','Mensaje enciado correctamente');
    return Redirect::to('/contacto');
  }

  public function eventos()
  {
    $eventos = evento::all();
   return view('pagina.eventos')->with('eventos', $eventos);
  }



}
