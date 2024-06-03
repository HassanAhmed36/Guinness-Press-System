<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBasicInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'current_job_title',
        'department',
        'institution',
        'country',
        'contact_number',
        'user_id'
    ];

    
}