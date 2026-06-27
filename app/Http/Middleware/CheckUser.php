<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUser
{
    public function handle(Request $request, Closure $next)
    {
        // Kalau belum login ATAU bukan admin → tolak
        if (!Auth::check() || Auth::user()->role !== 'customer') {
            return redirect()->route('login-page')
                ->withErrors(['email' => 'Silakan login dahulu.']);
        }

        return $next($request); // Lanjutkan request ke controller
    }
}
