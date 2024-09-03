@props([
    'items',
    'heading' => '',
    'subHeading' => '',
])

<div {{$attributes->merge()}} class="pb-[90px] container">
    <x-section-title :title="$heading" :sub-title="$subHeading"/>

    <div class="flex flex-col lg:flex-row gap-10 justify-around w-full">

        @foreach(\App\Models\Partners::all() as $partner)
            <a href="{{$partner['link']}}" class="py-8 px-12 bg-white shadow-card rounded-10">
                <img class="mx-auto h-20 w-auto" src="{{asset('storage/' . $partner['image'])}}" alt="{{$partner['name']}}">
            </a>
        @endforeach

    </div>
</div>
