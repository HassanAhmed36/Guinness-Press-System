<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PeerReviewAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_board_member_id',
        'submission_id',
        'status',
        'user_id',
        'feedback',
        'file_path'
    ];

    public function journal_board_member()
    {
        return $this->belongsTo(JournalBoardMember::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
