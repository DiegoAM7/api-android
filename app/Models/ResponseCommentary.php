<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseCommentary extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'date',
        'commentary_product_id',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
