<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('kode_tugas');
            $table->string('jabatan', 100);
            $table->string('uraian_tugas', 200);
            $table->string('langkah_kerja', 200);
            $table->string('hasil_kerja', 100);
            $table->enum('satuan', [
                'Dokumen',
                'Peraturan',
                'Standar Oprasional Pelaksana',
                'Informasi',
                'Surat',
                'Memo',
                'Laporan',
                'Data',
                'Berkas',
                'Kegiatan',
                'Daftar',
                'Jabatan'
            ]);
            $table->integer('waktu_permenit');
            $table->integer('jumlah');

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tugas');
    }
}