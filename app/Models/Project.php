<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'home_page_description',
        'home_page_image',
        'show_on_home_page',
        'start_date',
        'end_date',
        'client_name',
        'project_type',
        'meta_description',
        'meta_image',
        'content',
    ];

    protected $casts = [
      'start_date' => 'date',
      'end_date' => 'date',
    ];
}
