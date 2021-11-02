<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'date',
        'chat_id',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
