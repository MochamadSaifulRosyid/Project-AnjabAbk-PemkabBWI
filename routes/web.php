<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SyaratJabatanController;
use App\Http\Controllers\AnalisisJabatanController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard_v2', function () {
    return view('dashboard_v2');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/layanan', function () {
    return view('layanan');
});

//Form Crud 
Route::resource('jabatan', JabatanController::class);
Route::resource('syaratjabatan', SyaratJabatanController::class);
Route::resource('analisisjabatan', AnalisisJabatanController::class);