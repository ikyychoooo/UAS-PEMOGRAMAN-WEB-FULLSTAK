<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    //

    public function showLoginForm(){
        return view('auth.admin-login');
    }

     public function loginAdmin(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Satu kali attempt saja
        if (! Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }

        $user = Auth::user();

        if ($user->role !== 'admin') {
            Auth::logout();

            return back()->withErrors([
                'email' => 'Akun ini bukan akun admin.',
            ])->onlyInput('email');
        }

        // Cek status aktif
        // if (! $user->status) {
        //     Auth::logout();

        //     return back()->withErrors([
        //         'email' => 'Akun ini dinonaktifkan.',
        //     ])->onlyInput('email');
        // }

        // Semua lolos

        $request->session()->regenerate();

        return redirect()->route('dashboard-index');

    }

    // public function showProfile()
    // {
    //     // Mengecek apakah ada user yang sedang login
    //     if (Auth::check()) {

    //         // Mengambil seluruh data object user yang sedang login
    //         $user = Auth::user();

    //         // Mengambil data spesifik (sesuaikan dengan nama kolom di database kamu)
    //         $username = $user->name; // Bisa juga $user->name atau $user->email
    //         $useremail = $user->email; // Bisa juga $user->name atau $user->email

    //         // Ini akan mengembalikan STRING HASH, bukan password asli yang diketik user


    //         return response()->json([
    //             'pesan' => 'User sedang login',
    //             'username' => $username,

    //         ]);

    //     }

    //     return response()->json(['pesan' => 'Tidak ada user yang login'], 401);
    // }

    // Logout admin
    public function logoutAdmin(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing-page');
    }



}
