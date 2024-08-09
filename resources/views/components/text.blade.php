@props([
    'tag' => 'p',
    'size' => 'body',
    'color' => 'body',
])

<?php
$color = match ($color){
    'white' => 'text-white'
};

$size = match ($size){
    'h1' => 'text-[38px] lg:text-[50px] font-bold leading-tight'
};

$classes = implode(' ', [$size, $color]);
?>

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    {{$slot}}
</{{ $tag }}>
