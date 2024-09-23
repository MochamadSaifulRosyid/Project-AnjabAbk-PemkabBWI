<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'unor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'KD_UNOR',
        'NM_UNOR',
        'AL_UNOR',
        'NIP',
        'Jumlah', 
        'SIMPEG_ID',   
        'KD_UNOR_PNSBWI', 
        // Tambahkan atribut lainnya jika ada
    ];

    /**
     * Get the users for the unor.
     */
    public function users()
    {
        return $this->hasMany(User::class, 'KD_UNOR', 'id');
    }
}