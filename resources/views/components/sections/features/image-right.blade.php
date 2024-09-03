<section id="{{$id}}" class="{{$class}} container mx-auto py-[45px] lg:py-[90px]">

    <div class="flex flex-col-reverse lg:flex-row">
        <div class="w-full xl:w-[40%]">
            <x-section-title :centred="false" :title="$heading" :sub-title="$subHeading"/>

            <div class="text-gray-body mb-4 content">
                {!! $content !!}
            </div>

            @if(isset($ctaText) && isset($ctaLink))
                <x-button :href="$ctaLink" icon="arrow-right" class="w-fit">{{$ctaText}}</x-button>
            @endif
        </div>
        <div class="w-full xl:w-[60%]">
            <div class="flex justify-center xl:justify-end items-center relative">
                <div>
                    <img class="rounded-10 mb-12 2xl:mb-0" src="{{asset('storage/' . $image)}}" alt="About Us 1">
                </div>

                <div class="hidden lg:block absolute left-[70px] -bottom-[50px] space-y-4">
                    @foreach($features as $index => $feature)
                        <div class="bg-white shadow-3xl p-5 flex items-center gap-5 rounded-10 w-[400px]" style="margin-left: {{($index + 1) * 40}}px">
                            <div class="bg-primary-500 rounded-5 h-[63px] w-[63px] flex items-center justify-center">
                                <img src="{{asset('storage/' . $feature['icon'])}}" alt="Icon">
                            </div>
                            <p class="flex-1 font-medium font-heading text-gray-title">{{$feature['name']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
