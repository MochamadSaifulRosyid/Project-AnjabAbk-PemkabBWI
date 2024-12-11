<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEselonToJabatanTable extends Migration
{
    public function up()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            $table->enum('eselon', [
                'Eselon 1A / Jabatan Pimpinan Tinggi Utama',
                'Eselon 1B / Jabatan Pimpinan Tinggi Madya',
                'Eselon 1A - 1B / Jabatan Pimpinan Tinggi Madya',
                'Eselon 2A / Jabatan Pimpinan Tinggi Pratama',
                'Eselon 2B / Jabatan Pimpinan Tinggi Pratama',
                'Eselon 3A / Jabatan Administrator',
                'Eselon 3B / Jabatan Administrator',
                'Eselon 4A / Jabatan Pengawas',
                'Eselon 4B / Jabatan Pengawas',
                'Jabatan Pelaksana',
                'Eselon 4A / Jabatan Pengawas (F)',
                'Kelompok',
                'Sub Kelompok'
            ])->nullable(); // Tambahkan nullable untuk kolom ini
        });
    }

    public function down()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            $table->dropColumn('eselon');
        });
    }
}