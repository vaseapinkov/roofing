<?php
$projects = \App\Models\Project::where('show_on_home_page', true)->get();
?>
<section class="pt-[120px] pb-[90px] bg-no-repeat overflow-hidden bg-cover" style="background-image:url({{Vite::asset('resources/images/project_bg.jpg')}});">
    <div class="container">

        <div class="flex flex-col 2xl:flex-row gap-10 2xl:gap-0 justify-between items-end mb-[50px] text-center">
            <x-section-title class="!mb-0" :alt-colors="true" :centred="false" title="Explore Our Latest Projects" sub-title="Latest Projects"/>
            <x-button class="w-fit h-fit mx-auto 2xl:mx-0" icon="arrow-right">View all projects</x-button>
        </div>

        <div class="flex flex-col gap-y-8">

            @foreach($projects as $project)
                <div class="z-10 relative group flex flex-col 2xl:flex-row gap-4 2xl:gap-0 items-start 2xl:items-center justify-between py-[20px] 2xl:py-[10px] px-[20px] 2xl:px-[50px] hover:bg-gray-light transition-all duration-300 ease-in bg-primary-500 rounded-10 min-h-[180px]">

                    <img class="2xl:hidden rounded-5" src="{{asset('storage/' .$project->home_page_image)}}" alt="Project Image">

                    <div class="font-heading w-[50%] overflow-hidden">
                        <div class="group-hover:-mt-[50%] group-hover:opacity-0 transition-all duration-500 ease-in">
                            <p class="text-secondary text-lg mb-2">{{$project->sub_title}}</p>
                            <h4 class="text-white font-bold text-2xl">{{$project->name}}</h4>
                        </div>
                    </div>
                    <div class="2xl:absolute 2xl:w-[32%] 2xl:opacity-0 group-hover:opacity-100 transition-all duration-700">
                        <p class="hidden 2xl:block text-heading text-primary-500 text-lg mb-2">{{$project->sub_title}}</p>
                        <p class="text-white 2xl:text-gray-body">{{$project->home_page_description}}</p>
                    </div>

                    <div class="hidden 2xl:block relative w-full">
                        <div class="absolute z-100 transform left-[120px] -translate-y-1/2 rotate-[19deg]">
                            <img class="rounded-20 max-h-0 opacity-0 group-hover:opacity-100 group-hover:max-h-[300px]  transition-all duration-500" src="{{asset('storage/' .$project->home_page_image)}}" alt="Project Image">
                        </div>
                    </div>

                    <a href="#">
                        <div class="bg-white shadow-3xl rounded-full p-3">
                            <x-arrow-right class="size-5"/>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>

    </div>
</section>
