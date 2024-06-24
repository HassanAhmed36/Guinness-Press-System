<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InitialFeedBack extends Model
{
    use HasFactory;
    protected $fillable = [
        'initial_status',
        'feedback_message',
        'submission_file_id',
    ];
    public function submission_file(): BelongsTo
    {
        return $this->belongsTo(SubmissionFile::class);
    }
}
