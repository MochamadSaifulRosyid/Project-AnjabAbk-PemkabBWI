<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanTable extends Migration
{
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id('id_jabatan');
            $table->string('kode_jabatan', 10)->unique(); // Ubah ke string dengan panjang yang sesuai
            $table->enum('jenis_jabatan', ['struktural', 'fungsional', 'pelaksana']);
            $table->string('nama_jabatan', 100);
            $table->string('unit_kerja', 100);
            $table->enum('status_jabatan', ['aktif', 'nonaktif']);
            $table->unsignedBigInteger('dibawah_jabatan')->nullable(); // Menambahkan kolom dibawah_jabatan dan mengatur agar null

            // Menambahkan foreign key constraint jika diperlukan
            $table->foreign('dibawah_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
}