<?php

namespace App\Http\Middleware;

use Closure;

class MDAdministrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->rol!=1)
        {
         return new Response(view('MensajeError.Error')->with('msj','No tiene privilegios como secre'));
        }
   
        return $next($request);
    }
}
