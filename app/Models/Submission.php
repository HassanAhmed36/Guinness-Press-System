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
        'submission_id',
        'journal_id',
        'title',
        'subtitle',
        'abstract',
        'references',
        'current_status',
        'current_stage',
        'user_id'
    ];


    public function files()
    {
        return $this->hasMany(SubmissionFile::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keywords()
    {
        return $this->hasMany(SubmissionKeyword::class);
    }

    public function statusHistory()
    {
        return $this->hasMany(SubmissionStatusHistory::class);
    }

    public function authors()
    {
        return $this->hasMany(SubmissionAuthor::class);
    }

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }

    public function peer_review(): HasMany
    {
        return $this->hasMany(PeerReviewAssignment::class);
    }

    public function pre_publications(): HasMany
    {
        return $this->hasMany(PrePublicationFile::class);
    }
}
