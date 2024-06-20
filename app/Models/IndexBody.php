<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IndexBody extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'link',
    ];

    public function journals()
    {
        return $this->belongsToMany(Journal::class, 'index_body_journal');
    }
}
