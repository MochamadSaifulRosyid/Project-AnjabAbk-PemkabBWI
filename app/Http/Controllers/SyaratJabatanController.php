<?php

namespace App\Http\Controllers;

use App\Models\SyaratJabatan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class SyaratJabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        $syaratJabatan = SyaratJabatan::with('jabatan')->get();
        return view('syaratjabatan.index', compact('jabatans', 'syaratJabatan'));
    }

    public function create()
    {
        // Mendapatkan semua jabatan yang belum digunakan
        $jabatans = Jabatan::whereNotIn('id_jabatan', SyaratJabatan::pluck('id_jabatan'))->get();
        return view('syaratjabatan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_jabatan' => 'required|integer|exists:jabatan,id_jabatan',
            'kode_jabatan' => 'required|string|max:10',
            'nama_jabatan' => 'required|string|max:100',
            'pengetahuan_kerja' => 'required|string|max:100',
            'keterampilan_kerja' => 'required|string|max:100',
            'pengalaman_kerja' => 'required|string|max:200',
            'bakat_kerja' => 'nullable|array', // Update validasi
            'bakat_kerja.*' => 'string', // Validasi masing-masing elemen array
            'tempramen_kerja' => 'nullable|array',
            'tempramen_kerja.*' => 'string',
            'minat_kerja' => 'nullable|array',
            'minat_kerja.*' => 'string',
            'upaya_fisik' => 'nullable|array',
            'upaya_fisik.*' => 'string',
            'hubunganjabatan_dengandata' => 'nullable|array',
            'hubunganjabatan_dengandata.*' => 'string',
            'hubunganjabatan_denganorang' => 'nullable|array',
            'hubunganjabatan_denganorang.*' => 'string',
            'hubunganjabatan_denganbenda' => 'nullable|array',
            'hubunganjabatan_denganbenda.*' => 'string',
            'jenjang_minimal' => 'required|in:SMA,SMK,D3,D4,S1,S2,S3',
            'jurusan' => 'required|string|max:200',
            'pelatihan_fungsional' => 'nullable|string|max:150',
            'pelatihan_teknik' => 'nullable|string|max:150',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan,keduanya',
            'umur_pertahun' => 'required|integer',
            'tinggibadan_percm' => 'required|integer',
            'beratbadan_perkg' => 'required|integer',
            'posturbadan' => 'required|string|max:50',
            'penampilan' => 'required|string|max:100',
        ]);

        // Pengecekan jika id_jabatan sudah ada
        $exists = SyaratJabatan::where('id_jabatan', $validated['id_jabatan'])->exists();
        if ($exists) {
            return redirect()->back()->withErrors(['id_jabatan' => 'ID Jabatan sudah digunakan.'])->withInput();
        }

        SyaratJabatan::create([
            'id_jabatan' => $validated['id_jabatan'],
            'kode_jabatan' => $validated['kode_jabatan'],
            'nama_jabatan' => $validated['nama_jabatan'],
            'pengetahuan_kerja' => $validated['pengetahuan_kerja'],
            'keterampilan_kerja' => $validated['keterampilan_kerja'],
            'pengalaman_kerja' => $validated['pengalaman_kerja'],
            'bakat_kerja' => json_encode($validated['bakat_kerja']), // Menyimpan sebagai JSON
            'tempramen_kerja' => json_encode($validated['tempramen_kerja']),
            'minat_kerja' => json_encode($validated['minat_kerja']),
            'upaya_fisik' => json_encode($validated['upaya_fisik']),
            'hubunganjabatan_dengandata' => json_encode($validated['hubunganjabatan_dengandata']),
            'hubunganjabatan_denganorang' => json_encode($validated['hubunganjabatan_denganorang']),
            'hubunganjabatan_denganbenda' => json_encode($validated['hubunganjabatan_denganbenda']),
            'jenjang_minimal' => $validated['jenjang_minimal'],
            'jurusan' => $validated['jurusan'],
            'pelatihan_fungsional' => $validated['pelatihan_fungsional'],
            'pelatihan_teknik' => $validated['pelatihan_teknik'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'umur_pertahun' => $validated['umur_pertahun'],
            'tinggibadan_percm' => $validated['tinggibadan_percm'],
            'beratbadan_perkg' => $validated['beratbadan_perkg'],
            'posturbadan' => $validated['posturbadan'],
            'penampilan' => $validated['penampilan'],
        ]);

        return redirect()->route('syaratjabatan.index')->with('success', 'Syarat Jabatan created successfully.');
    }

    public function show(SyaratJabatan $syaratjabatan)
    {
        return view('syaratjabatan.show', compact('syaratjabatan'));
    }

    public function edit(SyaratJabatan $syaratjabatan)
    {
        // Mendapatkan semua jabatan yang belum digunakan, kecuali yang sudah ada pada $syaratjabatan
        $jabatans = Jabatan::whereNotIn('id_jabatan', SyaratJabatan::where('id_syaratjabatan', '<>', $syaratjabatan->id_syaratjabatan)->pluck('id_jabatan'))->get();
        return view('syaratjabatan.edit', compact('syaratjabatan', 'jabatans'));
    }

    public function update(Request $request, SyaratJabatan $syaratjabatan)
{
    $validated = $request->validate([
        'id_jabatan' => 'required|integer|exists:jabatan,id_jabatan',
        'kode_jabatan' => 'required|string|max:10',
        'nama_jabatan' => 'required|string|max:100',
        'pengetahuan_kerja' => 'required|string|max:100',
        'keterampilan_kerja' => 'required|string|max:100',
        'pengalaman_kerja' => 'required|string|max:200',
        'bakat_kerja' => 'nullable|array',
        'bakat_kerja.*' => 'string',
        'tempramen_kerja' => 'nullable|array',
        'tempramen_kerja.*' => 'string',
        'minat_kerja' => 'nullable|array',
        'minat_kerja.*' => 'string',
        'upaya_fisik' => 'nullable|array',
        'upaya_fisik.*' => 'string',
        'hubunganjabatan_dengandata' => 'nullable|array',
        'hubunganjabatan_dengandata.*' => 'string',
        'hubunganjabatan_denganorang' => 'nullable|array',
        'hubunganjabatan_denganorang.*' => 'string',
        'hubunganjabatan_denganbenda' => 'nullable|array',
        'hubunganjabatan_denganbenda.*' => 'string',
        'jenjang_minimal' => 'required|in:SMA,SMK,D3,D4,S1,S2,S3',
        'jurusan' => 'required|string|max:200',
        'pelatihan_fungsional' => 'nullable|string|max:150',
        'pelatihan_teknik' => 'nullable|string|max:150',
        'jenis_kelamin' => 'required|in:laki-laki,perempuan,keduanya',
        'umur_pertahun' => 'required|integer',
        'tinggibadan_percm' => 'required|integer',
        'beratbadan_perkg' => 'required|integer',
        'posturbadan' => 'required|string|max:50',
        'penampilan' => 'required|string|max:100',
    ]);

    // Cek apakah id_jabatan yang diupdate sudah ada di baris lain
    $exists = SyaratJabatan::where('id_jabatan', $validated['id_jabatan'])
                ->where('id_syaratjabatan', '<>', $syaratjabatan->id_syaratjabatan)
                ->exists();

    if ($exists) {
        return redirect()->back()->withErrors(['id_jabatan' => 'ID Jabatan sudah digunakan.'])->withInput();
    }

    // Update data SyaratJabatan dengan field yang diperbolehkan diubah
    $syaratjabatan->update([
        'id_jabatan' => $validated['id_jabatan'],
        'kode_jabatan' => $validated['kode_jabatan'],
        'nama_jabatan' => $validated['nama_jabatan'],
        'pengetahuan_kerja' => $validated['pengetahuan_kerja'],
        'keterampilan_kerja' => $validated['keterampilan_kerja'],
        'pengalaman_kerja' => $validated['pengalaman_kerja'],
        'bakat_kerja' => $validated['bakat_kerja'] ? json_encode($validated['bakat_kerja']) : null,
        'tempramen_kerja' => $validated['tempramen_kerja'] ? json_encode($validated['tempramen_kerja']) : null,
        'minat_kerja' => $validated['minat_kerja'] ? json_encode($validated['minat_kerja']) : null,
        'upaya_fisik' => $validated['upaya_fisik'] ? json_encode($validated['upaya_fisik']) : null,
        'hubunganjabatan_dengandata' => $validated['hubunganjabatan_dengandata'] ? json_encode($validated['hubunganjabatan_dengandata']) : null,
        'hubunganjabatan_denganorang' => $validated['hubunganjabatan_denganorang'] ? json_encode($validated['hubunganjabatan_denganorang']) : null,
        'hubunganjabatan_denganbenda' => $validated['hubunganjabatan_denganbenda'] ? json_encode($validated['hubunganjabatan_denganbenda']) : null,
        'jenjang_minimal' => $validated['jenjang_minimal'],
        'jurusan' => $validated['jurusan'],
        'pelatihan_fungsional' => $validated['pelatihan_fungsional'],
        'pelatihan_teknik' => $validated['pelatihan_teknik'],
        'jenis_kelamin' => $validated['jenis_kelamin'],
        'umur_pertahun' => $validated['umur_pertahun'],
        'tinggibadan_percm' => $validated['tinggibadan_percm'],
        'beratbadan_perkg' => $validated['beratbadan_perkg'],
        'posturbadan' => $validated['posturbadan'],
        'penampilan' => $validated['penampilan'],
    ]);

    return redirect()->route('syaratjabatan.index')->with('success', 'Syarat Jabatan updated successfully.');
}



    public function destroy(SyaratJabatan $syaratjabatan)
    {
        $syaratjabatan->delete();
        return redirect()->route('syaratjabatan.index')->with('success', 'Syarat Jabatan deleted successfully.');
    }
}