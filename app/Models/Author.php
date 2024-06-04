<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Affiliation;

class Author extends Model
{
    use HasFactory;
    public function affiliations(): BelongsToMany
    {
        return $this->belongsToMany(Affiliation::class , 'affiliation_author');
    }
}
