<div class="container py-[120px] grid grid-cols-12 gap-8">

    <div class="col-span-12 xl:col-span-8 content">
        <div>
            {!! $project->content !!}
        </div>
    </div>

    <div class="col-span-12 xl:col-span-4 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-1 gap-12 h-fit">

        <div>
            <div class="bg-white shadow-card rounded-10 py-8 px-8">
                <h4 class="text-2xl font-semibold font-heading text-gray-title">
                    Project Details
                </h4>

                <div class="grid grid-cols-2 gap-y-4 mt-6">
                    <p class="font-medium text-gray-title">Start Date:</p>
                    <p class="text-gray-body">{{$project->start_date->format('d M Y')}}</p>

                    <p class="font-medium text-gray-title">End Date:</p>
                    <p class="text-gray-body">{{$project->end_date->format('d M Y')}}</p>

                    @isset($project->client_name)
                        <p class="font-medium  text-gray-title">Client:</p>
                        <p class="text-gray-body">{{$project->client_name}}</p>
                    @endisset

                    <p class="font-medium text-gray-title">Project Typ:</p>
                    <p class="text-gray-body">{{$project->project_type}}</p>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-white shadow-card rounded-10 py-8 px-8">
                <h4 class="text-2xl font-semibold font-heading text-gray-title">
                    All our services
                </h4>

                <nav class="space-y-4 mt-8">
                    @foreach($services as $item)
                        <x-button class="w-full justify-between" type="alt" size="sm" icon="arrow-right">{{$item->name}}</x-button>
                    @endforeach
                </nav>
            </div>
        </div>

        <div>
            <div class="relative shadow-card rounded-10 py-8 px-8 overflow-hidden" style="background-image: url({{Vite::asset('resources/images/service-details/form-bg.jpg')}});">
                <div class="absolute h-full w-full top-0 left-0 bg-black/70 z-0"></div>
                <div class="z-10 relative">
                    <h4 class="text-2xl font-semibold font-heading text-white">
                        Get a free quote
                    </h4>

                    <form class="space-y-4 mt-8">
                        <input wire:model="first_name" class="w-full border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" name="first-name" placeholder="First Name*">
                        <input wire:model="email" class="w-full border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="email" name="email" placeholder="Email Address*">
                        <input wire:model="phone" class="w-full border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="tel" name="phone" placeholder="Phone*">

                        <textarea wire:model="message" class="w-full border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" rows="4" placeholder="Your message here"></textarea>

                        <x-button type="submit" class="w-full justify-center" icon="arrow-right">Contact Us</x-button>

                        @if (session('status'))
                            <div class="alert alert-success col-span-2 text-gray-title h-0">
                                {{ session('status') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="col-span-12 pt-10">
        <x-sections.partners/>
    </div>

</div>
