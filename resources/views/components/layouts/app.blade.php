<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body class="relative">

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

</body>
</html>
