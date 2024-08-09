<div>
    <x-section-bradcrumbs title="Contact Us"/>

    <section class="container py-[120px] bg-white">

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
            <div class="rounded-10 p-[30px] 2xl:p-[65px]" style="background-image:url({{Vite::asset('resources/images/contact_form_bg.jpg')}});">
                <h2 class="text-gray-title font-bold text-4xl font-heading mb-4">Contact Us</h2>
                <p class="text-gray-body text-sm">Send us a message and we' ll respond as soon as possible</p>

                <form wire:submit.prevent="saveMessage">
                    <div class="mt-12 grid grid-cols-2 gap-x-6 gap-y-4">
                        <input wire:model="firs_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" placeholder="First Name*">
                        <input wire:model="last_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" placeholder="Last Name*">
                        <input wire:model="email" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" placeholder="Email Address*">
                        <input wire:model="phone" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" placeholder="Phone*">
                        <input wire:model="subject" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" type="text" placeholder="Subject">
                        <textarea wire:model="message" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2" rows="8" placeholder="Your message here"></textarea>

                        <x-button type="submit" class="col-span-2 justify-center" icon="arrow-right">Send Message</x-button>

                        @if (session('status'))
                            <div class="alert alert-success col-span-2 text-gray-title h-0">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>

            <div class="grid grid-rows-2 gap-8">
                <div class="bg-gray-light rounded-10 p-[30px] 2xl:p-[65px]">
                    <h2 class="text-gray-title font-bold text-4xl font-heading mb-4">Need Any Help</h2>
                    <p class="text-gray-body text-sm mb-8">Call us or message and we' ll respond as soon as possible</p>

                    <div class="grid grid-cols-1 sm:grid-cols-3 text-center">
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4"></div>
                            <a href="#" class="text-gray-title hover:text-primary-500 mb-1.5">+(323) 9847 3847 383</a>
                            <a href="#" class="text-gray-title hover:text-primary-500">+(323) 9847 3847 383</a>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4"></div>
                            <a href="#" class="text-gray-title hover:text-primary-500 mb-1.5">info@gmail.com</a>
                            <a href="#" class="text-gray-title hover:text-primary-500">sales@gmail.com</a>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4"></div>
                            <p class="text-gray-title">
                                4517 Washington Ave. 32 <br>
                                Manchester, Road USA
                            </p>
                        </div>
                    </div>
                </div>


                <iframe class="w-full h-full rounded-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d406880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f131!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </section>


</div>
