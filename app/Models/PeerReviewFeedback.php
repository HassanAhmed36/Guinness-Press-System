<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PeerReviewFeedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'initial_status',
        'feedback_message',
        'submission_file_id',
    ];
    public function peer_review_feedback(): BelongsTo
    {
        return $this->belongsTo(PeerReviewFeedback::class, 'submission_file_id');
    }
}
