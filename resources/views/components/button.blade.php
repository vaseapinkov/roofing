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
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="{{$iconSize}}">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
        </svg>
    @endif
</a>
