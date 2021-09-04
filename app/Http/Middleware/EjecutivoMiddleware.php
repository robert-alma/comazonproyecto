<?php

namespace App\Http\Middleware;

use Closure;

class EjecutivoMiddleware
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
        if(session()->get('perfil_id') == 2){
            return $next($request);
        }
        return redirect(route('inicio'));
    }
}
