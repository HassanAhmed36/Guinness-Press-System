<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalMatrix extends Model
{
    use HasFactory;
    protected $fillable = [
        'acceptance_rate',
        'submission_to_final_decision',
        'acceptance_to_publication',
        'dio_prefix',
        'publication_type',
        'publishing_model',
        'journal_category',
        'indexing_bodies',
        'acp',
        'journal_id',
    ];
}
