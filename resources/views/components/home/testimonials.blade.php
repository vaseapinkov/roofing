<?php $testimonials = \App\Models\Testimonial::where('show_on_home_page', true)->get(); ?>
<section class="bg-gray-light pt-[120px] pb-[90px]">
    <div class="container">

        <div class="grid grid-cols-2 gap-16 items-stretch">
            <div>
                <img class="max-w-full rounded-10" src="{{Vite::asset('resources/images/testimonial_img.jpg')}}" alt="Testimonial">
            </div>

            <div class="flex flex-col">
                <x-section-title :centred="false" title="Some of Our Respected Happy Clients Says" sub-title="Our Testimonials"/>

                <div class="swiper w-full flex-1" id="testimonials-slider">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide pr-8">
                                <svg class="size-20 mb-5 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="fill-primary-500" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/>
                                </svg>

                                <p class="italic text-gray-body text-lg mb-5 pointer-events-none">{{$testimonial->message}}</p>

                                <div class="flex gap-4 items-center pointer-events-none">
                                    <img class="rounded-full h-[80px] aspect-square" src="{{'storage/' .asset($testimonial->client_avatar)}}" alt="Customer Avatar">

                                    <div class="font-heading">
                                        <h5 class="text-gray-title text-xl font-bold">{{$testimonial->client_name}}</h5>
                                        @isset($testimonial->client_title)
                                            <span class="text-primary-500 text-sm">{{$testimonial->client_title}}</span>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>

    </div>
</section>
