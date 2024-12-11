<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenjangToJabatanTable extends Migration
{
    /**
     * Jalankan migration untuk menambahkan kolom jenjang ke tabel jabatan.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            // Menambahkan kolom 'jenjang' dengan tipe enum dan menjadikannya nullable
            $table->enum('jenjang', [
                'Mahir',
                'Terampil',
                'Pelaksana Lanjutan',
                'Pelaksana',
                'Pelaksana Pemula',
                'Ahli Pertama',
                'Ahli Muda',
                'Ahli Madya',
                'Ahli Utama',
                'Tidak Ada'
            ])->nullable();  // Membuat kolom ini nullable (boleh NULL)
        });
    }

    /**
     * Mengembalikan perubahan yang telah dilakukan oleh metode up.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            // Menghapus kolom 'jenjang' jika rollback
            $table->dropColumn('jenjang');
        });
    }
}
