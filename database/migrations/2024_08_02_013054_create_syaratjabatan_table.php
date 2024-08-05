<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratjabatanTable extends Migration
{
    public function up()
    {
        Schema::create('syaratjabatan', function (Blueprint $table) {
            $table->id('id_syaratjabatan');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('kode_syaratjabatan');
            $table->string('jabatan', 100)->nullable();
            $table->string('pengetahuan_kerja', 100);
            $table->string('keterampilan_kerja', 100);
            $table->string('pengalaman_kerja', 200);
            $table->string('bakat_kerja', 100); // Change from ENUM to string
            $table->string('tempramen_kerja', 100);
            $table->string('minta_kerja', 100);
            $table->string('upaya_fisik', 100);
            $table->string('hubunganjabatan_dengandata', 100);
            $table->string('hubunganjabatan_denganorang', 100);
            $table->string('hubunganjabatan_denganbenda', 100);
            $table->string('pangkat_ruang', 100);
            $table->string('jenjang_minimal', 100);
            $table->string('jurusan', 200);
            $table->string('pelatihan_fungsional', 150)->nullable();
            $table->string('pelatihan_teknis', 150)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan', 'tidak ingin diketahui']);
            $table->integer('umur_pertahun');
            $table->integer('tinggibadan_percm');
            $table->integer('beratbadan_perkg');
            $table->string('posturbadan', 50);
            $table->string('penampilan', 100);

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('syaratjabatan');
    }
}