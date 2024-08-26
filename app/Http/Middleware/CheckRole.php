<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Mengubah pengecekan role menjadi case-insensitive
        if (!Auth::check() || strtolower(Auth::user()->role) !== strtolower($role)) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}