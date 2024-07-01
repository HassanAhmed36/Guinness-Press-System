<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionStatusHistory extends Model
{
    use HasFactory;
    protected $table = 'submission_status_histories';
    protected $fillable = [
        'submission_id', 'status', 'stage',
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
