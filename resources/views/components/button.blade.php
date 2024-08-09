@props([
    'type' => 'primary',
    'icon' => null,
    'iconSize' => 'size-4',
    'size' => 'md'
])
<?php
$paddings = match ($size) {
    'sm' => 'px-5 py-4',
    'md' => 'px-[31px] py-5',
};

$classes = match ($type) {
    'secondary' => "bg-secondary hover:bg-secondary-600 font-heading text-white text-lg rounded $paddings",
    default => "bg-primary-500 hover:bg-secondary font-heading text-white text-lg rounded $paddings",
};
?>

@isset($attributes->href)
    <a {{$attributes->merge(['class' => "$classes flex items-center gap-4 leading-none"])}}>
        {{ $slot }}

        @if($icon === 'arrow-right')
            <x-arrow-right :class="$iconSize" stroke-width="4"/>
        @endif
    </a>
@else
    <button {{$attributes->merge(['class' => "$classes flex items-center gap-4 leading-none"])}}>
        {{ $slot }}

        @if($icon === 'arrow-right')
            <x-arrow-right :class="$iconSize" stroke-width="4"/>
        @endif
    </button>
@endisset
