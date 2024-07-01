<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'submission_id', 'file_path', 'file_type', 'feedback', 'status', 'stage'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
