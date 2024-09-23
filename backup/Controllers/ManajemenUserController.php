<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Unor;
use App\Models\Analisisjabatan;

class ManajemenUserController extends Controller
{
    public function index()
    {
        $unors = Unor::all();
        return view('Admin.Manajemen_Data.manajemenuser', compact('unors'));
    }

    public function getJabatansByUnor($kd_unor)
    {
        // Ambil Unor berdasarkan kd_unor
        $unor = Unor::where('KD_UNOR', $kd_unor)->first();
        
        if (!$unor) {
            return response()->json(['message' => 'Unit organisasi tidak ditemukan.'], 404);
        }
        
        // Ambil semua pengguna berdasarkan kd_unor
        $users = User::where('KD_UNOR', $kd_unor)->get();
        
        // Ambil jabatan berdasarkan user yang ditemukan
        $jabatans = Jabatan::whereIn('user_id', $users->pluck('id'))->get();
        
        return response()->json(['unor' => $unor, 'jabatans' => $jabatans]);
    }

    public function showJabatanByUserId($userId)
    {
        // Mengambil data jabatan berdasarkan user_id
        $jabatans = Jabatan::where('user_id', $userId)->get();

        if ($jabatans->isEmpty()) {
            return response()->json(['message' => 'Data jabatan tidak ditemukan'], 404);
        }

        return response()->json(['jabatans' => $jabatans]);
    }


    public function getUsers($kd_unor)
    {
        $unor = Unor::where('KD_UNOR', $kd_unor)->firstOrFail();
        $users = User::where('KD_UNOR', $kd_unor)->get();

        // Mengembalikan view yang akan di-render oleh AJAX
        return view('partials.users_table', compact('unor', 'users'));
    }

    public function getAnalisisJabatanByUserId($userId)
{
    // Mengambil data analisis jabatan berdasarkan user_id
    $analisisJabatan = AnalisisJabatan::whereHas('jabatan', function($query) use ($userId) {
        $query->where('user_id', $userId); // Pastikan kolom ini ada di tabel jabatan
    })->get();

    if ($analisisJabatan->isEmpty()) {
        return response()->json(['message' => 'Data analisis jabatan tidak ditemukan.'], 404);
    }

    return response()->json(['analisisJabatan' => $analisisJabatan]);
}

}