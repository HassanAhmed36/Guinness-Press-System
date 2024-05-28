<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalOverview extends Model
{
    use HasFactory;
    protected $fillable = [
        'manuscript_prepation_guideline',
        'aims_and_scope',
        'editorial_polices',
        'author_guideline',
        'role_of_eic',
        'role_of_ebm',
        'journal_id',
    ];

}
