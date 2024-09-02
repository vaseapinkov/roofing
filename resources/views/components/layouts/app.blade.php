<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    {{--  Poppins & DM Sans  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{--  Fav Icon  --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage/' . $settings->fav_icon)}}">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    {!! $settings->scripts_head !!}

    {!! $settings->css_head !!}


    <title>{{ $settings->website_name . ' | ' . $title}}</title>
</head>

<body x-data="{mobileMenuOpen: false}" class="relative font-body bg-primary-500">

@if($navigationType === 'floating')
    <x-layout.header-floating :logo="$settings->logo_header" :cta-text="$settings->nav_cta_text" :cta-link="$settings->nav_cta_link" :nav-links="$settings->navbar_links"/>
@elseif($navigationType === 'default')
    <x-layout.header :logo="$settings->logo_header" :cta-text="$settings->nav_cta_text" :cta-link="$settings->nav_cta_link" :nav-links="$settings->navbar_links"/>
    <x-section-bradcrumbs :title="$title"/>
@endif

<main class="bg-white">
    {{ $slot }}
</main>

<x-layout.footer
    :about-us="$settings->about_us"
    :logo="$settings->logo_footer"
    :instagram-link="$settings->instagram_link"
    :facebook-link="$settings->facebook_link"
    :youtube-link="$settings->youtube_link"
    :logo="$settings->logo_footer"
    :instagram-posts="$settings->instagram_posts"
    :phone="$settings->phone" />

@vite('resources/js/app.js')

{!! $settings->scripts_body !!}

</body>
</html>
