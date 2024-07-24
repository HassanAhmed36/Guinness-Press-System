<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'views'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread_comments(): HasMany
    {
        return $this->hasMany(ThreadComment::class, 'thread_id');
    }
}
