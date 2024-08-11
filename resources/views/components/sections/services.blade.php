@props(['services'])
<section class="bg-gray-light" id="services">
    <div class="container pt-[120px] pb-[90px] ">

        <x-section-title title="Our Services Are" sub-title="What We Do"/>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-3 justify-items-stretch">
            @foreach($services as $service)
                <div class="group relative overflow-hidden bg-white shadow-card rounded-5 h-full lg:min-h-[283px] 2xl:min-h-[315px]">
                    <img class="opacity-0 lg:group-hover:opacity-100 transition-all duration-500 ease-in absolute w-full h-full" src="{{Vite::asset('resources/images/services.jpg')}}" alt="Service {{$service->name}}}">
                    <div class="opacity-0 lg:group-hover:opacity-100 transition-all duration-500 ease-in absolute w-full h-full bg-gradient-to-r from-primary-500/85 to-primary-500/40 rounded-5">
                    </div>

                    <div class="py-[50px] px-[45px]">
                        <div class="lg:group-hover:-mt-[50%] lg:group-hover:opacity-0 transition-all duration-500 ease-in">
                            <div class="bg-primary-500 size-24 p-4 rounded-full flex items-center justify-center mb-[55px] shadow-glow">
                                <img class="w-full max-w-[40px] h-auto" src="{{asset('storage/' .$service->icon)}}" alt="Icon: {{$service->name}}">
                            </div>

                            <h4 class="lg:group-hover:h-5 text-2xl font-heading font-medium">{{$service->name}}</h4>
                            <h4 class="absolute top-0 right-0 px-2 text-[100px] text-clip bg-gradient-to-b from-primary-500/20 to-primary-100/0 inline-block leading-none text-transparent bg-clip-text">{{$loop->index < 10 ? "0".$loop->index+1 : $loop->index+1}}</h4>
                        </div>
                        <div class="absolute hidden lg:group-hover:flex flex-col transition-all duration-500 ease-in text-white h-[calc(100%-100px)]">
                            <h4 class="text-2xl font-heading font-medium mb-4">{{$service->name}}</h4>
                            <p class="mb-4">{{$service->home_page_description}}</p>
                            {{-- TODO: Uncomment when dedicated page ready --}}
                            {{--
                                                        <a class="flex relative group/link gap-2 items-center text-lg rounded-full px-4 py-1 w-fit mt-auto" href="#">
                                                            <div class="bg-black absolute top-0 left-0 h-9 w-9 group-hover/link:w-full transition-all duration-500 ease-out z-0 rounded-full"></div>

                                                            <p class="z-10">Read More</p>
                                                            <x-arrow-right stroke-width="4" class="size-4 z-10"/>
                                                        </a>
                                                        --}}
                        </div>
                    </div>
                </div>
            @endforeach

            @if(count($services) === 8)
                <div class="hidden xl:flex min-h-[100px] bg-primary-500 rounded-5 items-center justify-center">
                    <a class="flex relative group/link gap-2 items-center text-lg rounded-full px-4 py-1 w-fit" href="#book-appointment">
                        <div class="bg-secondary absolute top-0 left-0 h-12 w-12 group-hover/link:w-full transition-all duration-500 ease-out z-0 rounded-full"></div>

                        <p class="z-10 text-white font-heading font bold text-3xl">Book Appointment</p>
                        <x-arrow-right stroke-width="4" class="size-7 z-10 text-white"/>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
