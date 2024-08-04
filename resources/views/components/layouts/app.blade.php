<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    {{--  Poppins & DM Sans  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body class="relative font-body">

<header class="absolute top-0 left-0 right-0 text-gray-title w-full flex justify-between items-center container mx-auto z-10">
    <a href="{{route('home')}}">
        <img src="{{Vite::asset('resources/images/logo.png')}}" alt="Logo" width="150" class="h-auto">
    </a>


    @php
        $navItems = ['Home', 'About Us', 'Products'];
    @endphp
    <nav class="flex gap-10">
        @foreach($navItems as $navItem)
            <button class="py-10 px-5 font-bold">
                {{$navItem}}
            </button>
        @endforeach
    </nav>

    <div>
        <x-button type="primary" icon="arrow-right">Get a Quote</x-button>
    </div>
</header>

<main class="pt-[104px]">
{{ $slot }}
</main>

@vite('resources/js/app.js')
</body>
</html>
