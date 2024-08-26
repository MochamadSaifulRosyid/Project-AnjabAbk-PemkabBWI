<?php

use App\Http\Controllers\AnalisisJabatanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SyaratJabatanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//beranda
Route::get('/', function () {
    return view('Admin.home');
});

Route::get('/Admin/layanan', function () {
    return view('Admin.layanan');
});

Route::get('/Admin/contact', function () {
    return view('Admin.contact');
});

Route::get('/dashboard', [JabatanController::class, 'dashboard'])->name('dashboard');




//LAPORAN
Route::get('/hasilanjab', function() {
    return view('Admin_Unor.LAPORAN.hasilanjab.index');
});
Route::get('/hasilabk', function() {
    return view('Admin_Unor.LAPORAN.hasilabk.index');
});
Route::get('/petajabatan', function() {
    return view('Admin_Unor.LAPORAN.petajabatan.index');
});


//ABK
Route::get('/dataabk', function() {
    return view('Admin_Unor.ABK.analisisbebankerja.index');
});
Route::get('/datapegawai', function() {
    return view('Admin_Unor.ABK.pegawai.index');
});

//ANJAB => crud
Route::resource('jabatan', JabatanController::class);
Route::resource('syaratjabatan', SyaratJabatanController::class);
Route::resource('analisisjabatan', AnalisisJabatanController::class);
Route::resource('user', UserController::class);