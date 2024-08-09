<section id="hero" class="relative ps-[20px] 2xl:ps-[240px] font-heading">

    <div class="bg-secondary w-[44%] 2xl:w-[22%] h-screen absolute top-0 left-0 -mt-[104px]"></div>

    <div class="relative z-10 rounded-tl-xl rounded-bl-xl min-h-[440px] 2xl:min-h-[700px] flex items-center before:absolute before:w-full before:h-full before:bg-gradient-to-r before:from-black/50 before:via-transparent before:to-transparent before:rounded-tl-xl before:rounded-bl-xl"
         style="background-image: url({{Vite::asset('resources/images/hero.jpg')}})">
        <div class="max-w-4xl flex flex-col gap-12 px-5 py-16 2xl:px-28 2xl:py-28 z-10 text-center 2xl:text-start">
            <x-text size="h1" color="white" tag="h1">Best Roofing Services and Consulting</x-text>

            <p class="text-white text-[20px]">
                There are many variations of passages of Lorem as Ipsumoff available, but the majority have suffered alt.
            </p>
            <x-button type="primary" icon="arrow-right" class="w-fit mx-auto 2xl:mx-0">
                Discover more
            </x-button>
        </div>
    </div>

    <div class="w-full ps-[55%] 2xl:ps-[22%]">
        <div class="swiper w-full h-[167px]" id="home-swiper">
            <div class="swiper-wrapper">
                @foreach(range(1, 6) as $index)
                    <div class="swiper-slide py-10 h-[47px] flex content-center">
                        <img class="max-h-[47px] grayscale hover:grayscale-0 cursor-pointer" src="{{Vite::asset("resources/images/brands-slider/brand_img0$index.png")}}" alt="Partner Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
