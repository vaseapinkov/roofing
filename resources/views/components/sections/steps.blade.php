@props([
    'id' => '',
    'class' => '',
    'heading' => '',
    'subHeading' => '',
    'items'
])

<section id="{{$id}}" class="{{$class}} container mx-auto pt-[90px] pb-[90px]">

    <x-section-title :centred="true" :title="$heading" :sub-title="$subHeading"/>

    <div class="flex flex-col md:flex-row md:justify-center flex-wrap gap-8 gap-y-12 pt-6">

        @foreach($items as $item)
            <div class="flex flex-row items-center gap-5 md:w-[45%] xl:w-[30%]">
                <div class="relative">
                    <div class="absolute top-0 right-6 rounded-full w-10 h-10 bg-primary-500 border-[5px] border-white flex items-center justify-center font-medium font-heading text-white">
                        <span>0{{$loop->index + 1}}</span>
                    </div>
                    <img src="{{asset('storage/' . $item['image'])}}" height="122" width="80" class="h-[122px] w-[80px] max-w-none" alt="Step {{$loop->index + 1}}">
                </div>

                <div>
                    <p class="text-lg font-heading text-gray-title font-semibold">{{$item['title']}}</p>
                    <p>{{$item['description']}}</p>
                </div>

            </div>
        @endforeach

    </div>

</section>
