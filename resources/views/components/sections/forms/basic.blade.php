@props(['heading', 'subHeading', 'ctaText', 'successMessage'])

<section>
    <div class="" style="background-image:url({{Vite::asset('resources/images/newsletter_bg.jpg')}});">
        <div class="bg-primary-500/80 h-full w-full py-[90px]">

            <div class="container flex flex-col xl:flex-row text-center xl:text-start justify-between">

                <x-section-title class="mb-0" alt-colors :centred="false" :title="$heading" :sub-title="$subHeading"/>


                <div class="space-y-4 flex-col items-center mx-auto xl:mx-0">
                    <form wire:submit.prevent="save" class="flex flex-row items-center mx-auto xl:mx-0">
                        <div class="flex flex-col xl:flex-row gap-5 mx-auto">
                            <input wire:model="form.email" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" name="email" type="email" placeholder="Email*">
                            <input wire:model="form.phone" class="border border-gray-light-alt rounded-5 text-gray-body text-sm px-4 py-4" name="phone" type="tel" placeholder="Phone*">
                            <x-button type="submit" class="w-fit mx-auto xl:mx-0">{{$ctaText}}</x-button>
                        </div>
                    </form>

                    @if (session('status'))
                        <div class="alert alert-success col-span-2 text-white font-medium h-0">
                            {{  $successMessage }}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
