<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisjabatanTable extends Migration
{
    public function up()
    {
        Schema::create('analisisjabatan', function (Blueprint $table) {
            $table->id('id_anjab');
            $table->unsignedBigInteger('id_jabatan');
            $table->unsignedBigInteger('id_tugas');
            $table->unsignedBigInteger('id_korelasijabatan');
            $table->unsignedBigInteger('id_kondisilingkungankerja');
            $table->string('kode_anjab', 50);
            $table->string('ikhtisar_jabatan', 200);
            $table->string('objek_kerja', 100);
            $table->string('uraian_tugas', 100);
            $table->string('tanggung_jawab', 200);
            $table->string('wewenang', 200);
            $table->string('perangkat_kerja', 100);
            $table->string('bahan_kerja', 100);
            $table->string('korelasi_jabatan', 200);
            $table->string('resiko_bahaya', 200);
            $table->string('kondisi_lingkungankerja', 200);
            $table->string('rekomendasi', 200);
            $table->string('prestasi', 200)->nullable();
            $table->string('butir_informasilainnya', 200);
            $table->enum('kelas_jabatan', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17']);

            // Foreign key constraints
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');
            $table->foreign('id_tugas')->references('id_tugas')->on('tugas')->onDelete('cascade');
            $table->foreign('id_korelasijabatan')->references('id_korelasijabatan')->on('korelasijabatan')->onDelete('cascade');
            $table->foreign('id_kondisilingkungankerja')->references('id_korelasilingkungankerja')->on('kondisilingkungankerja')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('analisisjabatan');
    }
}