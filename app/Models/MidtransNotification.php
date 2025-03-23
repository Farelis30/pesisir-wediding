<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MidtransNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'midtrans_id',
        'status',
        'raw_data',
    ];

    protected $casts = [
        'raw_data' => 'array',
    ];
}
