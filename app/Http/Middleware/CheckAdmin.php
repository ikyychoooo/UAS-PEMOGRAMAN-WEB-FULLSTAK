<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
     public function handle(Request $request, Closure $next)
    {
        // Kalau belum login ATAU bukan admin → tolak
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('signup-page')
                ->withErrors(['email' => 'Silakan login sebagai admin.']);
        }

        return $next($request); // Lanjutkan request ke controller
    }
}
