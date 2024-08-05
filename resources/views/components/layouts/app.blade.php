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

<footer class="bg-cover" style="background-image:url({{Vite::asset('resources/images/footer_bg.jpg')}});" alt="Construction Illustration">
    <div class="container py-[90px]">

        <div class="grid grid-cols-4 justify-items-center mb-10">
            <div>
                <h4 class="text-2xl text-white font-bold mb-4">About Us</h4>
                <p class="text-gray-light-alt mb-8">There are many variations of passages of Lore Ipsum available, but the majori have alteration in some form, by injected humour, ondomised word which don't look</p>

                <p class="text-white text-lg font-medium mb-4">Subscribe to Our Newsletter</p>
                <div class="flex">
                    <input class="rounded-l-5 text-gray-body text-sm px-4" type="text" placeholder="Enter your email">
                    <x-button class="!rounded-l-none" size="sm">Subscribe</x-button>
                </div>
            </div>
            <div>
                <?php $services = \App\Models\Service::where('show_on_home_page', true)->get(); ?>

                <h4 class="text-2xl text-white font-bold mb-4">Our Services</h4>
                <ul class="space-y-2">
                    @foreach($services as $service)
                        <li class="text-gray-light-alt"> >> {{$service->name}}</li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-2xl text-white font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    @foreach($services as $service)
                        <li class="text-gray-light-alt"> >> {{$service->name}}</li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-2xl text-white font-bold mb-4">Instagram posts</h4>
                <div class="grid grid-cols-3 gap-4">
                    @foreach(range(1, 6) as $item)
                        <img class="rounded-5 w-[120px] aspect-square" src="{{Vite::asset('resources/images/f_insta_img01.jpg')}}" alt="Instagram Image">
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center px-8 py-4 bg-secondary-400 rounded-5">
            <div>
                <img src="{{Vite::asset('resources/images/w_logo.png')}}" alt="Logo">
            </div>
            <div class="bg-primary-500 flex gap-8 p-4 rounded-5">
                <div class="bg-white w-[70px] aspect-square flex items-center justify-center rounded-5">
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="fill-black" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                    </svg>
                </div>
                <div class="text-white font-heading">
                    <p class="text-lg">Phone No</p>
                    <p class="text-2xl font-semibold">+0000 (123) 456 88</p>
                </div>
            </div>

            <div class="flex gap-8 items-center">
                <p class="text-2xl text-white font-semibold">Follow Us:</p>

                <div class="flex gap-2 items-center">
                    <div class="w-[42px] aspect-square bg-white rounded-full">
                    </div>
                    <div class="w-[42px] aspect-square bg-white rounded-full">
                    </div>
                    <div class="w-[42px] aspect-square bg-white rounded-full">
                    </div>
                    <div class="w-[42px] aspect-square bg-white rounded-full">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-secondary-400 pt-4 pb-6">
        <div class="container flex justify-between text-white">
            <p class="text-sm">© Copyright 2023. All Right Reserved</p>

            <div class="flex">
                <p class="px-4 border-r border-gray-light">Privacy Policy</p>
                <p class="px-4">Terms & Condition</p>
            </div>
        </div>
    </div>
</footer>

@vite('resources/js/app.js')
</body>
</html>
