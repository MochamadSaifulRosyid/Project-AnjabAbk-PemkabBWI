<?php 

use App\Http\Controllers\AnalisisJabatanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SyaratJabatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rute untuk login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');

// Rute untuk logout
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute dashboard (dapat diakses oleh semua yang sudah login)
Route::get('/dashboard', [JabatanController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// Rute khusus untuk "Super Admin"
Route::middleware(['auth', 'role:Super Admin'])->group(function () {
    Route::get('/konten', function () {
        return view('Admin.konten.index');
    });

    Route::resource('user', UserController::class);

    

    Route::resource('manajemenuser', ManajemenUserController::class);
Route::get('/unor/{kd_unor}/users', [ManajemenUserController::class, 'showUsersByUnor'])->name('unor.users');
Route::get('/unor/{kd_unor}/jabatans', [ManajemenUserController::class, 'getJabatansByUnor']);
// Route untuk mendapatkan unit organisasi berdasarkan role
Route::get('/api/users', [UserController::class, 'getUnitsByRole'])->name('units.by.role');


    Route::get('/manajemenaksesuser', function () {
        return view('Admin.Manajemen_Data.manajemenaksesuser');
    });
});


// Rute khusus untuk "Admin Skpd"
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
    Route::get('/petajabatan', function() {
        return view('Admin_Unor.LAPORAN.petajabatan.index');
    });
    Route::get('/hasilanjab', function() {
        return view('Admin_Unor.LAPORAN.hasilanjab.index');
    });
    Route::get('/hasilabk', function() {
        return view('Admin_Unor.LAPORAN.hasilabk.index');
    });
});

// Rute yang dapat diakses oleh semua pengguna
Route::get('/', function () {
    return view('Admin.home');
});

Route::get('/Admin/layanan', function () {
    return view('Admin.layanan');
});

Route::get('/Admin/contact', function () {
    return view('Admin.contact');
});