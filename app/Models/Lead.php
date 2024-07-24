<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'country', 'email', 'journal_id', 'manuscript_path', 'is_conversion', 'is_verified'
    ];

    public function journal()
    {
        return $this->hasMany(Journal::class);
    }
}
