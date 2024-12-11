<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unor', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing ID
            $table->string('KD_UNOR')->nullable(); // Kode Unor
            $table->string('NM_UNOR')->nullable(); // Nama Unor
            $table->text('AL_UNOR')->nullable(); // Alamat Unor
            $table->string('NIP')->nullable(); // Nomor Induk Pegawai
            $table->integer('Jumlah')->nullable(); // Jumlah Pegawai
            $table->string('SIMPEG_ID')->nullable(); // ID dari Sistem Kepegawaian
            $table->string('KD_UNOR_PNSBWI')->nullable(); // Kode Unor PNS BWI
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unor');
    }
}