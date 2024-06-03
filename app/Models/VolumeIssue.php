<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VolumeIssue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'volume_id',
        'issue_id',
        'journal_id',
        'is_active',
    ];
    
    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }
    public function volume(): BelongsTo
    {
        return $this->belongsTo(JournalVolume::class, 'volume_id');
    }
}