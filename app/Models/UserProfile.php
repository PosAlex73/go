<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class UserProfile extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'phone',
        'contacted_email',
        'user_id',
        'country',
        'experience',
        'about',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
