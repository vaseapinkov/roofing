@props(['aboutUs', 'logo', 'phone', 'instagramLink', 'facebookLink', 'youtubeLink', 'instagramPosts'])

<footer class="bg-cover" style="background-image:url({{Vite::asset('resources/images/footer_bg.jpg')}});" alt="Construction Illustration">
    <div class="container py-[90px]">

        <div class="grid grid-cols-2 md:grid-cols-2 2xl:grid-cols-4 gap-12 lg:gap-8 justify-items-start mb-10">
            <div class="col-span-2 md:col-span-2 max-w-[400px]">
                <h4 class="text-2xl text-white font-bold mb-4">About Us</h4>
                <p class="text-gray-light-alt mb-8">{{$aboutUs}}</p>
            </div>
            <div class="col-span-2 md:col-span-2">
                <h4 class="text-2xl text-white font-bold mb-4">Latest Instagram posts</h4>
                <div class="grid grid-cols-6 gap-4">
                    @foreach($instagramPosts as $post)
                        <a href="{{$post['instagram_link']}}" target="_blank">
                            <img class="rounded-5 w-[120px] aspect-square" src="{{asset($post['image'])}}" alt="Instagram Image">
                        </a>
                    @endforeach
                </div>
            </div>
            {{--  TODO: Uncomment when Deicated Pages are redy  --}}
            {{--
                        <div class="col-span-2 sm:col-span-1">
                            <?php $services = \App\Models\Service::where('show_on_home_page', true)->get(); ?>

                            <h4 class="text-2xl text-white font-bold mb-4">Our Services</h4>
                            <ul class="space-y-2">
                                @foreach($services as $service)
                                    <li class="text-gray-light-alt"> >> {{$service->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <h4 class="text-2xl text-white font-bold mb-4">Quick Links</h4>
                            <ul class="space-y-2">
                                @foreach($services as $service)
                                    <li class="text-gray-light-alt"> >> {{$service->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    --}}
        </div>

        <div class="flex flex-col md:flex-row gap-8 md:gap-0 justify-between items-center px-8 py-6 md:py-4 bg-primary-600 rounded-5">
            <div>
                <img src="{{asset($logo)}}" alt="Logo">
            </div>
            <div class="bg-primary-500 flex flex-col md:flex-row gap-4 md:gap-8 p-4 rounded-5 text-start md:text-center">
                <div class="hidden bg-white w-[70px] aspect-square lg:flex items-center justify-center rounded-5 mx-auto md:mx-0">
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="fill-black" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                    </svg>
                </div>
                <div class="text-white font-heading text-center md:text-start">
                    <p class="text-lg">Phone No</p>
                    <a href="tel:{{$phone}}" class="text-2xl font-semibold">{{$phone}}</a>
                </div>
            </div>

            <div class="flex gap-2 lg:gap-8 items-center flex-col lg:flex-row">
                <p class="text-2xl text-white font-semibold">Follow Us:</p>

                <div class="flex gap-2 items-center">
                    <a href="{{$instagramLink}}" target="_blank" class="w-[42px] aspect-square bg-white rounded-full text-primary-500 flex items-center justify-center">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </a>
                    <a href="{{$facebookLink}}" target="_blank" class="w-[42px] aspect-square bg-white rounded-full text-primary-500 flex items-center justify-center">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/>
                        </svg>
                    </a>
                    <a href="{{$youtubeLink}}" target="_blank" class="w-[42px] aspect-square bg-white rounded-full text-primary-500 flex items-center justify-center">
                        <svg class="size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-primary-600 pt-4 pb-6">
        <div class="container flex justify-between text-white">
            <p class="text-sm">© Copyright 2023. All Right Reserved</p>

            <div class="flex">
                <a href="{{url('privacy-policy')}}" class="px-4 border-r border-gray-light">Privacy Policy</a>
                <a href="{{url('terms-and-conditions')}}" class="px-4">Terms & Condition</a>
            </div>
        </div>
    </div>
</footer>
