@props([
    'id' => '',
    'class' => '',
    'items',
    'overlap',
    'hasBackgroundImage',
    'backgroundImage',
])

@php
    $classes = $overlap ? 'pb-[90px]' : 'py-[90px]';

    if ($hasBackgroundImage){
        $classes .= ' bg-center bg-no-repeat bg-cover';
    }

@endphp

<section id="{{$id}}" class="{{$classes}} {{$class}}" @if($hasBackgroundImage) style="background-image: url('{{asset('storage/' . $backgroundImage)}}')" @endif>
    <div class="container">
        <div @class(['-mt-36' => $overlap, 'relative flex flex-col lg:flex-row flex-wrap justify-around z-10 gap-y-8'])>
            @foreach($items as $item)
                <div class="max-w-[375px] lg:max-w-none lg:w-[31%] bg-white px-4 pt-4 pb-5 shadow-card rounded-5 flex flex-col  mx-auto lg:mx-0">
                    <h4 class="text-xl font-bold font-heading mt-3">{{$item['title']}}</h4>
                    <p class="text-gray-body font-body mb-7">{{$item['description']}}</p>

                    <div class="relative overflow-hidden mt-auto rounded-10">
                        <img class="hover:scale-110 transition-all duration-300 ease-in w-full h-auto" src="{{asset("storage/".$item['image'])}}" alt="Image: {{$item['title']}}">
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</section>
