@props(['logo', 'ctaText', 'ctaLink', 'navLinks'])

<header class="relative lg:absolute top-0 lg:top-7 left-0 right-0 py-5 lg:py-0 bg-white lg:bg-white/75 rounded-none lg:rounded-5 shadow-sm lg:shadow-2xl text-gray-title w-full flex justify-between items-center lg:container mx-auto z-20">

    <a href="{{route('home')}}">
        <img src="{{asset('storage/' . $logo)}}" alt="Logo" width="150" class="w-[100px] xl:w-[130px] 2xl:w-[150px] h-auto ml-5 lg:ml-0">
    </a>

    <x-layout.navigation :nav-links="$navLinks"/>

    <div class="hidden xl:block">
        <x-button href="{{$ctaLink}}" type="primary" icon="arrow-right">
            {{$ctaText}}
        </x-button>
    </div>

    <div class="absolute inset-y-0 right-0 flex items-center lg:hidden">
        <button class="relative inline-flex items-center justify-center rounded-md p-2 pr-4 text-gray-title focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                x-on:click="mobileMenuOpen = !mobileMenuOpen"
                type="button"
                aria-controls="mobile-menu"
                aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>

            <svg :class="{'block': !mobileMenuOpen, 'hidden': mobileMenuOpen}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
            <svg :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>

        </button>
    </div>

</header>

<x-layout.mobile-header :nav-links="$navLinks"/>
