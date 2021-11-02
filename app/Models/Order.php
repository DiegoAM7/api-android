<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'method_payment',
        'guide_number',
        'transportation_cost',
        'payment_document',
        'date',
        'address_id',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
