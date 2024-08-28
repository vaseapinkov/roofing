@props(['logo', 'ctaText', 'ctaLink', 'navLinks'])

<header class="absolute top-0 xl:top-7 left-0 right-0 py-5 xl:py-0 bg-white xl:bg-white/75 rounded-none xl:rounded-5 shadow-2xl text-gray-title w-full flex justify-between items-center container mx-auto z-20">

    <a href="{{route('home')}}">
        <img src="{{asset($logo)}}" alt="Logo" width="150" class="w-[100px] xl:w-[130px] 2xl:w-[150px] h-auto">
    </a>

    <x-layout.navigation :nav-links="$navLinks"/>

    <div class="hidden xl:block">
        <x-button href="{{$ctaLink}}" type="primary" icon="arrow-right">
            {{$ctaText}}
        </x-button>
    </div>

</header>
