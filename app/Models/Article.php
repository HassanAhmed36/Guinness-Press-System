<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_name',
        'author_education',
        'page',
        'published_date',
        'doi',
        'views_count',
        'download_count',
        'is_active',
    ];

}
