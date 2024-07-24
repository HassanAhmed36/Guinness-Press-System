<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'keywords',
        'meta_tags',
        'blog',
        'case_study',
        'research_study',
        'published_at',
        'is_active',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
}
