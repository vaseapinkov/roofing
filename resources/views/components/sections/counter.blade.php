<?php
$counterData = [
    ['name' => 'Projects completed', 'number' => '1500', 'icon' => 'counter_icon01.svg'],
    ['name' => 'Satisfied Clients', 'number' => '8562', 'icon' => 'counter_icon02.svg'],
    ['name' => 'Experienced Staff', 'number' => '450', 'icon' => 'counter_icon03.svg'],
    ['name' => 'Awards Win', 'number' => '38', 'icon' => 'counter_icon04.svg'],
];
?>
<section class="container pt-[120px] pb-[90px]">

    <div class="bg-gray-light rounded-10 py-10 flex flex-col 2xl:flex-row gap-10 2xl:gap-0 justify-around">

        @foreach($counterData as $counter)
            <div class="font-heading text-center">
                <div class="bg-primary-500 rounded-full mb-5 w-[80px] aspect-square flex items-center justify-center mx-auto transform hover:translate-y-[5px] transition duration-500">
                    <img src="{{Vite::asset('resources/images/counter/'.$counter['icon'])}}" alt="Counter Icon">
                </div>
                <h4 class="text-gray-title text-3xl font-bold mb-1.5">{{$counter['number']}}</h4>
                <p class="text-gray-body">{{$counter['name']}}</p>
            </div>
        @endforeach

    </div>

</section>
