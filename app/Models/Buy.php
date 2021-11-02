<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'total',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}