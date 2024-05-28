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
        'citation',
        'metrics',
        'copyright_and_permission',
        'article_id',
    ];
}
