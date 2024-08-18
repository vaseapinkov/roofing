<?php
$partners = [
    [
        'path' => 'images/partners/gaf.svg',
        'alt' => 'GAF Logo',
        'link' => 'https://www.gaf.com/',
    ],
    [
        'path' => 'images/partners/james-hardie.svg',
        'alt' => 'James Hardie Logo',
        'link' => 'https://www.jameshardie.com/',
    ],
    [
        'path' => 'images/partners/owens-corning.png',
        'alt' => 'Owners Corning Logo',
        'link' => 'https://www.owenscorning.com/en-us',
    ],
];
?>

<div class="flex flex-col lg:flex-row gap-10 justify-around w-full">

    @foreach($partners as $partner)
        <a href="{{$partner['link']}}" class="py-8 px-12 bg-white shadow-card rounded-10">
            <img class="mx-auto h-20 w-auto" src="{{asset($partner['path'])}}" alt="{{$partner['alt']}}">
        </a>
    @endforeach

</div>
