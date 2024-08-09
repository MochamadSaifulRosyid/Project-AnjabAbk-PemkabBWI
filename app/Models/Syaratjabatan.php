<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratJabatan extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'syaratjabatan';

    // Specify the primary key
    protected $primaryKey = 'id_syaratjabatan';

    // Disable auto-incrementing primary key
    public $incrementing = true;

    // Specify the type of primary key
    protected $keyType = 'int';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'id_jabatan',
        'kode_jabatan',
        'nama_jabatan',
        'pengetahuan_kerja',
        'keterampilan_kerja',
        'pengalaman_kerja',
        'bakat_kerja',
        'tempramen_kerja',
        'minat_kerja',
        'upaya_fisik',
        'hubunganjabatan_dengandata',
        'hubunganjabatan_denganorang',
        'hubunganjabatan_denganbenda',
        'jenjang_minimal',
        'jurusan',
        'pelatihan_fungsional',
        'pelatihan_teknik',
        'jenis_kelamin',
        'umur_pertahun',
        'tinggibadan_percm',
        'beratbadan_perkg',
        'posturbadan',
        'penampilan',
    ];

    // Specify the type of attributes
    protected $casts = [
        'jenjang_minimal' => 'string',
        'jenis_kelamin' => 'string',
        'bakat_kerja' => 'array', // Menyimpan dan mengambil data sebagai array
    ];

    // Define relationships if needed
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan'); // Pastikan 'id_jabatan' disesuaikan
    }
}