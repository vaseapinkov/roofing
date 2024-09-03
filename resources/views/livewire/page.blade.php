<div>
    @foreach($page->content as $content)
        @if($content['type'] === 'hero')
            <x-sections.hero
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
                :cta-link="$content['data']['cta_link']"
                :cta-text="$content['data']['cta_text']"
                :background-filter="$content['data']['background_filter']"
            />
        @elseif($content['type'] === 'card-list-section')

            <x-sections.card-list-section
                :items="$content['data']['items']"
                :overlap="$content['data']['overlap']"
                :has-background-image="$content['data']['has_background_image']"
                :background-image="$content['data']['background_image']"
            />

        @elseif($content['type'] === 'feature-section')

            @if($content['data']['layout'] === 'image-right')
                <x-sections.features.image-right
                    :heading="$content['data']['heading']"
                    :sub-heading="$content['data']['sub_heading']"
                    :content="$content['data']['content']"
                    :image="$content['data']['image']"
                    :cta-link="$content['data']['cta_link']"
                    :cta-text="$content['data']['cta_text']"
                    :features="$content['data']['features']"
                />
            @elseif($content['data']['layout'] === 'image-left')
                <x-sections.features.image-left
                    :heading="$content['data']['heading']"
                    :sub-heading="$content['data']['sub_heading']"
                    :content="$content['data']['content']"
                    :image="$content['data']['image']"
                    :cta-link="$content['data']['cta_link']"
                    :cta-text="$content['data']['cta_text']"
                    :features="$content['data']['features']"
                />
            @endif

        @elseif($content['type'] === 'counter-section')

            <x-sections.counter
                :items="$content['data']['items']"
            />

        @elseif($content['type'] === 'services-section')

            <x-sections.services-section
                :ctaText="$content['data']['cta_text']"
                :ctaLink="$content['data']['cta_link']"
            />

        @elseif($content['type'] === 'testimonials-slider')

            <x-sections.testimonials
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
            />

        @elseif($content['type'] === 'contact-form')

            @if($content['data']['layout'] === 'book-appointment')
                <x-sections.forms.book-appointment
                    :id="$content['data']['custom_id']"
                    :class="$content['data']['custom_classes']"
                    :heading="$content['data']['heading']"
                    :sub-heading="$content['data']['sub_heading']"
                    :ctaText="$content['data']['cta_text']"
                    :success-message="$content['data']['success_message']"
                />
            @elseif($content['data']['layout'] === 'basic')
                <x-sections.forms.basic
                    :heading="$content['data']['heading']"
                    :sub-heading="$content['data']['sub_heading']"
                    :ctaText="$content['data']['cta_text']"
                    :success-message="$content['data']['success_message']"
                />
            @endif

        @elseif($content['type'] === 'text_section')

            <x-sections.text :content="$content['data']['content']"/>

        @elseif($content['type'] === 'steps-section')

            <x-sections.steps
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
                :items="$content['data']['items']"/>

        @elseif($content['type'] === 'partners-section')

            <x-sections.partners
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
            />

        @elseif($content['type'] === 'projects-section')

            <x-sections.projects
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
            />

        @endif

    @endforeach

</div>
