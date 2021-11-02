<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'date',
        'product_id',
        'user_id',
    ];
}
