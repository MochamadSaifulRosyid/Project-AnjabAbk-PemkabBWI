<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatajabatanTable extends Migration
{
    public function up()
    {
        Schema::create('biodatajabatan', function (Blueprint $table) {
            $table->id('id_biodatajabatan');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('kode_jabatan');
            $table->enum('jenis_jabatan', ['setruktural', 'fungsional', 'pelaksana']);
            $table->string('jabatan', 100);
            $table->string('jumlahpegawai', 50);

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodatajabatan');
    }
}