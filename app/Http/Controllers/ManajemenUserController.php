<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Unor;

class ManajemenUserController extends Controller
{

public function index()
{
    // Ambil semua data Unor
    $unors = Unor::all();

    // Ambil data jabatan yang dijadikan parent oleh user yang sedang login
    $parentJabatans = Jabatan::where('user_id', Auth::id())->get();

    // Ambil user dengan role 'admin skpd' saja
    $users = User::where('role', 'admin skpd')->get(); // Sesuaikan dengan nama kolom role jika berbeda

    return view('Admin.Manajemen_Data.manajemenuser', compact('parentJabatans', 'unors', 'users'));
}



    public function create()
    {
        // Ambil semua user (untuk dropdown pemilihan user)
        $users = User::all();

        // Ambil daftar jabatan untuk dropdown "dibawah_jabatan"
        $daftarJabatan = Jabatan::select('id_jabatan', 'nama_jabatan', 'eselon')
            ->orderBy('eselon')
            ->get();

        // Kirimkan data users dan daftarJabatan ke view
        return view('Admin.Manajemen_Data.manajemenuser', compact('daftarJabatan', 'users'));
    }



        /**
         * Simpan data baru ke database.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store(Request $request)
        {
            // Validasi input
            $validated = $request->validate([
                'user_id' => 'required|exists:users,id', // Pastikan user_id valid
                'jenis_jabatan' => 'required|string|max:100',
                'jenjang' => 'nullable|string|max:100',
                'nama_jabatan' => 'required|string|max:100',
                'unit_kerja' => 'required|string|max:100',
                'eselon' => 'nullable|string|max:100',
                'status_jabatan' => 'required|string|max:100',
                'dibawah_jabatan' => 'nullable|exists:jabatan,id_jabatan',
            ]);

            // Buat kode jabatan otomatis
            $lastJabatan = Jabatan::latest('id_jabatan')->first();
            $lastKode = $lastJabatan ? $lastJabatan->kode_jabatan : 'J1-000';

            $lastNumber = (int) substr($lastKode, 3);
            $nextNumber = $lastNumber + 1;
            $kodeJabatan = 'J1-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            // Simpan data
            Jabatan::create([
                'user_id' => $validated['user_id'], // Menggunakan user_id yang dipilih
                'jenis_jabatan' => $validated['jenis_jabatan'],
                'jenjang' => $validated['jenjang'],
                'kode_jabatan' => $kodeJabatan,
                'nama_jabatan' => $validated['nama_jabatan'],
                'unit_kerja' => $validated['unit_kerja'],
                'eselon' => $validated['eselon'],
                'status_jabatan' => $validated['status_jabatan'],
                'dibawah_jabatan' => $validated['dibawah_jabatan'],
            ]);

            return redirect()->route('manajemenuser.index')->with('success', 'Data berhasil ditambahkan.');
        }




    public function getJabatansByUnor($kd_unor)
    {
        $unor = Unor::where('KD_UNOR', $kd_unor)->first();

        if (!$unor) {
            return response()->json(['message' => 'Unit organisasi tidak ditemukan.'], 404);
        }

        $users = User::where('KD_UNOR', $kd_unor)->get();
        $jabatans = Jabatan::whereIn('user_id', $users->pluck('id'))->get();

        return response()->json(['unor' => $unor, 'jabatans' => $jabatans]);
    }

    public function showJabatanByUserId($userId)
    {
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

        return view('partials.users_table', compact('unor', 'users'));
    }
}
