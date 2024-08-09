<header class="absolute top-0 left-0 right-0 text-gray-title w-full h-[104px] flex justify-between items-center container mx-auto z-20">
    <a href="{{route('home')}}">
        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo" width="150" class="w-[130px] 2xl:w-[150px] h-auto">
    </a>


    <?php
    $navItems = [
        [
            'name' => 'Home',
            'link' => route('home'),
        ],
        [
            'name' => 'Services',
            'options' => [
                ['name' => 'All Services', 'link' => route('services')],
                ...\App\Models\Service::all(),
            ]
        ],
        [
            'name' => 'Projects',
            'options' => \App\Models\Project::all()
        ],
        [
            'name' => 'About Us',
            'link' => route('home')
        ],
        [
            'name' => 'Contact',
            'link' => route('contact-us')
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
                <a class="py-10 px-5 font-bold hover:text-secondary text-gray-title" href="{{$navItem['link']}}">
                    {{$navItem['name']}}
                </a>
            @endif
        @endforeach
    </nav>

    <div class="hidden xl:block">
        <x-button type="primary" icon="arrow-right">Get a Quote</x-button>
    </div>
</header>
