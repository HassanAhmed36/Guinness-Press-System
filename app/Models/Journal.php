<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'issn_no',
        'image',
        'description',
        'is_active',
    ];

    public function journal_matrix()
    {
        return $this->hasOne(JournalMatrix::class, 'journal_id');
    }

    public function journal_overview()
    {
        return $this->hasOne(JournalOverview::class, 'journal_id');
    }
}
