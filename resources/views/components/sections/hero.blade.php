<section {{$attributes->merge()}} id="hero" class="relative bg-cover bg-center min-h-[948px] flex items-center justify-center" style="background-image: url({{Vite::asset('resources/images/hero.jpg')}})">
    @if($backgroundFilter)
        <div class="absolute top-0 left-0 right-0 bg-hero-gradient h-full w-full"></div>
    @endif
    <div class="font-heading relative flex items-center justify-center">
        <div class="max-w-4xl flex flex-col gap-12 text-center items-center">
            <x-text size="h1" color="white" tag="h1">{{$heading}}</x-text>

            <div class="space-y-6">
                <p class="text-white text-[20px]">
                    {{$subHeading}}
                </p>
                <x-button href="{{$ctaLink}}" type="primary" icon="arrow-right" class="w-fit mx-auto">
                    {{$ctaText}}
                </x-button>
            </div>

        </div>
    </div>

</section>
