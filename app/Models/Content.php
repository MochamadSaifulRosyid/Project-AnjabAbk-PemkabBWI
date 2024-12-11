<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    // Pastikan nama tabel ini sesuai dengan nama tabel di database
    protected $table = 'contents';

    protected $fillable = [
            'title', 'slug', 'body', 'excerpt', 'status', 'published_at', 'image',
        ];
}

