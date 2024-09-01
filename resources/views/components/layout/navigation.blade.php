@props(['navLinks'])
<nav class="hidden lg:flex gap-10">
    @foreach($navLinks as $navLink)
        <a class="py-8 px-5 font-bold hover:text-secondary text-gray-title" href="{{url($navLink['link'])}}">
            {{$navLink['label']}}
        </a>
    @endforeach
</nav>
