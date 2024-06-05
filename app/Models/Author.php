<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Affiliation;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'author_affiliation', 'email', 'orchid_id', 'article_id'];

    protected $casts = [
        'author_affiliation' => 'json'
    ];

    public function affiliations(): BelongsToMany
    {
        return $this->belongsToMany(Affiliation::class, 'affiliation_author');
    }
}
