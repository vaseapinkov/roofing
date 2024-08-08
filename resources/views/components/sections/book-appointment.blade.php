<section class="container pb-[120px]">

    <x-section-title :centred="false" title="Book Your Appointment" sub-title="Your roof require professional attention"/>

    <div class="rounded-10 p-[65px] grid grid-cols-12" style="background-image:url({{Vite::asset('resources/images/appointment_bg.jpg')}});">
            <form class="col-span-7" wire:submit.prevent="saveMessage">
                <div class="grid grid-cols-2 gap-x-6 gap-y-4">
                    <input wire:model="firs_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="First Name*">
                    <input wire:model="last_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="Last Name*">
                    <input wire:model="email" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="Email Address*">
                    <input wire:model="phone" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" type="text" placeholder="Phone*">
                    <input wire:model="address" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" type="text" placeholder="Address*">

                    <select wire:model="city" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 bg-white">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <select wire:model="state" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 bg-white">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>

                    <textarea wire:model="message" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" rows="8" placeholder="Your message here"></textarea>

                    <x-button type="submit" class="col-span-2 justify-center" icon="arrow-right">Book Now</x-button>

                    @if (session('status'))
                        <div class="alert alert-success col-span-2 text-gray-title h-0">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </form>
            <div class="col-span-5 relative">
                <div class="absolute -bottom-[65px] -right-[65px] w-full">
                    <img src="{{Vite::asset('resources/images/appointment_img.png')}}" alt="Builder">
                </div>
            </div>
    </div>

</section>
