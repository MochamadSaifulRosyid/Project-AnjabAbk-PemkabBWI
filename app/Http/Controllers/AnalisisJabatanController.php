<?php

namespace App\Http\Controllers;

use App\Models\AnalisisJabatan;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalisisJabatanController extends Controller
{
    public function index()
    {
        // Filter AnalisisJabatan based on the logged-in user
        $jabatans = Jabatan::where('user_id', Auth::id())->get();
        $analisisJabatan = AnalisisJabatan::with('jabatan')->whereHas('jabatan', function($query) {
            $query->where('user_id', Auth::id());
        })->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.index', compact('jabatans', 'analisisJabatan'));
    }

    public function create()
    {
        // Exclude AnalisisJabatan related jabatan and filter based on user_id
        $jabatans = Jabatan::where('user_id', Auth::id())
            ->whereNotIn('id_jabatan', AnalisisJabatan::pluck('id_jabatan'))
            ->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        // Validate data
        $validatedData = $request->validate([
            'id_jabatan' => 'required|exists:jabatan,id_jabatan',
            'kode_jabatan' => 'required|string',
            'nama_jabatan' => 'required|string',
            'ikhtisar_jabatan' => 'required|string',
            'objek_kerja' => 'required|string',
            'uraian_tugas' => 'required|array',
            'uraian_tugas.*' => 'string',
            'langkah_kerja' => 'nullable|array',
            'langkah_kerja.*' => 'string',
            'hasil_kerja' => 'required|array',
            'hasil_kerja.*' => 'string',
            'satuan' => 'required|array',
            'satuan.*' => 'string',
            'waktu_permenit' => 'required|array',
            'waktu_permenit.*' => 'numeric',
            'jumlah' => 'required|array',
            'jumlah.*' => 'numeric',
            'tanggung_jawab' => 'required|string',
            'wewenang' => 'required|string',
            'perangkat_kerja' => 'required|string',
            'bahan_kerja' => 'required|string',
            'hubungandenganjabatan' => 'nullable|array',
            'hubungandenganjabatan.*' => 'string',
            'perihal' => 'nullable|array',
            'perihal.*' => 'string',
            'unit_kerja' => 'nullable|array',
            'unit_kerja.*' => 'string',
            'bahaya_fisikataumental' => 'nullable|array',
            'bahaya_fisikataumental.*' => 'string',
            'penyebab' => 'nullable|array',
            'penyebab.*' => 'string',
            'tempat_kerja' => 'required|string',
            'suhu' => 'required|string',
            'udara' => 'required|string',
            'keadaan_ruangan' => 'required|string',
            'letak' => 'required|string',
            'penerangan' => 'required|string',
            'suara' => 'required|string',
            'keadaan_tempatkerja' => 'required|string',
            'getaran' => 'required|string',
            'rekomendasi' => 'required|string',
            'prestasi' => 'nullable|string',
            'butir_informasilainnya' => 'required|string',
            'kelas_jabatan' => 'required|integer|between:1,17'
        ]);

        // Save data with user_id
        $analisis = new AnalisisJabatan();
        $analisis->fill($validatedData);
        $analisis->save();

        return redirect()->route('analisisjabatan.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show(AnalisisJabatan $analisisjabatan)
    {
        return view('Admin_Unor.ANJAB.analisisjabatan.show', compact('analisisjabatan'));
    }

    public function edit(AnalisisJabatan $analisisjabatan)
    {
        // Ensure that the jabatan list is filtered by the logged-in user
        $jabatans = Jabatan::where('user_id', Auth::id())
            ->whereNotIn('id_jabatan', AnalisisJabatan::where('id_anjab', '<>', $analisisjabatan->id_anjab)->pluck('id_jabatan'))
            ->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.edit', compact('analisisjabatan', 'jabatans'));
    }

    public function update(Request $request, AnalisisJabatan $analisisjabatan)
    {
        $validated = $request->validate([
            'ikhtisar_jabatan' => 'required|string|max:255',
            'objek_kerja' => 'required|string|max:255',
            'uraian_tugas' => 'required|string|max:255',
            'langkah_kerja' => 'required|string|max:255',
            'hasil_kerja' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            'waktu_permenit' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'tanggung_jawab' => 'required|string|max:255',
            'wewenang' => 'required|string|max:255',
            'perangkat_kerja' => 'required|string|max:255',
            'bahan_kerja' => 'required|string|max:255',
            'hubungandenganjabatan' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'unit_kerja' => 'required|string|max:255',
            'bahaya_fisikataumental' => 'required|string|max:255',
            'penyebab' => 'required|string|max:255',
            'tempat_kerja' => 'required|string|max:255',
            'suhu' => 'required|string|max:255',
            'udara' => 'required|string|max:255',
            'keadaan_ruangan' => 'required|string|max:255',
            'letak' => 'required|string|max:255',
            'penerangan' => 'required|string|max:255',
            'suara' => 'required|string|max:255',
            'keadaan_tempatkerja' => 'required|string|max:255',
            'getaran' => 'required|string|max:255',
            'rekomendasi' => 'required|string|max:255',
            'prestasi' => 'nullable|string|max:255',
            'butir_informasilainnya' => 'required|string|max:255',
            'kelas_jabatan' => 'required|integer|min:1|max:17'
        ]);

        // Update the model
        $analisisjabatan->update($validated);

        return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan updated successfully.');
    }

    public function destroy(AnalisisJabatan $analisisjabatan)
    {
        // Ensure that only the owner's data is deleted
        if ($analisisjabatan->jabatan->user_id == Auth::id()) {
            $analisisjabatan->delete();
            return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan deleted successfully.');
        }

        return redirect()->route('analisisjabatan.index')->with('error', 'Unauthorized action.');
    }
}