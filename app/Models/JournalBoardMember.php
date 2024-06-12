<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalBoardMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'affliation',
        'country',
        'biography',
        'journal_id',
        'order_id',
        'google_scholar',
        'scopus',
        'orcid'
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id');
    }
}
