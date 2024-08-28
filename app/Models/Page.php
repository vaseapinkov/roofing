<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'navigation_type',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
