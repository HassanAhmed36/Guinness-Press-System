<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmissionKeyword extends Model
{
    use HasFactory;

    protected $fillable = [
        'keyword',
        'submission_id'
    ];

    public function submision():BelongsTo
    {
        return $this->belongsTo(Submission::class , 'submission_id');
    }
}
