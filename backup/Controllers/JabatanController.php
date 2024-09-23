<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JabatanController extends Controller
{
    // Menampilkan daftar jabatan
    public function index()
{
    // Tampilkan jabatan yang terkait dengan user yang sedang login
    $jabatans = Jabatan::where('user_id', Auth::id())->get();
    return view('Admin_Unor.ANJAB.jabatan.index', compact('jabatans')); // Perbaiki dari 'jabatan' menjadi 'jabatans'
}

    // Menampilkan form untuk membuat jabatan baru
    public function create()
    {
        return view('Admin_Unor.ANJAB.jabatan.create');
    }

    // Menyimpan jabatan baru ke dalam database
    public function store(Request $request)
{
    $userId = Auth::id();

    // Ambil semua jabatan milik user yang sedang login
    $existingJabatan = Jabatan::where('user_id', $userId)->get();

    // Cek apakah Eselon 1A, Eselon 1B, atau Eselon 1A - 1B sudah ada
    $hasEselon1A = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 1A / Jabatan Pimpinan Tinggi Utama';
    });

    $hasEselon1B = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 1B / Jabatan Pimpinan Tinggi Madya';
    });

    $hasEselon1A1B = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya';
    });

    $hasEselon2A = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 2A / Jabatan Pimpinan Tinggi Pratama';
    });

    $hasEselon2B = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 2B / Jabatan Pimpinan Tinggi Pratama';
    });

    $hasEselon3A = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 3A / Jabatan Administrator';
    });

    $hasEselon3B = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 3B / Jabatan Administrator';
    });

    $hasEselon4A = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 4A / Jabatan Pengawas';
    });

    $hasEselon4B = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 4B / Jabatan Pengawas';
    });

    $hasEselonJP = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Jabatan Pelaksana';
    });

    $hasEselon4AF = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Eselon 4A / Jabatan Pengawas (F)';
    });

    $hasEselonK = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Kelompok';
    });

    $hasEselonSK = $existingJabatan->contains(function ($jabatan) {
        return $jabatan->eselon === 'Sub Kelompok';
    });

    // Aturan validasi dasar
    $rules = [
        'jenis_jabatan' => 'required|in:struktural,fungsional,pelaksana',
        'nama_jabatan' => 'required|string|max:100',
        'unit_kerja' => 'required|string|max:100',
        'eselon' => 'required|in:Eselon 1A / Jabatan Pimpinan Tinggi Utama,Eselon 1B / Jabatan Pimpinan Tinggi Madya,Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya,Eselon 2A / Jabatan Pimpinan Tinggi Pratama,Eselon 2B / Jabatan Pimpinan Tinggi Pratama,Eselon 3A / Jabatan Administrator,Eselon 3B / Jabatan Administrator,Eselon 4A / Jabatan Pengawas,Eselon 4B / Jabatan Pengawas,Jabatan Pelaksana,Eselon 4A / Jabatan Pengawas (F),Kelompok,Sub Kelompok',
        'status_jabatan' => 'required|in:aktif,nonaktif',
    ];

    // Aturan khusus untuk validasi pesan kesalahan
    $customMessages = [
        'eselon.in' => 'Eselon yang dipilih tidak valid. Pastikan Anda mengikuti urutan yang benar.',
    ];

    // Validasi berdasarkan kondisi apakah Eselon 1A sudah ada atau belum
    if (!$hasEselon1A) {
        if ($request->input('eselon') === 'Eselon 1A / Jabatan Pimpinan Tinggi Utama') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 1A / Jabatan Pimpinan Tinggi Utama',
            ]), $customMessages);

            // Simpan data dan beri tahu pengguna untuk menambahkan Eselon 1B
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 1A berhasil ditambahkan. Sekarang, tambahkan jabatan dengan Eselon 1B.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 1A wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon1B) {
        if ($request->input('eselon') === 'Eselon 1B / Jabatan Pimpinan Tinggi Madya') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 1B / Jabatan Pimpinan Tinggi Madya',
            ]), $customMessages);

            // Simpan data dan beri tahu pengguna untuk menambahkan Eselon 1A - 1B
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 1B berhasil ditambahkan. Sekarang, tambahkan jabatan dengan Eselon 1A - 1B.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 1B wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon1A1B) {
        if ($request->input('eselon') === 'Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 1A - 1B berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 1A - 1B wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon2A) {
        if ($request->input('eselon') === 'Eselon 2A / Jabatan Pimpinan Tinggi Pratama') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 2A / Jabatan Pimpinan Tinggi Pratama',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 2A berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 2A wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon2B) {
        if ($request->input('eselon') === 'Eselon 2B / Jabatan Pimpinan Tinggi Pratama') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 2B / Jabatan Pimpinan Tinggi Pratama',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 2B berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 2B wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon3A) {
        if ($request->input('eselon') === 'Eselon 3A / Jabatan Administrator') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 3A / Jabatan Administrator',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 3A berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 3A wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon3B) {
        if ($request->input('eselon') === 'Eselon 3B / Jabatan Administrator') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 3B / Jabatan Administrator',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 3B berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 3B wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon4A) {
        if ($request->input('eselon') === 'Eselon 4A / Jabatan Pengawas') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 4A / Jabatan Pengawas',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 4A berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 4A wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon4B) {
        if ($request->input('eselon') === 'Eselon 4B / Jabatan Pengawas') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 4B / Jabatan Pengawas',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Eselon 4B berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Eselon 4B wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselonJP) {
        if ($request->input('eselon') === 'Jabatan Pelaksana') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Jabatan Pelaksana',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Jabatan Pelaksana berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Jabatan Pelaksana wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselon4AF) {
        if ($request->input('eselon') === 'Eselon 4A / Jabatan Pengawas (F)') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Eselon 4A / Jabatan Pengawas (F)',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Jabatan Pengawas (F) berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Jabatan Pengawas (F) wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } elseif (!$hasEselonK) {
        if ($request->input('eselon') === 'Kelompok') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Kelompok',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Kelompok berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Kelompok wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    } else {
        if ($request->input('eselon') === 'Sub Kelompok') {
            $request->validate(array_merge($rules, [
                'eselon' => 'required|in:Sub Kelompok',
            ]), $customMessages);
            
            // Simpan data
            $this->createJabatan($request);
            return redirect()->route('jabatan.index')->with('success', 'Sub Kelompok berhasil ditambahkan.')->withInput();
        } else {
            return redirect()->back()->withErrors(['eselon' => 'Sub Kelompok wajib didefinisikan terlebih dahulu.'])->withInput();
        }
    }
}

