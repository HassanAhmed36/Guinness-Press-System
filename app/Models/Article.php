<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'page',
        'published_date',
        'doi',
        'views_count',
        'download_count',
        'is_active',
        'file',
        'issue_id',
        'volume_id',
        'journal_id',
    ];

    public function issue(): BelongsTo
    {
        return $this->belongsTo(VolumeIssue::class, 'issue_id');
    }
}
