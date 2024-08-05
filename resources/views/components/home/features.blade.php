<?php
// TODO: Replace with features
$services = \App\Models\Feature::where('show_on_home_page', true)->get();
?>
<section id="features" class="container mx-auto pt-[120px] pb-[90px]">

    <div class="flex place-content-center flex-wrap gap-x-4 gap-y-10">
        @foreach($services as $service)
            <div class="w-[32.5%] group relative z-1 px-[50px] before:w-full before:bg-primary-100 before:h-[150px] before:absolute before:top-1/2 before:transform before:-translate-y-1/2 before:left-0 before:-z-10 before:rounded-lg">
                <div class="relative flex flex-col h-full bg-white shadow-card px-[48px] pt-[45px] py-[50px] rounded-10 overflow-hidden">
                    <h4 class="text-xl text-gray-title font-heading font-bold mb-2">
                        {{$service->name}}
                    </h4>
                    <p class="text-gray-body mb-4">
                        {{$service->home_page_description}}
                    </p>

                    <a class="flex gap-4 items-center mt-auto text-gray-body group-hover:text-primary-500 transition duration-300">
                        <div class="bg-white shadow-3xl rounded-full p-3">
                            <x-arrow-right class="size-5"/>
                        </div>

                        <span class="flex-1">Read More</span>
                    </a>

                    <div class="absolute w-[190px] h-[190px] rounded-full -bottom-[78px] -right-[58px] bg-primary-100">
                        <div class="absolute z-1 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-[155px] h-[155px] rounded-full  p-[40px] bg-primary-400 group-hover:bg-primary-500 transition duration-300">
                            <img class="group-hover:brightness-0 group-hover:invert transition duration-300" src="{{asset($service->home_page_icon)}}" alt="Icon for {{$service->name}}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
