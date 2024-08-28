@props(['navLinks'])
<div class="absolute top-0 left-0 right-0 h-screen w-screen bg-white z-10"  :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen}"></div>

<nav :class="{'flex': mobileMenuOpen, 'hidden': !mobileMenuOpen}" class="hidden flex-col absolute top-18 w-full z-10 lg:hidden bg-white">
    @foreach($navLinks as $navLink)
        <a class="py-6 px-5 font-bold hover:text-secondary text-gray-title" href="{{$navLink['link']}}">
            {{$navLink['label']}}
        </a>
    @endforeach
</nav>
