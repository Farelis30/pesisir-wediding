<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'wedding_id',
        'midtrans_id',
        'amount',
        'payment_status',
        'payment_method',
    ];

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}