// Method untuk membuat jabatan baru
private function createJabatan(Request $request)
{
    $lastJabatan = Jabatan::latest('id_jabatan')->first();
    $lastKode = $lastJabatan ? $lastJabatan->kode_jabatan : 'J1-000';
    
    $lastNumber = (int) substr($lastKode, 3);
    $nextNumber = $lastNumber + 1;
    $kodeJabatan = 'J1-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

    Jabatan::create(array_merge($request->all(), [
        'kode_jabatan' => $kodeJabatan,
        'user_id' => Auth::id()
    ]));
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
            'jenis_jabatan' => 'required|in:struktural,fungsional,pelaksana',
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
    $userId = Auth::id(); // Ambil ID user yang sedang login

    // Menghitung jumlah jabatan berdasarkan jenisnya
    $jumlahJabatanStruktural = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'struktural')->count();
    $jumlahJabatanFungsional = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'fungsional')->count();
    $jumlahJabatanPelaksana = Jabatan::where('user_id', $userId)->where('jenis_jabatan', 'pelaksana')->count();
    $totalPegawai = Jabatan::where('user_id', $userId)->count(); // Total pegawai

    // Mengirimkan variabel ke view
    return view('dashboard', compact('jumlahJabatanStruktural', 'jumlahJabatanFungsional', 'jumlahJabatanPelaksana', 'totalPegawai'));
}

}