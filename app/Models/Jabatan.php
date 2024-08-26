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
        'user_id', // Tambahkan user_id
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}