<?php

namespace App\Models;

use App\Http\Controllers\Admin\JournalBoardMemberController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acronym',
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

    public function board_member(): HasMany
    {
        return $this->hasMany(JournalBoardMember::class, 'journal_id');
    }

    public function volume(): HasMany
    {
        return $this->hasMany(JournalVolume::class, 'journal_id');
    }

    protected function acronym(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }

    public function indexBodies()
    {
        return $this->belongsToMany(IndexBody::class, 'index_body_journal');
    }
}
