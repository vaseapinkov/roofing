@props(['logo', 'ctaText', 'ctaLink', 'navLinks'])

<header class="py-5 xl:py-0 bg-white shadow-2xl text-gray-title w-full">
    <div class="container flex justify-between items-center mx-auto ">
        <a href="/">
            <img src="{{asset($logo)}}" alt="Logo" width="150" class="w-[100px] xl:w-[130px] 2xl:w-[150px] h-auto">
        </a>

        <x-layout.navigation :nav-links="$navLinks"/>

        <div class="hidden xl:block">
            <x-button href="{{$ctaLink}}" type="primary" icon="arrow-right">
                {{$ctaText}}
            </x-button>
        </div>
    </div>
</header>
