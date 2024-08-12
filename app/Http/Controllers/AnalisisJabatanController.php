<?php
namespace App\Http\Controllers;

use App\Models\AnalisisJabatan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class AnalisisJabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        $analisisJabatan = AnalisisJabatan::with('jabatan')->get();
        return view('analisisjabatan.index', compact('jabatans', 'analisisJabatan'));
    }

    public function create()
    {
        $jabatans = Jabatan::whereNotIn('id_jabatan', AnalisisJabatan::pluck('id_jabatan'))->get();
        return view('analisisjabatan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_jabatan' => 'required|integer|exists:jabatan,id_jabatan',
            'kode_jabatan' => 'required|string|max:10',
            'nama_jabatan' => 'required|string|max:100',
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

        $exists = AnalisisJabatan::where('id_jabatan', $validated['id_jabatan'])->exists();
        if ($exists) {
            return redirect()->back()->withErrors(['id_jabatan' => 'ID Jabatan sudah digunakan.'])->withInput();
        }

        AnalisisJabatan::create([
            'id_jabatan' => $validated['id_jabatan'],
            'kode_jabatan' => $validated['kode_jabatan'],
            'nama_jabatan' => $validated['nama_jabatan'],
            'ikhtisar_jabatan' => $validated['ikhtisar_jabatan'],
            'objek_kerja' => $validated['objek_kerja'],
            'uraian_tugas' => $validated['uraian_tugas'],
            'langkah_kerja' => $validated['langkah_kerja'],
            'hasil_kerja' => $validated['hasil_kerja'],
            'satuan' => $validated['satuan'],
            'waktu_permenit' => $validated['waktu_permenit'],
            'jumlah' => $validated['jumlah'],
            'tanggung_jawab' => $validated['tanggung_jawab'],
            'wewenang' => $validated['wewenang'],
            'perangkat_kerja' => $validated['perangkat_kerja'],
            'bahan_kerja' => $validated['bahan_kerja'],
            'hubungandenganjabatan' => $validated['hubungandenganjabatan'],
            'perihal' => $validated['perihal'],
            'unit_kerja' => $validated['unit_kerja'],
            'bahaya_fisikataumental' => $validated['bahaya_fisikataumental'],
            'penyebab' => $validated['penyebab'],
            'tempat_kerja' => $validated['tempat_kerja'],
            'suhu' => $validated['suhu'],
            'udara' => $validated['udara'],
            'keadaan_ruangan' => $validated['keadaan_ruangan'],
            'letak' => $validated['letak'],
            'penerangan' => $validated['penerangan'],
            'suara' => $validated['suara'],
            'keadaan_tempatkerja' => $validated['keadaan_tempatkerja'],
            'getaran' => $validated['getaran'],
            'rekomendasi' => $validated['rekomendasi'],
            'prestasi' => $validated['prestasi'],
            'butir_informasilainnya' => $validated['butir_informasilainnya'],
            'kelas_jabatan' => $validated['kelas_jabatan'],
        ]);

        return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan created successfully.');
    }

    public function show(AnalisisJabatan $analisisjabatan)
    {
        return view('analisisjabatan.show', compact('analisisjabatan'));
    }

    public function edit(AnalisisJabatan $analisisjabatan)
    {
        $jabatans = Jabatan::whereNotIn('id_jabatan', AnalisisJabatan::where('id_anjab', '<>', $analisisjabatan->id_anjab)->pluck('id_jabatan'))->get();
        return view('analisisjabatan.edit', compact('analisisjabatan', 'jabatans'));
    }

    public function update(Request $request, AnalisisJabatan $analisisjabatan)
    {
        $validated = $request->validate([
            'id_jabatan' => 'required|integer|exists:jabatan,id_jabatan',
            'kode_jabatan' => 'required|string|max:10',
            'nama_jabatan' => 'required|string|max:100',
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

        $exists = AnalisisJabatan::where('id_jabatan', $validated['id_jabatan'])
                ->where('id_anjab', '<>', $analisisjabatan->id_anjab)
                ->exists();

            if ($exists) {
                return redirect()->back()->withErrors(['id_jabatan' => 'ID Jabatan sudah digunakan.'])->withInput();
            }

            $analisisjabatan->update([
                'id_jabatan' => $validated['id_jabatan'],
                'kode_jabatan' => $validated['kode_jabatan'],
                'nama_jabatan' => $validated['nama_jabatan'],
                'ikhtisar_jabatan' => $validated['ikhtisar_jabatan'],
                'objek_kerja' => $validated['objek_kerja'],
                'uraian_tugas' => $validated['uraian_tugas'],
                'langkah_kerja' => $validated['langkah_kerja'],
                'hasil_kerja' => $validated['hasil_kerja'],
                'satuan' => $validated['satuan'],
                'waktu_permenit' => $validated['waktu_permenit'],
                'jumlah' => $validated['jumlah'],
                'tanggung_jawab' => $validated['tanggung_jawab'],
                'wewenang' => $validated['wewenang'],
                'perangkat_kerja' => $validated['perangkat_kerja'],
                'bahan_kerja' => $validated['bahan_kerja'],
                'hubungandenganjabatan' => $validated['hubungandenganjabatan'],
                'perihal' => $validated['perihal'],
                'unit_kerja' => $validated['unit_kerja'],
                'bahaya_fisikataumental' => $validated['bahaya_fisikataumental'],
                'penyebab' => $validated['penyebab'],
                'tempat_kerja' => $validated['tempat_kerja'],
                'suhu' => $validated['suhu'],
                'udara' => $validated['udara'],
                'keadaan_ruangan' => $validated['keadaan_ruangan'],
                'letak' => $validated['letak'],
                'penerangan' => $validated['penerangan'],
                'suara' => $validated['suara'],
                'keadaan_tempatkerja' => $validated['keadaan_tempatkerja'],
                'getaran' => $validated['getaran'],
                'rekomendasi' => $validated['rekomendasi'],
                'prestasi' => $validated['prestasi'],
                'butir_informasilainnya' => $validated['butir_informasilainnya'],
                'kelas_jabatan' => $validated['kelas_jabatan'],
            ]);

        return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan updated successfully.');
            
    }

    public function destroy(AnalisisJabatan $analisisjabatan)
    {
        $analisisjabatan->delete();

        return redirect()->route('analisisjabatan.index')->with('success', 'Analisis Jabatan deleted successfully.');
    }
}