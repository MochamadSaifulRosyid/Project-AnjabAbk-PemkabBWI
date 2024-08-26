<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
public function up()
{
Schema::table('users', function (Blueprint $table) {
$table->string('username')->unique()->after('email');
$table->enum('unit_organisasi', [
'Sekretariat Daerah',
'Bagian Pemerintahan',
'Bagian Pemerintahaan Desa',
'Bagian Hukum',
'Bagian Organisasi',
'Bagian Perekonomian',
'Bagian Kesejahteraan Rakyat',
'Bagian Pengadaan Barang dan Jasa',
'Bagian Perencanaan dan Keuangan',
'Bagian Umum',
'Bagian Protokol dan Komunikasi Pimpinan'
])->nullable()->after('password');
});
}

public function down()
{
Schema::table('users', function (Blueprint $table) {
$table->dropColumn('username');
$table->dropColumn('unit_organisasi');
});
}
}