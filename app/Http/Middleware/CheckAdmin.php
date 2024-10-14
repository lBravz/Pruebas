<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->cargo_id == 1) {
            return $next($request);
        }

        return redirect()->route('home')->withErrors('Acceso denegado. No tienes permiso para acceder a esta área.');
    }
}