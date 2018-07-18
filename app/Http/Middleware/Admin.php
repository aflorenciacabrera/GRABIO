<?php

namespace grabio\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Admin
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
        //  if (!Auth::user()->hasRole('admin')) 
        // {
        //     return redirect('/principal');
        // }
    if (Auth::user()->hasRole('responsable')) 
    {
        if (Auth::user()->estado == 0) 
        {
            return redirect('/')->with('activacion','su cuenta aun no ha sido activada, comuniquese con el Administrador');
        }
        
            
    }
    if (Auth::user()->estado == 0) 
        {
            return redirect('/')->with('activacion','su cuenta aun no ha sido activada, comuniquese con el Responsable');
        }

        return $next($request);
    }
    

}

