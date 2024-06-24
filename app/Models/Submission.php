<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Submission extends Model
{
    use HasFactory;
    protected $fillable = [
        'manuscript_id',
        'status',
        'initial_feedback',
        'journal_id',
        'user_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }
    public function submission_files(): HasMany
    {
        return $this->hasMany(SubmissionFile::class, 'submission_id');
    }
}
