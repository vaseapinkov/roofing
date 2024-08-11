<section>
    <div class="" style="background-image:url({{Vite::asset('resources/images/newsletter_bg.jpg')}});">
        <div class="bg-primary-500/80 h-full w-full py-[90px]">

            <div class="container flex flex-col xl:flex-row text-center xl:text-start justify-between">
                <x-section-title class="mb-0" alt-colors :centred="false" title="Get in Touch with Us" sub-title="Request a Call Right Now"/>

                <div class="flex flex-row items-center mx-auto xl:mx-0">
                    <div class="flex flex-col xl:flex-row gap-5">
                        <input class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="Email*">
                        <input class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="Phone*">
                        <x-button type="primary" class="w-fit mx-auto xl:mx-0">Submit Now</x-button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
