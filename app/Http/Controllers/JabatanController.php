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
        return view('jabatan.index', compact('jabatans'));
    }

    // Menampilkan form untuk membuat jabatan baru
    public function create()
    {
        return view('jabatan.create');
    }

    // Menyimpan jabatan baru ke dalam database
    public function store(Request $request)
{
    $request->validate([
        'jenis_jabatan' => 'required|in:setruktural,fungsional,pelaksana',
        'nama_jabatan' => 'required|string|max:100',
        'unit_kerja' => 'required|string|max:100',
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
        return view('jabatan.show', compact('jabatan'));
    }

    // Menampilkan form untuk mengedit jabatan
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }

    // Memperbarui jabatan yang ada di database
    public function update(Request $request, Jabatan $jabatan)
{
    $request->validate([
        'jenis_jabatan' => 'required|in:setruktural,fungsional,pelaksana',
        'nama_jabatan' => 'required|string|max:100',
        'unit_kerja' => 'required|string|max:100',
        'status_jabatan' => 'required|in:aktif,nonaktif',
    ]);

    // Update hanya field yang diizinkan
    $jabatan->update($request->only([
        'jenis_jabatan',
        'nama_jabatan',
        'unit_kerja',
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
}