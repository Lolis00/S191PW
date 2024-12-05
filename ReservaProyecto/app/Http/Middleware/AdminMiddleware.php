<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AdminController;


use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes acceso a esta página.');
    }
}