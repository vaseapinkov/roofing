<section {{$attributes->merge()}} class="container mx-auto py-[45px] lg:py-[90px]">

    <div class="flex flex-col lg:flex-row">
        <div class="w-full xl:w-[50%]">
            <img src="{{asset('storage/' . $image)}}" alt="Image">
        </div>
        <div class="w-full xl:w-[50%] pl-8 my-auto">
            <x-section-title :centred="false" :title="$heading" :sub-title="$subHeading"/>

            <div class="text-gray-body mb-10 content">
                {!! $content !!}
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mb-10">

                @foreach($features as $index => $feature)
                    <div class="flex gap-6 items-center">
                        <div class="flex items-center justify-center rounded-5 h-16 aspect-square bg-primary-500">
                            <img class="max-h-14 max-w-14" src="{{asset('storage/' . $feature['icon'])}}" alt="Icon">
                        </div>

                        <h4 class="text-gray-title font-heading text-xl font-semibold">
                            {{$feature['name']}}
                        </h4>
                    </div>
                @endforeach
            </div>


            @if(isset($ctaText) && isset($ctaLink))
                <x-button wire:navigate.hover :href="$ctaLink" icon="arrow-right" class="w-fit">{{$ctaText}}</x-button>
            @endif
        </div>
    </div>

</section>
