<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisisjabatan extends Model
{
    use HasFactory;

    protected $table = 'analisisjabatan';
    protected $primaryKey = 'id_anjab';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'id_jabatan',
        'kode_jabatan',
        'nama_jabatan',
        'ikhtisar_jabatan',
        'objek_kerja',
        'uraian_tugas',
        'langkah_kerja',
        'hasil_kerja',
        'satuan',
        'waktu_permenit',
        'jumlah',
        'tanggung_jawab',
        'wewenang',
        'perangkat_kerja',
        'bahan_kerja',
        'hubungandenganjabatan',
        'perihal',
        'unit_kerja',
        'bahaya_fisikataumental',
        'penyebab',
        'tempat_kerja',
        'suhu',
        'udara',
        'keadaan_ruangan',
        'letak',
        'penerangan',
        'suara',
        'keadaan_tempatkerja',
        'getaran',
        'rekomendasi',
        'prestasi',
        'butir_informasilainnya',
        'kelas_jabatan',
    ];

    // Relasi ke model Jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }
}