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
        'access_status', // Menambahkan access_status
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'access_status' => 'boolean', // Mengatur akses_status sebagai boolean
        'email_verified_at' => 'datetime',
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