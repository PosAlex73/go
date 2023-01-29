<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ThreadMessage extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'owner_id',
        'thread_id',
        'message',
        'status'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
