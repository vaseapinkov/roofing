<?php
$counterData = [
    ['name' => 'Projects completed', 'number' => '5739', 'icon' => 'counter_icon01.svg'],
    ['name' => 'Satisfied Clients', 'number' => '4312', 'icon' => 'counter_icon02.svg'],
    ['name' => 'Experienced Staff', 'number' => '78', 'icon' => 'counter_icon03.svg'],
];

if (!isset($items)) $items = $counterData;
?>
<section class="pt-[120px] pb-[90px] bg-primary-500">

    <div class="container ">
        <div class="bg-gray-light rounded-10 py-10 flex flex-col sm:flex-row flex-wrap gap-10 2xl:gap-0 justify-around">

            @foreach($items as $item)
                <div class="font-heading text-center">
                    <div class="bg-primary-500 rounded-full mb-5 w-[80px] aspect-square flex items-center justify-center mx-auto transform hover:translate-y-[5px] transition duration-500">
                        <img src="{{asset($item['icon'])}}" alt="Counter Icon">
                    </div>
                    <h4 class="text-gray-title text-3xl font-bold mb-1.5">{{$item['number']}}</h4>
                    <p class="text-gray-body">{{$item['name']}}</p>
                </div>
            @endforeach

        </div>
    </div>

</section>
