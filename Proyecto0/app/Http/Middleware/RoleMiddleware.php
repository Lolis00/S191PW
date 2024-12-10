<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        return $next($request); // Simplemente permite el acceso
    }
}

