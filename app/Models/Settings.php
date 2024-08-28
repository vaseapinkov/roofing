<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'fav_icon',
        'logo_header',
        'logo_footer',
        'phone',
        'address',
        'g_maps_code',
        'instagram_link',
        'facebook_link',
        'youtube_link',
        'about_us',
        'contact_email',
        'scripts_head',
        'scripts_body',
        'css_head',
        'instagram_posts',
        'navbar_links',
        'nav_cta_text',
        'nav_cta_link',
    ];

    protected $casts = [
        'instagram_posts' => 'json',
        'navbar_links' => 'json',
    ];
}
