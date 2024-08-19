<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $primaryKey = 'id_jabatan';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'kode_jabatan',
        'jenis_jabatan',
        'nama_jabatan',
        'unit_kerja',
        'status_jabatan',
        'eselon',
    ];

    // Jika kamu ingin menetapkan default value atau casting data
    protected $casts = [
        'eselon' => 'string', // Untuk memastikan eselon diperlakukan sebagai string
    ];
}