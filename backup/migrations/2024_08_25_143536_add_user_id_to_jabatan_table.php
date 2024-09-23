<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToJabatanTable extends Migration
{
    public function up()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('status_jabatan'); // Menambahkan kolom user_id

            // Menambahkan foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('jabatan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}