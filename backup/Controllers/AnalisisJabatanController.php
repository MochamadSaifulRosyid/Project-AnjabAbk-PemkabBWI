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
        $userId = Auth::id();
        $jabatans = Jabatan::where('user_id', $userId)->get();
        $analisisJabatan = AnalisisJabatan::with('jabatan')
            ->whereHas('jabatan', function($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.index', compact('jabatans', 'analisisJabatan'));
    }

    public function create()
    {
        $jabatans = Jabatan::where('user_id', Auth::id())
            ->whereNotIn('id_jabatan', AnalisisJabatan::pluck('id_jabatan'))
            ->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
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

        // Convert arrays to JSON before saving
        $validatedData['uraian_tugas'] = json_encode($validatedData['uraian_tugas']);
        $validatedData['langkah_kerja'] = json_encode($validatedData['langkah_kerja']);
        $validatedData['hasil_kerja'] = json_encode($validatedData['hasil_kerja']);
        $validatedData['satuan'] = json_encode($validatedData['satuan']);
        $validatedData['waktu_permenit'] = json_encode($validatedData['waktu_permenit']);
        $validatedData['jumlah'] = json_encode($validatedData['jumlah']);
        $validatedData['hubungandenganjabatan'] = json_encode($validatedData['hubungandenganjabatan']);
        $validatedData['perihal'] = json_encode($validatedData['perihal']);
        $validatedData['unit_kerja'] = json_encode($validatedData['unit_kerja']);
        $validatedData['bahaya_fisikataumental'] = json_encode($validatedData['bahaya_fisikataumental']);
        $validatedData['penyebab'] = json_encode($validatedData['penyebab']);

        AnalisisJabatan::create($validatedData);

        return redirect()->route('analisisjabatan.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show(AnalisisJabatan $analisisjabatan)
    {
        return view('Admin_Unor.ANJAB.analisisjabatan.show', compact('analisisjabatan'));
    }

    public function edit(AnalisisJabatan $analisisjabatan)
    {
        $jabatans = Jabatan::where('user_id', Auth::id())
            ->whereNotIn('id_jabatan', AnalisisJabatan::where('id_anjab', '<>', $analisisjabatan->id_anjab)->pluck('id_jabatan'))
            ->get();
        
        return view('Admin_Unor.ANJAB.analisisjabatan.edit', compact('analisisjabatan', 'jabatans'));
    }

    public function update(Request $request, AnalisisJabatan $analisisjabatan)
    {
        $validated = $request->validate([
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
        if ($analisisjabatan->jabatan->user_id == Auth::id()) {
            $analisisjabatan->delete();
            return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan deleted successfully.');
        }

        return redirect()->route('analisisjabatan.index')->with('error', 'Unauthorized action.');
    }
}