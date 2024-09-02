<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'home_page_description',
        'home_page_image',
        'show_on_home_page',
        'meta_description',
        'meta_image',
        'content',
    ];

}
