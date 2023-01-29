<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Article extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'title',
        'text',
        'image',
        'status',
        'category_id'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
