<?php

use App\Http\Controllers\AnalisisJabatanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SyaratJabatanController;
use App\Http\Controllers\PetaJabatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

// Rute untuk login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [JabatanController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::middleware(['auth', 'role:Super Admin'])->group(function () {
    Route::get('/konten', function () {
        return view('Admin.konten.index');
    });

    Route::resource('user', UserController::class);
    Route::resource('manajemenuser', ManajemenUserController::class);
    Route::get('/manajemenuser', [ManajemenUserController::class, 'index'])->name('manajemenuser.index');
    Route::get('/manajemenuser/create', [ManajemenUserController::class, 'create'])->name('manajemenuser.create');

    Route::get('/unor/{kd_unor}/users', [ManajemenUserController::class, 'showUsersByUnor'])->name('unor.users');
    Route::get('/unor/{kd_unor}/jabatans', [ManajemenUserController::class, 'getJabatansByUnor']);
    Route::get('/api/users', [ManajemenUserController::class, 'getUnitsByRole']);
    Route::get('/manajemenaksesuser', function () {
        return view('Admin.Manajemen_Data.manajemenaksesuser');
    });

    Route::get('/users/{id}', [UserController::class, 'getUserById']);
    Route::get('/units', [UserController::class, 'getUnitsByRole']);

    // Rute untuk memperbarui akses pengguna
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    // Rute untuk mengaktifkan akses kembali
    Route::put('/users/{user}/activate', [UserController::class, 'activate'])->name('users.activate');

    Route::put('/users/{user}/access', [UserController::class, 'updateAccess'])->name('user.updateAccess');

    Route::get('/unor/{kdUnor}/check-user', [ManajemenUserController::class, 'checkUser']);

    Route::get('/konten', [ContentController::class, 'index'])->name('admin.konten.index');

        // Menyimpan konten baru
        Route::post('/konten', [ContentController::class, 'store'])->name('admin.konten.store');

        // Menghapus konten
        Route::delete('/konten/{id}', [ContentController::class, 'destroy'])->name('admin.konten.destroy');
});

Route::middleware(['auth', 'role:Admin Skpd'])->group(function () {
    Route::resource('analisisjabatan', AnalisisJabatanController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('syaratjabatan', SyaratJabatanController::class);
    Route::get('/datapegawai', function () {
        return view('Admin_Unor.ABK.pegawai.index');
    });
    Route::get('/dataabk', function() {
        return view('Admin_Unor.ABK.analisisbebankerja.index');
    });

    Route::resource('/petajabatan', PetaJabatanController::class);
    Route::get('/hasilanjab', function() {
        return view('Admin_Unor.LAPORAN.hasilanjab.index');
    });
    Route::get('/hasilabk', function() {
        return view('Admin_Unor.LAPORAN.hasilabk.index');
    });
    Route::get('/peta-jabatan', [PetaJabatanController::class, 'index'])->name('Admin_Unor.LAPORAN.petajabatan.index');
});

Route::get('/', [HomeController::class, 'index']);
// routes/web.php
Route::get('konten/{id}', [ContentController::class, 'show'])->name('Admin.konten.show');


Route::get('/Admin/layanan', function () {
    return view('Admin.layanan');
});
Route::get('/Admin/contact', function () {
    return view('Admin.contact');
});

// Menampilkan form kontak
Route::get('/Admin/contact', [ContactFormController::class, 'showForm'])->name('contact.form');

// Menangani pengiriman form kontak
Route::post('/Admin/contact', [ContactFormController::class, 'sendMail'])->name('contact.send');
