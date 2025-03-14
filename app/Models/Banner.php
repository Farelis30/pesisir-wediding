<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cta_text',
        'cta_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
