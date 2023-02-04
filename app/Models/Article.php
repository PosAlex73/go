<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => __('common_status_' . $value)
        );
    }
}
