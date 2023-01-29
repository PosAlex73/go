<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class UserProgress extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'user_id',
        'data',
        'status',
        'order_id',
        'course_id',
        'course_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
