<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Submission extends Model
{
    use HasFactory;
    protected $fillable = [
        'menuscript_id',
        'title',
        'abstract',
        'journal',
        'manuscript_name',
        'manuscript_path',
        'cover_letter_name',
        'cover_letter_path',
        'author_message',
        'reviewer_message',
        'admin_message',
        'reviewer_status',
        'admin_status',
        'user_id',
        'reviewer_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function submision_keywords(): HasMany
    {
        return $this->hasMany(SubmissionKeyword::class, 'submission_id');
    }

    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}