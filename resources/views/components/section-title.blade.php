@props([
    'title',
    'subTitle',
    'centred' => true,
    'altColors' => false
])

<div {{$attributes->merge(['class' => 'mb-8'])}}>
    <h3 class="{{$centred ? 'text-center' : ''}} text-xl text-secondary font-heading mb-4">{{$subTitle}}</h3>
    <h2 class="{{$centred ? 'text-center' : ''}} text-4xl {{$altColors ? 'text-white' : 'text-gray-title'}} font-heading font-bold">{{$title}}</h2>
</div>
