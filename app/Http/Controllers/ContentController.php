<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Log; // <-- Tambahkan baris ini
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    // Method untuk menampilkan daftar konten
    public function index()
    {
        // Ambil semua konten dari database
        $contents = Content::all(); // Ini akan mengambil semua data konten

        // Kirim variabel $contents ke view
        return view('Admin.konten.index', compact('contents')); // pastikan ini sesuai dengan path view
    }

    public function store(Request $request)
        {
            // Validasi data
            $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'required|string|unique:contents,slug|max:255',
                'body' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Simpan gambar jika ada
            $imageName = null;
            if ($request->hasFile('image')) {
                $imageName = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/images', $imageName);
            }

            // Debug: tampilkan data yang akan disimpan
            Log::debug('Data Konten yang akan disimpan:', $request->all());

            // Menyimpan data konten ke database
            $content = Content::create([
                'title' => $request->input('title'),
                'slug' => $request->input('slug'),
                'body' => $request->input('body'),
                'excerpt' => $request->input('excerpt', null),
                'status' => $request->input('status', 'draft'),
                'published_at' => $request->input('published_at', null),
                'image' => $imageName,
            ]);

            // Debug: tampilkan konten yang berhasil disimpan
            Log::debug('Konten yang berhasil disimpan:', $content->toArray());

            return redirect()->route('admin.konten.index')->with('success', 'Konten berhasil ditambahkan');
        }

    // Dalam ContentController.php
    public function destroy($id)
    {
        // Temukan konten berdasarkan ID
        $content = Content::findOrFail($id);

        // Hapus gambar jika ada
        if ($content->image) {
            Storage::delete('public/images/' . $content->image); // Hapus gambar dari storage
        }

        // Hapus konten dari database
        $content->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.konten.index')->with('success', 'Konten berhasil dihapus.');
    }
    public function show($id)
    {
        // Mengambil data konten berdasarkan ID
        $konten = Content::findOrFail($id);

        // Mengirimkan data konten ke view
        return view('Admin.konten.show', compact('konten')); // pastikan menggunakan nama 'konten' sesuai dengan view
    }


}

