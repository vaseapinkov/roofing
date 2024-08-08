<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'home_page_description',
        'home_page_icon',
        'show_on_home_page',
    ];

    protected $attributes = [
        'name' => false,
    ];

    public function getLinkAttribute(): string
    {
        return Str::slug($this->name);
    }
}
