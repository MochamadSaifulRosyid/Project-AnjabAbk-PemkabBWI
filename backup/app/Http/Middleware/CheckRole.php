<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        // Cek jika pengguna belum login atau peran tidak sesuai atau akses tidak aktif
        if (!Auth::check() || strtolower($user->role) !== strtolower($role) || !$user->access_status) {
            // Redirect ke halaman dashboard jika akses tidak diizinkan
            return redirect()->route('dashboard')->withErrors('Akses ditutup.');
        }

        return $next($request);
    }
}