<nav class="hidden lg:flex gap-10">
    @foreach(\App\Enums\Navigation::getNavigationArray() as $navItem)
        @isset($navItem->options)
            <x-layout.header-dropdown :options="$navItem->options" option-name-key="name" option-url-key="link">
                {{$navItem->name}}
            </x-layout.header-dropdown>
        @else
            <a class="py-8 px-5 font-bold hover:text-secondary text-gray-title" href="{{$navItem->link}}">
                {{$navItem->name}}
            </a>
        @endif
    @endforeach
</nav>
