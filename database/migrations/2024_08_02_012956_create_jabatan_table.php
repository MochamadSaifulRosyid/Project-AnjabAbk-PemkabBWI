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
            $table->integer('kode_jabatan');
            $table->enum('jenis_jabatan', ['setruktural', 'fungsional', 'pelaksana']);
            $table->string('nama_jabatan', 100);
            $table->string('unit_kerja', 100);
            $table->enum('status_jabatan', ['aktif', 'nonaktif']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
}