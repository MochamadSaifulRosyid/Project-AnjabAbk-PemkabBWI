<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Tangani permintaan login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Cek apakah input adalah email atau username
        $field = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Melakukan autentikasi
        if (Auth::attempt([$field => $request->login, 'password' => $request->password])) {
            // Autentikasi berhasil, ambil user yang sedang login
            $user = Auth::user();

            // Update waktu login di kolom access_start_datetime
            $user->update([
                'access_start_datetime' => now(),
            ]);

            // Redirect ke halaman dashboard setelah login
            return redirect()->intended('dashboard');
        }

        // Jika gagal, kembali dengan error
        return back()->withErrors([
            'login' => 'Email atau username dan password tidak cocok.',
        ])->withInput($request->only('login'));
    }


public function logout(Request $request)
{
    $user = Auth::user(); // Ambil user yang sedang login

    // Update waktu logout sebelum logout
    $user->update([
        'access_end_datetime' => now(),  // Menyimpan waktu logout
    ]);

    // Proses logout
    Auth::logout();

    // Redirect ke halaman setelah logout
    return redirect()->route('login');
}
}
