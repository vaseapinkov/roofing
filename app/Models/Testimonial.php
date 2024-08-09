<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'client_name',
        'client_avatar',
        'show_on_home_page',
        'stars',
        'project_photo',
        'review_link',
    ];
}
