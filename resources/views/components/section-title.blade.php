@props([
    'title',
    'subTitle',
    'centred' => true,
])
<h3 class="{{$centred ? 'text-center' : ''}} text-xl text-primary-500 font-heading mb-4">{{$subTitle}}</h3>
<h2 class="{{$centred ? 'text-center' : ''}} text-4xl text-gray-title font-heading font-bold mb-6">{{$title}}</h2>
