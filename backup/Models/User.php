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
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function unor()
    {
        return $this->belongsTo(Unor::class, 'KD_UNOR', 'KD_UNOR');
    }

    /**
     * Get the next user ID.
     *
     * @return int
     */
    public static function getNextUserId()
    {
        // Get the highest user_id from the database and add 1
        $latestUser = self::orderBy('user_id', 'desc')->first();
        return $latestUser ? $latestUser->user_id + 1 : 1;
    }
}