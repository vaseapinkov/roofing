@props([
    'class' => '',
    'strokeWidth' => '3',
    ])
<svg {{$attributes->merge(['class' => $class])}} xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="{{$strokeWidth}}" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
</svg>
