<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Autenticador
{

    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/entrar');
        }

        return $next($request);
    }
}
