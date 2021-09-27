<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Editeur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role->role == "admin" || Auth::user()->role->role == "webmaster" || Auth::user()->role->role == 'editeur') {
            return $next($request);
        } else {
            abort(403);
        }
        
    }
}
