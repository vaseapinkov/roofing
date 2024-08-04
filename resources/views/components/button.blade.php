@props([
    'type' => 'primary',
    'icon' => null,
    'iconSize' => 'size-4',
])
@php
    $classes = match ($type) {
            'secondary' => 'bg-gray-500 hover:bg-gray-700 text-white py-2 px-4 rounded',
            default => 'bg-primary-500 hover:bg-secondary font-heading text-white text-lg px-[31px] py-5 rounded',
        };
@endphp
<a {{$attributes->merge(['class' => "$classes flex items-center gap-4 leading-none"])}}>
    {{ $slot }}

    @if($icon === 'arrow-right')
        <x-arrow-right :class="$iconSize" stroke-width="4"/>
    @endif
</a>
