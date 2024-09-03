@props(['id', 'class', 'heading', 'subHeading', 'ctaText', 'successMessage'])
<section id="{{$id}}" class="{{$class}}">

    <div class="container py-[90px]">

        <x-section-title :centred="false" :title="$heading" :sub-title="$subHeading"/>

        <div class="rounded-10 p-[20px] sm:p-[35px] xl:p-[65px] grid grid-cols-12" style="background-image:url({{Vite::asset('resources/images/appointment_bg.jpg')}});">
            <form class="col-span-12 lg:col-span-7" wire:submit.prevent="save">
                <div class="grid grid-cols-2 gap-x-6 gap-y-4">
                    <input wire:model="form.first_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" name="first-name" placeholder="First Name*">
                    <input wire:model="form.last_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" name="last-name" placeholder="Last Name*">
                    <input wire:model="form.email" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="email" name="email" placeholder="Email Address*">
                    <input wire:model="form.phone" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="tel" name="phone" placeholder="Phone*">
                    <input wire:model="form.address" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" type="text" name="address" placeholder="Address*">

                    <textarea wire:model="form.message" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" rows="8" placeholder="Your message here"></textarea>

                    <x-button type="submit" class="col-span-2 justify-center" icon="arrow-right">{{$ctaText}}</x-button>

                    @if (session('status'))
                        <div class="alert alert-success col-span-2 text-gray-title h-0">
                            {{ $successMessage }}
                        </div>
                    @endif
                </div>
            </form>
            <div class="hidden lg:block col-span-5 relative">
                <div class="absolute -bottom-[100px] -right-[35px] xl:-bottom-[148px] xl:-right-[65px] w-full">
                    <img class="scale-[0.8]" src="{{Vite::asset('resources/images/appointment_img.png')}}" alt="Builder">
                </div>
            </div>
        </div>
    </div>
</section>
