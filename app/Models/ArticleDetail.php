<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'abstract',
        'references',
        'extra_meta_tag',
        'authors',
        'affiliations',
        'article_id',
    ];

    protected $casts = [
        'affiliations' => 'json',
        'authors' => 'json'
    ];
}
