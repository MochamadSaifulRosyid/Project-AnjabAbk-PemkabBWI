<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKondisilingkungankerjaTable extends Migration
{
    public function up()
    {
        Schema::create('kondisilingkungankerja', function (Blueprint $table) {
            $table->id('id_korelasilingkungankerja');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('kode_kondisilingkungankerja');
            $table->string('jabatan', 100);
            $table->string('tempat_kerja', 100);
            $table->string('suhu', 100);
            $table->string('udara', 100);
            $table->string('keadaan_ruangan', 100);
            $table->string('letak', 100);
            $table->string('penerangan', 100);
            $table->string('suara', 100);
            $table->string('keadaan_tempatkerja', 100);
            $table->string('getaran', 100);

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kondisilingkungankerja');
    }
}