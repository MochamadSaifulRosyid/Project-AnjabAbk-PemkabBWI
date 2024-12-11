<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetaJabatanController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $jabatans = Jabatan::with('anakJabatans')
            ->where('user_id', $userId)
            ->whereNull('dibawah_jabatan')
            ->get();

        return view('Admin_Unor.LAPORAN.petajabatan.index', compact('jabatans'));
    }
}
