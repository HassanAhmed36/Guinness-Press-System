<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Affiliation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country', 'full_affiliation', 'article_id'];

    protected $casts = [
        'full_affiliation' => 'json'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class, 'affiliation_author');
    }
}
