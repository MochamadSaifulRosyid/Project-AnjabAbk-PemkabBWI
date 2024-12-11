<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();  // Kolom primary key auto-increment (id)
            $table->string('title');  // Kolom untuk judul konten
            $table->string('slug')->unique();  // Kolom untuk slug (harus unik)
            $table->text('body');  // Kolom untuk isi konten
            $table->text('excerpt')->nullable();  // Kolom untuk ringkasan (boleh kosong)
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');  // Kolom status konten
            $table->timestamp('published_at')->nullable();  // Kolom waktu publikasi
            $table->string('image')->nullable();  // Kolom untuk path gambar konten
            $table->timestamps();  // Kolom created_at dan updated_at
        });

    }

    /**
     * Balikkan migration ini jika diperlukan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
