<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; // memanggil class Auth

class IsAdmin
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
        // mengecek auth-nya admin atau user
        // mengecek field roles di table users
        if(Auth::user() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        }

        return redirect('/');
    }
}
