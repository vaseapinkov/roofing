<section id="hero" class="relative ps-[20px] lg:ps-[240px] font-heading">

    <div class="bg-primary-500 w-[45%] lg:w-[35%] xl:w-[22%] h-[calc(100vh-104px)] max-h-[870px] absolute top-0 left-0"></div>

    <div class="relative z-10 rounded-bl-xl min-h-[440px] sm:min-h-[700px] lg:min-h-[400px] xl:min-h-[700px] flex items-center before:absolute before:w-full before:h-full before:bg-gradient-to-r before:from-black/50 before:via-transparent before:to-transparent before:rounded-bl-xl"
         style="background-image: url({{Vite::asset('resources/images/hero.jpg')}})">
        <div class="max-w-4xl flex flex-col gap-12 px-5 py-16 lg:px-28 lg:py-28 z-10 text-center lg:text-start">
            <x-text size="h1" color="white" tag="h1">Best Roofing Services and Consulting</x-text>

            <p class="text-white text-[20px]">
                Welcome to M&R Roofing Company, your trusted partner in ensuring the safety, comfort, and beauty of your home
            </p>
            <x-button href="#services" type="primary" icon="arrow-right" class="w-fit mx-auto lg:mx-0">
                Our Services
            </x-button>
        </div>
    </div>

    <div class="w-full ps-[55%] lg:ps-[22%]">
        <div class="swiper w-full h-[100px] sm:h-[167px] lg:h-[100px] xl:h-[167px]" id="home-swiper">
            <div class="swiper-wrapper">
                @foreach(range(1, 6) as $index)
                    <div class="swiper-slide 2xl:py-10 h-[47px] flex content-center">
                        <img class="max-h-[47px] grayscale hover:grayscale-0 cursor-pointer" src="{{Vite::asset("resources/images/brands-slider/brand_img0$index.png")}}" alt="Partner Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</section>
