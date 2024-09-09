<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'navigation_type',
        'content',
        'meta_title',
        'meta_description',
        'meta_image',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public static function getHomePage(): self
    {
        return self::where('slug', 'home')->first();
    }
}
