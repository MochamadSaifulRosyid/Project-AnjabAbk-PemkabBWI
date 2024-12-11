<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hanya tambahkan kolom baru
            $table->dateTime('access_start_datetime')->nullable();
            $table->dateTime('access_end_datetime')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom baru jika rollback
            $table->dropColumn(['access_start_datetime', 'access_end_datetime']);
        });
    }
};