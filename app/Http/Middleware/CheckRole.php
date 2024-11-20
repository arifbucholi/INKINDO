<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        Log::info('User role: ' . Auth::user()->role);
        // Mengecek apakah pengguna sudah login dan memiliki role yang sesuai
        if (Auth::check()) {
            // Memeriksa apakah role pengguna ada dalam array role yang diterima
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request);  // Akses dibolehkan jika role sesuai
            }
        }

        // Jika role tidak sesuai, arahkan ke halaman login
        return redirect()->route('login')->withErrors(['message' => 'Akses ditolak']);
    }
}
