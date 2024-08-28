<header class="absolute top-0 xl:top-7 left-0 right-0 py-5 xl:py-0 bg-white xl:bg-white/75 rounded-none xl:rounded-5 shadow-2xl text-gray-title w-full flex justify-between items-center container mx-auto z-20">

    <a href="{{route('home')}}">
        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Logo" width="150" class="w-[100px] xl:w-[130px] 2xl:w-[150px] h-auto">
    </a>

    <x-layout.navigation/>

    <div class="hidden xl:block">
        <x-button href="{{ Route::current() === 'home' ? '' : route('home')}}#book-appointment" type="primary" icon="arrow-right">Get a Quote</x-button>
    </div>
</header>
