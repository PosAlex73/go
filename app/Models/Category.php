<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => __('common_status_') . $value
        );
    }
}
