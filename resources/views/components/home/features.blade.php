<?php
$features = \App\Models\Feature::where('show_on_home_page', true)->get();
?>
<section id="features" class="container mx-auto pt-[120px] pb-[90px]">

    <div class="grid grid-cols-1 2xl:grid-cols-3 justify-items-stretch place-content-center flex-wrap gap-x-4 gap-y-10">
        @foreach($features as $feature)
            <div class="group relative z-1 px-[20px] 2xl:px-[50px] before:w-full before:bg-primary-100 before:h-[150px] before:absolute before:top-1/2 before:transform before:-translate-y-1/2 before:left-0 before:-z-10 before:rounded-lg">
                <div class="relative flex flex-col h-full bg-white shadow-card px-[25px] pt-[35px] pb-[30px] 2xl:px-[48px] 2xl:pt-[45px] 2xl:pb-[50px] rounded-10 overflow-hidden">
                    <h4 class="text-xl text-gray-title font-heading font-bold mb-2">
                        {{$feature->name}}
                    </h4>
                    <p class="text-gray-body mb-4">
                        {{$feature->home_page_description}}
                    </p>

                    <a class="flex gap-4 items-center mt-auto text-gray-body group-hover:text-primary-500 transition duration-300">
                        <div class="bg-white shadow-3xl rounded-full p-3">
                            <x-arrow-right class="size-5"/>
                        </div>

                        <span class="flex-1">Read More</span>
                    </a>

                    <div class="absolute w-[140px] 2xl:w-[190px] aspect-square rounded-full -bottom-[56px] 2xl:-bottom-[78px] -right-[50px] 2xl:-right-[58px] bg-primary-100">
                        <div class="absolute z-1 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-[120px] 2xl:w-[155px] aspect-square rounded-full p-[24px] 2xl:p-[40px] bg-primary-400 group-hover:bg-primary-500 transition duration-300">
                            <img class="group-hover:brightness-0 group-hover:invert transition duration-300" src="{{asset('storage/' . $feature->home_page_icon)}}" alt="Icon for {{$feature->name}}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
