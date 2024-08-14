<header class="absolute top-0 xl:top-7 left-0 right-0 py-5 xl:py-0 bg-white xl:bg-white/75 rounded-none xl:rounded-5 shadow-2xl text-gray-title w-full flex justify-between items-center container mx-auto z-20">

    <a href="{{route('home')}}">
        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo" width="150" class="w-[100px] xl:w-[130px] 2xl:w-[150px] h-auto">
    </a>


    <?php
    $navItems = [
        [
            'name' => "About Us",
            'link' => route('home')."#about-us",
        ],
        [
            'name' => "Services",
            'link' => route('home')."#services",
        ],
        [
            'name' => "Reviews",
            'link' => route('home')."#reviews",
        ],
        [
            'name' => "Contact Us",
            'link' => route('contact-us'),
        ],
    ];

    ?>
    <nav class="hidden lg:flex gap-10">
        @foreach($navItems as $navItem)
            @isset($navItem['options'])
                <x-layout.header-dropdown :options="$navItem['options']" option-name-key="name" option-url-key="link">
                    {{$navItem['name']}}
                </x-layout.header-dropdown>
            @else
                <a class="py-8 px-5 font-bold hover:text-secondary text-gray-title" href="{{$navItem['link']}}">
                    {{$navItem['name']}}
                </a>
            @endif
        @endforeach
    </nav>

    <div class="hidden xl:block">
        <x-button href="{{ Route::current() === 'home' ? '' : route('home')}}#book-appointment" type="primary" icon="arrow-right">Get a Quote</x-button>
    </div>
</header>
