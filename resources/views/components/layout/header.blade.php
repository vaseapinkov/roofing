<header class="absolute top-0 left-0 right-0 text-gray-title w-full flex justify-between items-center container mx-auto z-20">
    <a href="{{route('home')}}">
        <img src="{{Vite::asset('resources/images/logo.png')}}" alt="Logo" width="150" class="h-auto">
    </a>


    <?php
    $navItems = [
        [
            'name' => 'Home',
            'link' => route('home'),
        ],
        [
            'name' => 'Services',
            'options' => \App\Models\Service::all()
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
    <nav class="flex gap-10">
        @foreach($navItems as $navItem)
            @isset($navItem['options'])
                <x-layout.header-dropdown :options="$navItem['options']" option-name-key="name" option-url-key="name">
                    {{$navItem['name']}}
                </x-layout.header-dropdown>
            @else
                <a class="py-10 px-5 font-bold" href="{{$navItem['link']}}">
                    {{$navItem['name']}}
                </a>
            @endif
        @endforeach
    </nav>

    <div>
        <x-button type="primary" icon="arrow-right">Get a Quote</x-button>
    </div>
</header>
