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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna sudah login dan adalah admin
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return $next($request);
        }

        // Jika pengguna bukan admin, redirect ke halaman utama
        return redirect('/');
    }
}