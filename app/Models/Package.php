<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'includes',
        'price',
        'is_active',
    ];

    protected $casts = [
        'includes' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function weddings()
    {
        return $this->hasMany(Wedding::class);
    }
}
