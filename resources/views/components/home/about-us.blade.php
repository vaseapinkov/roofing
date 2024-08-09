<?php
$features = ['32k Partners have worked us.', 'Professional and experienced human resources.', 'Provide the best roof services.']
?>
<section id="about-us" class="container mx-auto pb-[120px]">

    <div class="flex flex-col-reverse 2xl:flex-row">
        <div class="w-full 2xl:w-[40%]">
            <x-section-title :centred="false" title="We're committed to Roofing Excellence" sub-title="About Our Company"/>
            <p class="text-gray-body mb-4">There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised word which don't look even slightly believable.</p>
            <ul class="mb-8">
                @foreach($features as $feature)
                    <li class="flex items-center mb-2.5">
                        <svg class="mr-2 text-primary-500 rounded-full shadow-glow flex place-content-center size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                        </svg>

                        <span class="text-gray-title text-lg">{{$feature}}</span>
                    </li>
                @endforeach
            </ul>

            <x-button icon="arrow-right" class="w-fit">Learn more</x-button>
        </div>
        <div class="w-full 2xl:w-[60%]">
            <div class="flex justify-end items-center relative">
                <img class="rounded-10 mb-12 2x:mb-0" src="{{Vite::asset('resources/images/about-us/img-1.jpg')}}" alt="About Us 1">
                <img class="hidden 2xl:block rounded-10 ml-5" src="{{Vite::asset('resources/images/about-us/img-2.jpg')}}" alt="About Us 2">

                <div class="hidden 2xl:block">
                    <div class="absolute bg-white shadow-3xl p-5 flex items-center gap-5 rounded-10 left-[70px] bottom-[87px] w-[352px]">
                        <div class="bg-primary-500 rounded-5 h-[63px] w-[63px] flex items-center justify-center">
                            <img src="{{Vite::asset('resources/images/about-us/icon-1.svg')}}" alt="Icon">
                        </div>
                        <p class="flex-1 font-medium font-heading text-gray-title">We have more than 10 years of experience</p>
                    </div>

                    <div class="absolute bg-white shadow-3xl p-5 flex items-center gap-5 rounded-10 left-[145px] bottom-[-38px] w-[352px]">
                        <div class="bg-primary-500 rounded-5 h-[63px] w-[63px] flex items-center justify-center">
                            <img src="{{Vite::asset('resources/images/about-us/icon-2.svg')}}" alt="Icon">
                        </div>
                        <p class="flex-1 font-medium font-heading text-gray-title">We use professional and experienced person</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
