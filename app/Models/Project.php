<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'technologies',
        'main_tech',
        'image',
        'link',
        'is_featured',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_featured' => 'boolean',
    ];

    // Аксессор для эмодзи изображения (если нет реального изображения)
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ?: '🚀', // Дефолтное эмодзи
        );
    }
}