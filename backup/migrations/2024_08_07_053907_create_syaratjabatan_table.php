<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratjabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syaratjabatan', function (Blueprint $table) {
            $table->id('id_syaratjabatan'); // Auto-increment ID
            $table->unsignedBigInteger('id_jabatan'); // Foreign key to jabatan
            $table->string('kode_jabatan', 10)->unique();
            $table->string('nama_jabatan', 100);
            $table->string('pengetahuan_kerja', 100);
            $table->string('keterampilan_kerja', 100);
            $table->string('pengalaman_kerja', 200);
            $table->json('bakat_kerja')->nullable();
            $table->json('tempramen_kerja')->nullable(); // Changed to TEXT
            $table->json('minat_kerja')->nullable(); // Changed to TEXT
            $table->json('upaya_fisik')->nullable(); // Changed to TEXT
            $table->json('hubunganjabatan_dengandata')->nullable(); // Changed to TEXT
            $table->json('hubunganjabatan_denganorang')->nullable(); // Changed to TEXT
            $table->json('hubunganjabatan_denganbenda')->nullable(); 
            $table->enum('jenjang_minimal', ['SMA', 'SMK', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->string('jurusan', 200);
            $table->string('pelatihan_fungsional', 150)->nullable();
            $table->string('pelatihan_teknik', 150)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan', 'keduanya']);
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syaratjabatan');
    }
}