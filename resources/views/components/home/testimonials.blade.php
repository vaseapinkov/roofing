@props(['testimonials' => $testimonials])

{{--
1. https://maps.app.goo.gl/mA9qytPd6zTXc6fv5
2. https://maps.app.goo.gl/4kxrTfs4mFDhifTb8
3. https://maps.app.goo.gl/UqHAnZfvPsMrsEVN7
4. https://maps.app.goo.gl/yq2tVQn71cyTcYoq9
5. https://maps.app.goo.gl/hxDkV8VFfn4xKsreA
--}}

<section id="reviews" class="bg-gray-light pt-[120px] pb-[90px]">
    <div class="container">

        <x-section-title :centred="false" title="Some of Our Respected Happy Clients Says" sub-title="Our Testimonials"/>


        <div class="swiper w-full flex-1 lg:h-[503px]" id="testimonials-slider">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="pr-8 grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-16 items-center">
                            <div>
                                <img class="max-w-full rounded-10 mx-auto" src="{{asset('storage/' . $testimonial->project_photo)}}" alt="Testimonial">
                            </div>

                            <div>
                                <svg class="size-20 mb-5 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="fill-primary-500" d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/>
                                </svg>

                                <p class="italic text-gray-body text-lg mb-5 pointer-events-none">{{Str::limit($testimonial->message, 200)}}</p>

                                <a href="{{$testimonial->review_link}}" class="group" target="_blank">
                                    <div class="flex gap-4 items-center pointer-events-none pb-10">
                                        <div class="relative">
                                            <img class="h-[50px] aspect-square" src="{{asset('storage/' .$testimonial->client_avatar)}}" alt="Customer Avatar">
                                            <img class="absolute -bottom-1 -right-2 size-6" src="{{Vite::asset('resources/images/google-logo.svg')}}" alt="Google Logo">
                                        </div>

                                        <div class="flex flex-col gap-1.5">
                                            <div class="flex flex-row gap-1.5">
                                                @foreach(range(1, $testimonial->stars) as $star)
                                                    <svg class="size-5" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_3796_102578)">
                                                            <path d="M6.82617 11.442L3.54617 13.166C3.46353 13.2093 3.3704 13.2287 3.27732 13.2219C3.18425 13.2151 3.09494 13.1824 3.0195 13.1274C2.94406 13.0725 2.8855 12.9975 2.85045 12.911C2.8154 12.8245 2.80526 12.7299 2.82117 12.638L3.44817 8.98798C3.46192 8.908 3.456 8.82587 3.43091 8.74869C3.40582 8.67151 3.36232 8.6016 3.30417 8.54499L0.650168 5.95899C0.583317 5.89388 0.53602 5.81136 0.51363 5.72076C0.491239 5.63017 0.494647 5.53512 0.52347 5.44637C0.552292 5.35761 0.605378 5.27869 0.676721 5.21854C0.748065 5.15838 0.834818 5.1194 0.927168 5.10599L4.59317 4.57299C4.67344 4.56146 4.7497 4.53059 4.81537 4.48303C4.88105 4.43547 4.93418 4.37265 4.97017 4.29999L6.61017 0.977985C6.65153 0.894518 6.7154 0.824266 6.79455 0.775151C6.87371 0.726037 6.96501 0.700012 7.05817 0.700012C7.15132 0.700012 7.24263 0.726037 7.32178 0.775151C7.40094 0.824266 7.4648 0.894518 7.50617 0.977985L9.14717 4.29899C9.18307 4.37152 9.23604 4.43426 9.30153 4.48182C9.36702 4.52937 9.44308 4.56031 9.52317 4.57199L13.1892 5.10499C13.2815 5.1184 13.3683 5.15738 13.4396 5.21754C13.511 5.27769 13.564 5.35661 13.5929 5.44537C13.6217 5.53412 13.6251 5.62917 13.6027 5.71976C13.5803 5.81036 13.533 5.89288 13.4662 5.95798L10.8132 8.54398C10.7552 8.60049 10.7118 8.67024 10.6867 8.74723C10.6616 8.82422 10.6556 8.90616 10.6692 8.98598L11.2962 12.637C11.3122 12.7291 11.3021 12.8238 11.267 12.9105C11.232 12.9971 11.1733 13.0722 11.0977 13.1272C11.0221 13.1822 10.9326 13.2149 10.8393 13.2215C10.7461 13.2282 10.6528 13.2086 10.5702 13.165L7.29117 11.441C7.21946 11.4033 7.13967 11.3836 7.05867 11.3836C6.97767 11.3836 6.89788 11.4033 6.82617 11.441V11.442Z"
                                                                  fill="rgb(252, 191, 2)"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_3796_102578">
                                                                <rect width="14" height="14" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                @endforeach
                                            </div>
                                            <h5 class="text-gray-title text-lg font-heading font-bold group-hover:underline">{{$testimonial->client_name}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
