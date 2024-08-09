<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SyaratJabatanController;

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

Route::get('/', function () {
    return view('beranda');
});
Route::resource('jabatan', JabatanController::class);

Route::resource('syaratjabatan', SyaratJabatanController::class);
Route::put('/syaratjabatan/{syaratjabatan}', [SyaratJabatanController::class, 'update'])->name('syaratjabatan.update');