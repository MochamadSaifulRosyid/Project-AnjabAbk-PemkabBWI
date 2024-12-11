<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jabatan';
    protected $table = 'jabatan';

    protected $fillable = [
        'jenis_jabatan',
        'nama_jabatan',
        'unit_kerja',
        'eselon',
        'status_jabatan',
        'kode_jabatan',
        'user_id',
        'dibawah_jabatan', // Menambahkan kolom dibawah_jabatan ke fillable
        'jenjang',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Analisis Jabatan
    public function analisisJabatan()
    {
        return $this->hasMany(AnalisisJabatan::class, 'id_jabatan', 'id_jabatan');
    }

    // Relasi untuk sub jabatan
    public function subJabatan()
    {
        return $this->hasMany(Jabatan::class, 'dibawah_jabatan', 'id_jabatan');
    }

    public function jabatanDiAtas()
    {
        return $this->belongsTo(Jabatan::class, 'dibawah_jabatan', 'id_jabatan');
    }


    public function atasan()
    {
        return $this->belongsTo(Jabatan::class, 'dibawah_jabatan');
    }

    public function anakJabatans()
    {
        return $this->hasMany(Jabatan::class, 'dibawah_jabatan');
    }

    public function children()
    {
        return $this->hasMany(Jabatan::class, 'dibawah_jabatan');
    }

    public function dibawahJabatan()
    {
        return $this->hasMany(Jabatan::class, 'dibawah_jabatan');
    }


}
