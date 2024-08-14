@props(['features'])

<section class="bg-center bg-no-repeat bg-cover pb-[90px]" style="background-image: url('{{Vite::asset('resources/images/features-bg.jpg')}}')">
    <div class="container">
        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8 -mt-36 z-10">

            @foreach($features as $feature)
                <div class="bg-white px-4 pt-4 pb-5 shadow-card rounded-5 flex flex-col">
                    <h4 class="text-xl font-bold font-heading mt-3">{{$feature->name}}</h4>
                    <p class="text-gray-body font-body mb-7">{{$feature->home_page_description}}</p>

                    <div class="relative overflow-hidden mt-auto">
                        <img class="hover:scale-110 transition-all duration-300 ease-in rounded-10 w-full h-auto" src="{{asset("storage/$feature->home_page_image")}}" alt="Image: {{$feature->name}}">
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</section>
