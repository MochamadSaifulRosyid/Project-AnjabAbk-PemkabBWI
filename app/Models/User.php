<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'user_id',
        'KD_UNOR',
        'email',
        'password',
        'username',
        'NM_UNOR',
        'role',
        'access_status',
        'access',
        'access_start_datetime',  // Tambahkan ini
        'access_end_datetime',    // Tambahkan ini
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'access_status' => 'boolean', // Mengatur access_status sebagai boolean
        'email_verified_at' => 'datetime',
        'access_start_datetime' => 'datetime', // Mengatur akses mulai sebagai datetime
        'access_end_datetime' => 'datetime', // Mengatur akses berakhir sebagai datetime
    ];

    public function unor()
    {
        return $this->belongsTo(Unor::class, 'KD_UNOR', 'KD_UNOR');
    }

    public static function getNextUserId()
    {
        $latestUser = self::orderBy('user_id', 'desc')->first();
        return $latestUser ? $latestUser->user_id + 1 : 1;
    }
}
