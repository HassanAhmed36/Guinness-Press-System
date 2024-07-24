<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThreadComment extends Model
{
    use HasFactory;
    protected $fillable = ['body', 'user_id', 'thread_id' , 'parent_id'];

    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class, 'thread_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent()
    {
        return $this->belongsTo(ThreadComment::class, 'parent_id');
    }
    public function replies()
    {
        return $this->hasMany(ThreadComment::class, 'parent_id');
    }
}
