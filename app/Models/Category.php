<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
    ];

    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn($slug) => $slug,
            set: fn(?string $slug) => strtolower(Str::slug($slug ?? $this->name))
        );
    }
}
