@props(['projects'])

<section class="pt-[120px] pb-[90px] bg-no-repeat overflow-hidden bg-cover" style="background-image:url({{Vite::asset('resources/images/project_bg.jpg')}});">
    <div class="container">

        <div class="flex flex-col lg:flex-row gap-10 lg:gap-0 justify-between lg:items-end mb-[50px] text-center lg:text-start">
            <x-section-title class="!mb-0" :alt-colors="true" :centred="false" title="Explore Our Latest Projects" sub-title="Latest Projects"/>
            <x-button href="{{route('projects.index')}}" class="w-fit h-fit mx-auto lg:mx-0" icon="arrow-right">View all projects</x-button>
        </div>

        <div class="flex flex-col gap-y-8">

            @foreach(\App\Models\Project::all() as $project)
                <div class="z-10 relative group flex flex-col lg:flex-row gap-4 lg:gap-0 items-start lg:items-center justify-between py-[20px] lg:py-[10px] px-[20px] lg:px-[50px] lg:hover:bg-gray-light transition-all duration-300 ease-in bg-primary-500 rounded-10 min-h-[180px]">

                    <a href="{{route('projects.show', $project)}}">
                        <img class="w-full lg:hidden rounded-5" src="{{asset('storage/' .$project->home_page_image)}}" alt="Project Image">
                    </a>

                    <div class="font-heading w-[50%] overflow-hidden">
                        <div class="lg:group-hover:-mt-[50%] lg:group-hover:opacity-0 transition-all duration-500 ease-in">
                            <a href="{{route('projects.show', $project)}}">
                                <p class="text-secondary text-lg mb-2">{{$project->project_type}}</p>
                                <h4 class="text-white font-bold text-2xl">{{$project->name}}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="lg:absolute lg:w-[32%] lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-700">
                        <a href="{{route('projects.show', $project)}}">
                            <p class="hidden lg:block text-heading text-primary-500 text-lg mb-2">{{$project->project_type}}</p>
                            <p class="text-white lg:text-gray-body">{{$project->home_page_description}}</p>
                        </a>
                    </div>

                    <div class="hidden lg:block relative w-full">
                        <div class="absolute z-100 transform left-[120px] -translate-y-1/2 rotate-[19deg]">
                            <img class="rounded-20 max-h-0 opacity-0 lg:group-hover:opacity-100 lg:group-hover:max-h-[300px]  transition-all duration-500" src="{{asset('storage/' .$project->home_page_image)}}" alt="Project Image">
                        </div>
                    </div>

                    <a href="{{route('projects.show', $project)}}">
                        <div class="bg-white shadow-3xl rounded-full p-3">
                            <x-arrow-right class="size-5"/>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>

    </div>
</section>
