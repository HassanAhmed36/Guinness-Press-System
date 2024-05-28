<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolumeIssue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'volume_id',
        'journal_id',
        'is_active',
    ];

}