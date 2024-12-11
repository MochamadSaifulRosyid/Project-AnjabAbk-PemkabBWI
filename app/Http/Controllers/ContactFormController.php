<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('Admin.contact'); // Menampilkan form kontak
    }

    public function sendMail(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            // Kirim email menggunakan ContactMail
            Mail::to('mochamadsaifulr15@gmail.com')->send(new ContactMail($validated));

            // Jika email berhasil dikirim, kembalikan pesan sukses
            return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            // Jika gagal, tampilkan pesan error
            return redirect()->back()->with('error', 'Maaf, email belum terkirim. Silakan coba lagi.');
        }
    }
}
