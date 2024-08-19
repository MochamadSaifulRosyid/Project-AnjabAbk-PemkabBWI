<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisisJabatanTable extends Migration
{
    public function up()
    {
        Schema::create('analisisjabatan', function (Blueprint $table) {
            $table->id('id_anjab'); // Auto-incrementing ID
            $table->unsignedBigInteger('id_jabatan'); // Foreign key to jabatan
            $table->string('kode_jabatan', 10)->unique();
            $table->string('nama_jabatan', 100);// Foreign key should match the type in `jabatan`
            $table->string('ikhtisar_jabatan');
            $table->string('objek_kerja');
            $table->string('uraian_tugas');
            $table->string('langkah_kerja');
            $table->string('hasil_kerja');
            $table->string('satuan');
            $table->string('waktu_permenit'); // Changed to integer
            $table->string('jumlah'); // Changed to integer
            $table->string('tanggung_jawab');
            $table->string('wewenang');
            $table->string('perangkat_kerja');
            $table->string('bahan_kerja');
            $table->string('hubungandenganjabatan');
            $table->string('perihal');
            $table->string('unit_kerja');
            $table->string('bahaya_fisikataumental');
            $table->string('penyebab');
            $table->string('tempat_kerja');
            $table->string('suhu');
            $table->string('udara');
            $table->string('keadaan_ruangan');
            $table->string('letak');
            $table->string('penerangan');
            $table->string('suara');
            $table->string('keadaan_tempatkerja');
            $table->string('getaran');
            $table->string('rekomendasi');
            $table->string('prestasi')->nullable();
            $table->string('butir_informasilainnya');
            $table->integer('kelas_jabatan'); // Integer

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('analisisjabatan');
    }
}