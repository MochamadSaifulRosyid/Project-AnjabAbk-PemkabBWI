<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    // Menampilkan daftar jabatan
    public function index()
    {
        $jabatans = Jabatan::all();
        return view('Admin_Unor.ANJAB.jabatan.index', compact('jabatans'));
    }

    // Menampilkan form untuk membuat jabatan baru
    public function create()
    {
        return view('Admin_Unor.ANJAB.jabatan.create');
    }

    // Menyimpan jabatan baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'jenis_jabatan' => 'required|in:setruktural,fungsional,pelaksana',
            'nama_jabatan' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:100',
            'eselon' => 'nullable|in:Eselon 1A / Jabatan Pimpinan Tinggi Utama,Eselon 1B / Jabatan Pimpinan Tinggi Madya,Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya,Eselon 2A / Jabatan Pimpinan Tinggi Pratama,Eselon 2B / Jabatan Pimpinan Tinggi Pratama,Eselon 3A / Jabatan Administrator,Eselon 3B / Jabatan Administrator,Eselon 4A / Jabatan Pengawas,Eselon 4B / Jabatan Pengawas,Jabatan Pelaksana,Eselon 4A / Jabatan Pengawas (F),Kelompok,Sub Kelompok',
            'status_jabatan' => 'required|in:aktif,nonaktif',
        ]);

        // Generate kode_jabatan otomatis
        $lastJabatan = Jabatan::latest('id_jabatan')->first();
        $lastKode = $lastJabatan ? $lastJabatan->kode_jabatan : 'J1-000';
        
        $lastNumber = (int) substr($lastKode, 3);
        $nextNumber = $lastNumber + 1;
        $kodeJabatan = 'J1-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        // Create jabatan with generated kode_jabatan
        Jabatan::create(array_merge($request->all(), ['kode_jabatan' => $kodeJabatan]));

        return redirect()->route('jabatan.index')->with('success', 'Jabatan created successfully.');
    }

    // Menampilkan detail jabatan
    public function show(Jabatan $jabatan)
    {
        return view('Admin_Unor.ANJAB.jabatan.show', compact('jabatan'));
    }

    // Menampilkan form untuk mengedit jabatan
    public function edit(Jabatan $jabatan)
    {
        return view('Admin_Unor.ANJAB.jabatan.edit', compact('jabatan'));
    }

    // Memperbarui jabatan yang ada di database
    public function update(Request $request, Jabatan $jabatan)
    {
        $request->validate([
            'jenis_jabatan' => 'required|in:setruktural,fungsional,pelaksana',
            'nama_jabatan' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:100',
            'eselon' => 'required|in:Eselon 1A / Jabatan Pimpinan Tinggi Utama,Eselon 1B / Jabatan Pimpinan Tinggi Madya,Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya,Eselon 2A / Jabatan Pimpinan Tinggi Pratama,Eselon 2B / Jabatan Pimpinan Tinggi Pratama,Eselon 3A / Jabatan Administrator,Eselon 3B / Jabatan Administrator,Eselon 4A / Jabatan Pengawas,Eselon 4B / Jabatan Pengawas,Jabatan Pelaksana,Eselon 4A / Jabatan Pengawas (F),Kelompok,Sub Kelompok',
            'status_jabatan' => 'required|in:aktif,nonaktif',
        ]);

        // Update hanya field yang diizinkan
        $jabatan->update($request->only([
            'jenis_jabatan',
            'nama_jabatan',
            'unit_kerja',
            'eselon', // Tambahkan eselon ke dalam update
            'status_jabatan'
        ]));

        return redirect()->route('jabatan.index')->with('success', 'Jabatan updated successfully.');
    }

    // Menghapus jabatan dari database
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan deleted successfully.');
    }

    public function dashboard()
    {
        // Menghitung jumlah jabatan berdasarkan jenisnya
        $jumlahJabatanSetruktural = Jabatan::where('jenis_jabatan', 'setruktural')->count();
        $jumlahJabatanFungsional = Jabatan::where('jenis_jabatan', 'fungsional')->count();
        $jumlahJabatanPelaksana = Jabatan::where('jenis_jabatan', 'pelaksana')->count();
        $totalPegawai = Jabatan::count(); // Total pegawai

        // Mengirimkan variabel ke view
        return view('dashboard', compact('jumlahJabatanSetruktural', 'jumlahJabatanFungsional', 'jumlahJabatanPelaksana', 'totalPegawai'));
    }
}