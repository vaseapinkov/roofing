@props([
    'type' => 'primary',
    'icon' => null,
    'iconSize' => 'size-6',
])
@php
    $classes = match ($type) {
            'primary' => 'bg-primary-500 hover:bg-secondary text-white text-lg font-bold px-[31px] py-5 rounded',
            'secondary' => 'bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded',
            default => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded',
        };
@endphp
<a {{$attributes->merge(['class' => "$classes flex gap-4"])}}>
    {{ $slot }}

    @if($icon === 'arrow-right')
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="{{$iconSize}}">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    @endif
</a>
