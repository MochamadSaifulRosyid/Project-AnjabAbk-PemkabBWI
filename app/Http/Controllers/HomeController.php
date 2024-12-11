<?php

namespace App\Http\Controllers;

use App\Models\Content; // Pastikan model Content sudah ada dan sesuai
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data konten dari database
        $contents = Content::orderBy('created_at', 'desc')->get();

        // Kirimkan data ke view home
        return view('Admin.home', compact('contents'));
    }
}
