<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_code',
        'title',
        'first_page',
        'last_page',
        'article_type',
        'recived_date',
        'revised_date',
        'accepted_date',
        'published_date',
        'dio',
        'views_count',
        'download_count',
        'is_active',
        'file_name',
        'file_path',
        'issue_id',
        'volume_id',
        'journal_id',
        'supplementary_file_path',
        'supplementary_file_name'
    ];

    public function issue(): BelongsTo
    {
        return $this->belongsTo(VolumeIssue::class, 'issue_id');
    }

    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }

    public function keywords(): HasMany
    {
        return $this->hasMany(ArticleKeyword::class, 'article_id');
    }
    
    public function article_details()
    {
        return $this->hasOne(ArticleDetail::class, 'article_id');
    }

    public function volume()
    {
        return $this->belongsTo(JournalVolume::class, 'journal_id');
    }

    public function affiliation(): HasMany
    {
        return $this->HasMany(Affiliation::class, 'article_id');
    }
}
