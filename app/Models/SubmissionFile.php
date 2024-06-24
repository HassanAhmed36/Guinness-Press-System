<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SubmissionFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name',
        'file_path',
        'submission_id'
    ];
    public function submission(): BelongsTo
    {
        return $this->belongsTo(Submission::class);
    }
    public function initial_feedback(): HasOne
    {
        return $this->hasOne(InitialFeedback::class, 'submission_file_id');
    }
    
}
