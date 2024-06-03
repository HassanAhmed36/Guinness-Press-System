<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JournalVolume extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'journal_id',
        'is_active',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }
    
    public function issue(): HasMany
    {
        return $this->hasMany(VolumeIssue::class, 'volume_id');
    }
}