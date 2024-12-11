<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JabatanController extends Controller
{
    // Menampilkan daftar jabatan
    public function index()
        {
            // Tampilkan jabatan yang terkait dengan user yang sedang login
            $jabatans = Jabatan::where('user_id', Auth::id())->get();

            // Ambil jabatan yang bisa dipilih sebagai 'dibawah_jabatan'
            $parentJabatans = Jabatan::where('user_id', Auth::id())->get();

            return view('Admin_Unor.ANJAB.jabatan.index', compact('jabatans', 'parentJabatans'));
        }


    // Menampilkan form untuk membuat jabatan baru
    public function create()
    {
        // Ambil jabatan yang bisa dipilih sebagai 'dibawah_jabatan'
        $parentJabatans = Jabatan::where('user_id', Auth::id())->get();
        return view('Admin_Unor.ANJAB.jabatan.create', compact('parentJabatans'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();

        // Validasi data input
        $validated = $request->validate([
            'jenis_jabatan' => 'required|string|max:100',
            'jenjang' => 'nullable|string|max:100', // Buat nullable karena hanya wajib untuk fungsional
            'nama_jabatan' => 'required|string|max:100',
            'unit_kerja' => 'required|string|max:100',
            'eselon' => 'nullable|string|max:100',
            'status_jabatan' => 'required|string|max:100',
            'dibawah_jabatan' => 'nullable|exists:jabatan,id_jabatan', // Validasi kolom dibawah_jabatan
        ]);

        // Tambahkan logika untuk memastikan validasi 'jenjang' hanya untuk fungsional
        if ($request->jenis_jabatan === 'fungsional' && !$request->jenjang) {
            return redirect()->back()
                ->withErrors(['jenjang' => 'Field jenjang wajib diisi untuk jabatan fungsional.'])
                ->withInput();
        }

        // Logika otomatis untuk mengisi kode_jabatan
        $lastJabatan = Jabatan::latest('id_jabatan')->first();
        $lastKode = $lastJabatan ? $lastJabatan->kode_jabatan : 'J1-000';

        $lastNumber = (int) substr($lastKode, 3);
        $nextNumber = $lastNumber + 1;
        $kodeJabatan = 'J1-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        // Simpan data baru ke tabel jabatan
        Jabatan::create([
            'jenis_jabatan' => $validated['jenis_jabatan'],
            'jenjang' => $validated['jenjang'], // Bisa null jika bukan fungsional
            'kode_jabatan' => $kodeJabatan,
            'nama_jabatan' => $validated['nama_jabatan'],
            'unit_kerja' => $validated['unit_kerja'],
            'eselon' => $validated['eselon'],
            'status_jabatan' => $validated['status_jabatan'],
            'user_id' => $userId,
            'dibawah_jabatan' => $validated['dibawah_jabatan'], // Menyimpan kolom dibawah_jabatan
        ]);

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Ditambahkan.');

    }


    // Menampilkan detail jabatan
    public function show(Jabatan $jabatan)
    {
        return view('Admin_Unor.ANJAB.jabatan.show', compact('jabatan'));
    }

    public function edit(Jabatan $jabatan)
    {
        // Ambil jabatan yang bisa dipilih sebagai 'dibawah_jabatan'
        $parentJabatans = Jabatan::where('user_id', Auth::id())->get();
        return view('Admin_Unor.ANJAB.jabatan.edit', compact('jabatan', 'parentJabatans'));
    }

    // Memperbarui jabatan yang ada di database
    public function update(Request $request, Jabatan $jabatan)
    {
        $request->validate([
            'dibawah_jabatan' => 'nullable|exists:jabatans,id_jabatan', // Mengizinkan null dan harus ada dalam tabel jabatan
            'jenjang' => 'required',
            'nama_jabatan' => 'required|string|max:255',
            'unit_kerja' => 'required|string|max:255',
            'eselon' => 'nullable|string|max:100',
            'status_jabatan' => 'required',
        ]);

        // Update hanya field yang diizinkan
        $jabatan->update($request->only([
            'jenjang',
            'nama_jabatan',
            'unit_kerja',
            'status_jabatan',
            'dibawah_jabatan', // Menambahkan kolom dibawah_jabatan untuk diupdate
        ]));

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Di Update.');
    }

    // Menghapus jabatan dari database
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Dihapus.');
    }

    public function dashboard()
    {
        $userId = Auth::id(); // Ambil ID user yang sedang login

        // Menghitung jumlah jabatan berdasarkan jenisnya untuk Admin SKPD
        $jumlahJabatanStruktural = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'struktural')->count();
        $jumlahJabatanFungsional = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'fungsional')->count();
        $jumlahJabatanPelaksana = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'pelaksana')->count();
        $totalPegawai = Jabatan::where('user_id', $userId)->count(); // Total pegawai

        // Mengambil data untuk Super Admin, urutkan berdasarkan waktu login terakhir (akses)
        $adminSkpdUsers = [];
        if (Auth::user()->role === 'Super Admin') {
            // Jika Super Admin, ambil data semua user dengan role 'Admin Skpd' dan urutkan berdasarkan waktu login terakhir
            $adminSkpdUsers = User::where('role', 'Admin Skpd')
                ->orderBy('access_start_datetime', 'desc') // Urutkan berdasarkan waktu login terakhir
                ->get();
        }

        // Kirimkan semua data ke view
        return view('dashboard', compact(
            'jumlahJabatanStruktural',
            'jumlahJabatanFungsional',
            'jumlahJabatanPelaksana',
            'totalPegawai',
            'adminSkpdUsers'
        ));
    }

}
