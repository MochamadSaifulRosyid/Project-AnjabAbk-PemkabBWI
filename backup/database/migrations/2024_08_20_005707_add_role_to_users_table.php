<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom 'role'
            $table->enum('role', ['Super Admin', 'Admin Skpd', 'Admin Unor']);

            // Menambahkan kolom 'KD_UNOR' jika belum ada
            if (!Schema::hasColumn('users', 'KD_UNOR')) {
                $table->string('KD_UNOR', 10)->after('user_id');
            }

            // Menambahkan foreign key constraint jika kolom 'KD_UNOR' ada
            if (Schema::hasColumn('users', 'KD_UNOR')) {
                $table->foreign('KD_UNOR')
                    ->references('KD_UNOR')
                    ->on('unor')
                    ->onDelete('cascade');
            }

            // Menambahkan kolom 'NM_UNOR' jika belum ada dengan nilai default
            if (!Schema::hasColumn('users', 'NM_UNOR')) {
                $table->string('NM_UNOR')->default('')->after('password');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Cek jika foreign key constraint ada sebelum mencoba menghapusnya
            if (Schema::hasColumn('users', 'KD_UNOR')) {
                $foreignKeys = $table->getConnection()->getDoctrineSchemaManager()->listTableForeignKeys('users');
                foreach ($foreignKeys as $foreignKey) {
                    if (in_array('KD_UNOR', $foreignKey->getColumns())) {
                        $table->dropForeign(['KD_UNOR']);
                    }
                }
            }

            // Menghapus kolom-kolom
            $table->dropColumn(['role', 'KD_UNOR', 'NM_UNOR']);
        });
    }
}