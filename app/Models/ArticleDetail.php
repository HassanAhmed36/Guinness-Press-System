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
        'article_id',
    ];
}
