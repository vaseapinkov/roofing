<section class="py-[90px] container">
    <x-section-title title="Explore Our Latest Projects" sub-title="Latest Projects"/>

    <div class="flex flex-row flex-wrap gap-5 justify-center">
        @foreach(\App\Models\Project::all() as $project)
            <div class="w-[30%] relative group overflow-hidden">
                <div class="absolute top-0 left-0 lg:-translate-x-[100%] group-hover:translate-x-0 transition duration-300 bg-primary-500/80 text-white rounded-10 h-[85%] w-[90%] pt-[20%] lg:pt-[30%] px-4">
                    <a href="{{route('projects.show', $project)}}" wire:navigate.hover>
                        <p class="mb-1.5 font-body">{{$project->project_type}}</p>
                    </a>
                    <a href="{{route('projects.show', $project)}}" wire:navigate.hover>
                        <h4 class="mb-3 text-xl font-heading font-semibold">{{$project->name}}</h4>
                    </a>

                    <a href="{{route('projects.show', $project)}}" wire:navigate.hover>
                        <div class="bg-white shadow-3xl rounded-full p-2 text-gray-title w-fit">
                            <x-arrow-right class="lg:size-5 size-4"/>
                        </div>
                    </a>
                </div>
                <img class="w-full max-w-fit rounded-10" src="{{asset($project->home_page_image)}}" alt="Project: {{$project->name}} ">
            </div>
        @endforeach
    </div>
</section>
