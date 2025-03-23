<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'slug',
        'content',
        'thumbnail',
        'published_date',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'published_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags(Str::markdown($this->content)), 150);
    }

    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail) {
            return asset('storage/' . $this->thumbnail);
        }

        return asset('images/default-article.jpg');
    }

    public function getFormattedContentAttribute()
    {
        return Str::markdown($this->content);
    }
}
