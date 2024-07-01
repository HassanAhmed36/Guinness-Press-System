<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBasicInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'affiliation',
        'country',
        'announcement_notify',
        'primary_author',
        'user_id'
    ];
}
