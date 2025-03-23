<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'cta_text',
        'cta_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags(Str::markdown($this->content)), 150);
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }

        return asset('images/default-banner.jpg');
    }

    public function getFormattedContentAttribute()
    {
        return Str::markdown($this->content);
    }
}
