<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Task extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'title',
        'description',
        'data',
        'status',
        'type',
        'points',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
