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
        return view('Admin_Unor.ANJAB.analisisjabatan.index', compact('jabatans', 'analisisJabatan'));
    }

    public function create()
    {
        $jabatans = Jabatan::whereNotIn('id_jabatan', AnalisisJabatan::pluck('id_jabatan'))->get();
        return view('Admin_Unor.ANJAB.analisisjabatan.create', compact('jabatans'));
    }

    public function store(Request $request)
{
    // Validasi data
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

    // Simpan data
    $analisis = new AnalisisJabatan();
    $analisis->id_jabatan = $request->id_jabatan;
    $analisis->kode_jabatan = $request->kode_jabatan;
    $analisis->nama_jabatan = $request->nama_jabatan;
    $analisis->ikhtisar_jabatan = $request->ikhtisar_jabatan;
    $analisis->objek_kerja = $request->objek_kerja;
    $analisis->uraian_tugas = implode(',', $request->uraian_tugas);
    $analisis->langkah_kerja = implode(',', $request->langkah_kerja);
    $analisis->hasil_kerja = implode(',', $request->hasil_kerja);
    $analisis->satuan = implode(',', $request->satuan);
    $analisis->waktu_permenit = implode(',', $request->waktu_permenit);
    $analisis->jumlah = implode(',', $request->jumlah);
    $analisis->tanggung_jawab = $request->tanggung_jawab;
    $analisis->wewenang = $request->wewenang;
    $analisis->perangkat_kerja = $request->perangkat_kerja;
    $analisis->bahan_kerja = $request->bahan_kerja;
    $analisis->hubungandenganjabatan = implode(',', $request->hubungandenganjabatan);
    $analisis->perihal = implode(',', $request->perihal);
    $analisis->unit_kerja = implode(',', $request->unit_kerja);
    $analisis->bahaya_fisikataumental = implode(',', $request->bahaya_fisikataumental);
    $analisis->penyebab = implode(',', $request->penyebab);
    $analisis->tempat_kerja = $request->tempat_kerja;
    $analisis->suhu = $request->suhu;
    $analisis->udara = $request->udara;
    $analisis->keadaan_ruangan = $request->keadaan_ruangan;
    $analisis->letak = $request->letak;
    $analisis->penerangan = $request->penerangan;
    $analisis->suara = $request->suara;
    $analisis->keadaan_tempatkerja = $request->keadaan_tempatkerja;
    $analisis->getaran = $request->getaran;
    $analisis->rekomendasi = $request->rekomendasi;
    $analisis->prestasi = $request->prestasi;
    $analisis->butir_informasilainnya = $request->butir_informasilainnya;
    $analisis->kelas_jabatan = $request->kelas_jabatan;
    $analisis->save();

    return redirect()->route('analisisjabatan.index')->with('success', 'Data berhasil disimpan.');
}


    public function show(AnalisisJabatan $analisisjabatan)
    {
        return view('Admin_Unor.ANJAB.analisisjabatan.show', compact('analisisjabatan'));
    }

    public function edit(AnalisisJabatan $analisisjabatan)
    {
        $jabatans = Jabatan::whereNotIn('id_jabatan', AnalisisJabatan::where('id_anjab', '<>', $analisisjabatan->id_anjab)->pluck('id_jabatan'))->get();
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

    // Hapus bagian ini jika id_jabatan tidak digunakan untuk validasi
    /*$exists = AnalisisJabatan::where('id_jabatan', $validated['id_jabatan'])
            ->where('id_anjab', '<>', $analisisjabatan->id_anjab)
            ->exists();

    if ($exists) {
        return redirect()->back()->withErrors(['id_jabatan' => 'ID Jabatan sudah digunakan.'])->withInput();
    }*/

    // Update the model
    $analisisjabatan->update([
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