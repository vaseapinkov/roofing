<div>
    <x-section-bradcrumbs title="Contact Us"/>

    <section class="container py-[120px] bg-white">

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
            <div class="rounded-10 p-[30px] 2xl:p-[65px]" style="background-image:url({{Vite::asset('resources/images/contact_form_bg.jpg')}});">
                <h2 class="text-gray-title font-bold text-4xl font-heading mb-4">Contact Us</h2>
                <p class="text-gray-body text-sm">Send us a message and we' ll respond as soon as possible</p>

                <form wire:submit.prevent="saveMessage">
                    <div class="mt-12 grid grid-cols-2 gap-x-6 gap-y-4">
                        <input wire:model="first_name" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4 col-span-2 sm:col-span-1" type="text" placeholder="First Name*">
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

                    <div class="grid grid-cols-1 sm:grid-cols-3 text-center items-start">
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4 flex items-center justify-center">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#FFFFFF" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                </svg>
                            </div>
                            <a href="tel:{{config('contacts.phone')}}" class="text-gray-title hover:text-primary-500 mb-1.5">{{config('contacts.phone')}}</a>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4 flex items-center justify-center">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="#FFFFFF" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                </svg>
                            </div>
                            <a href="mailto:{{config('contacts.email')}}" class="text-gray-title hover:text-primary-500 mb-1.5">{{config('contacts.email')}}</a>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="h-[60px] aspect-square bg-primary-500 rounded-full mb-4 flex items-center justify-center">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="#FFFFFF" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                </svg>
                            </div>
                            <p class="text-gray-title">{{config('contacts.address')}}</p>
                        </div>
                    </div>
                </div>

                <iframe class="w-full h-full rounded-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.5926984804687!2d-74.74084012327239!3d40.21812227147221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c159ff0021a5d9%3A0xb0d2b508b72d51b9!2sM%26R%20Roofing!5e0!3m2!1sen!2s!4v1723652667318!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </section>


</div>
