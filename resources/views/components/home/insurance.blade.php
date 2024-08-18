<section class="py-[90px] container grid grid-cols-2 gap-16 place-items-center">

    <div class="flex items-center">
        <div class="w-[47%] flex flex-col gap-6 col-span-5 pr-6">
            <div class="relative bg-primary-500 rounded-5 rounded-tr-[50px] py-10 px-9 text-white font-heading">
                <h1 class="text-5xl font-bold">Express</h1>
                <h2 class="text-4xl font-semibold">Assessments</h2>
                <img class="absolute top-4 left-4" src="{{Vite::asset('resources/images/insurance/globe.svg')}}" alt="Icon">
            </div>

            <img class="rounded-5" src="{{Vite::asset('resources/images/insurance/photo-2.jpg')}}" alt="Photo Roofer Working">
        </div>
        <div class="w-[53%] flex flex-col gap-6">
            <img class="rounded-5" src="{{Vite::asset('resources/images/insurance/photo-1.jpg')}}" alt="Photo Roofer Working">
            <img class="rounded-5" src="{{Vite::asset('resources/images/insurance/photo-3.jpg')}}" alt="Photo Roofer Working">
        </div>
    </div>

    <div class="pr-8">
        <x-section-title :centred="false" sub-title="We got you covered" title="House Renovations Covered by Your House Insurance"/>

        <p class="text-gray-body mb-10">
            Severe weather events can lead to unexpected damage to your home, leaving you feeling overwhelmed and uncertain about the next steps. At M&R Roofing, we want to assure you that you don’t have to face this challenge alone. If your home has been affected by storms, hail, wind, or other adverse weather conditions, renovations, including roof repairs or replacements, may be covered by your house insurance.
        </p>

        <div class="grid grid-cols-2 gap-10">

            <div class="flex gap-6 items-center">
                <div class="flex items-center justify-center rounded-5 h-16 aspect-square bg-primary-500">
                    <img class="max-h-14 max-w-14" src="{{Vite::asset('resources/images/insurance/icon-1.svg')}}" alt="Icon">
                </div>

                <h4 class="text-gray-title font-heading text-xl font-semibold">
                    Insurance Claim Assistance
                </h4>
            </div>

            <div class="flex gap-6 items-center">
                <div class="flex items-center justify-center rounded-5 h-16 aspect-square bg-primary-500">
                    <img class="max-h-14 max-w-14" src="{{Vite::asset('resources/images/insurance/icon-2.svg')}}" alt="Icon">
                </div>

                <h4 class="text-gray-title font-heading text-xl font-semibold">
                    Fast Approval
                </h4>
            </div>

        </div>
    </div>

</section>
