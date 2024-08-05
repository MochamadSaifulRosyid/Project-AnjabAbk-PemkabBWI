<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorelasijabatanTable extends Migration
{
    public function up()
    {
        Schema::create('korelasijabatan', function (Blueprint $table) {
            $table->id('id_korelasijabatan');
            $table->unsignedBigInteger('id_jabatan');
            $table->integer('kode_korelasijabatan');
            $table->string('jabatan', 100);
            $table->string('hubungandenganjabatan', 100);
            $table->string('perihal', 100);
            $table->string('unit_kerja', 100);

            // Foreign key constraint
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('korelasijabatan');
    }
}