<?php

namespace App\Http\Controllers;

use App\Models\SyaratJabatan;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SyaratJabatanController extends Controller
{
    public function index()
    {
        // Tampilkan syarat jabatan yang terkait dengan jabatan milik user yang sedang login
        $userId = Auth::id();
        $jabatans = Jabatan::where('user_id', $userId)->get();
        $syaratJabatan = SyaratJabatan::whereIn('id_jabatan', $jabatans->pluck('id_jabatan'))->with('jabatan')->get();
        
        return view('Admin_Unor.ANJAB.syaratjabatan.index', compact('jabatans', 'syaratJabatan'));
    }

    public function create()
    {
        // Mendapatkan semua jabatan yang belum digunakan oleh syarat jabatan milik user yang sedang login
        $userId = Auth::id();
        $jabatans = Jabatan::where('user_id', $userId)
                           ->whereNotIn('id_jabatan', SyaratJabatan::pluck('id_jabatan'))
                           ->get();

        return view('Admin_Unor.ANJAB.syaratjabatan.create', compact('jabatans'));
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
            'bakat_kerja' => $request->input('bakat_kerja') ? json_encode($request->input('bakat_kerja')) : null,
            'tempramen_kerja' => $request->input('tempramen_kerja') ? json_encode($request->input('tempramen_kerja')) : null,
            'minat_kerja' => $request->input('minat_kerja') ? json_encode($request->input('minat_kerja')) : null,
            'upaya_fisik' => $request->input('upaya_fisik') ? json_encode($request->input('upaya_fisik')) : null,
            'hubunganjabatan_dengandata' => $request->input('hubunganjabatan_dengandata') ? json_encode($request->input('hubunganjabatan_dengandata')) : null,
            'hubunganjabatan_denganorang' => $request->input('hubunganjabatan_denganorang') ? json_encode($request->input('hubunganjabatan_denganorang')) : null,
            'hubunganjabatan_denganbenda' => $request->input('hubunganjabatan_denganbenda') ? json_encode($request->input('hubunganjabatan_denganbenda')) : null,
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
        return view('Admin_Unor.ANJAB.syaratjabatan.show', compact('syaratjabatan'));
    }

    public function edit(SyaratJabatan $syaratjabatan)
    {
        return view('Admin_Unor.ANJAB.syaratjabatan.edit', compact('syaratjabatan'));
    }

    public function update(Request $request, SyaratJabatan $syaratjabatan)
    {
        $validated = $request->validate([
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

        $syaratjabatan->update([
            'pengetahuan_kerja' => $validated['pengetahuan_kerja'],
            'keterampilan_kerja' => $validated['keterampilan_kerja'],
            'pengalaman_kerja' => $validated['pengalaman_kerja'],
            'bakat_kerja' => $request->has('bakat_kerja') ? json_encode($request->input('bakat_kerja')) : $syaratjabatan->bakat_kerja,
            'tempramen_kerja' => $request->has('tempramen_kerja') ? json_encode($request->input('tempramen_kerja')) : $syaratjabatan->tempramen_kerja,
            'minat_kerja' => $request->has('minat_kerja') ? json_encode($request->input('minat_kerja')) : $syaratjabatan->minat_kerja,
            'upaya_fisik' => $request->has('upaya_fisik') ? json_encode($request->input('upaya_fisik')) : $syaratjabatan->upaya_fisik,
            'hubunganjabatan_dengandata' => $request->has('hubunganjabatan_dengandata') ? json_encode($request->input('hubunganjabatan_dengandata')) : $syaratjabatan->hubunganjabatan_dengandata,
            'hubunganjabatan_denganorang' => $request->has('hubunganjabatan_denganorang') ? json_encode($request->input('hubunganjabatan_denganorang')) : $syaratjabatan->hubunganjabatan_denganorang,
            'hubunganjabatan_denganbenda' => $request->has('hubunganjabatan_denganbenda') ? json_encode($request->input('hubunganjabatan_denganbenda')) : $syaratjabatan->hubunganjabatan_denganbenda,
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