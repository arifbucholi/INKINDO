<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showLoginForm()
    {
        return view('login'); // Tampilkan view form login
    }

    public function login(Request $request)
    {
        // Validasi login
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Mengecek role pengguna setelah login
            if ($user->role == 'admin' || $user->role == 'super_admin') {
                return redirect()->route('admin.index'); // Arahkan ke halaman admin
            }

            // Jika bukan admin atau super_admin, arahkan ke halaman umum
            return redirect()->route('login');
        }

        // Jika login gagal
        return redirect()->route('login')
        ->withInput()
        ->withErrors(['login' => 'Login gagal.']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna

        $request->session()->invalidate(); // Hapus sesi pengguna
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        // dd($request->all());

        return redirect('/login'); // Arahkan ke halaman login
    }
}
