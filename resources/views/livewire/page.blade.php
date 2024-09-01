<div>
    @foreach($page->content as $content)
        @if($content['type'] === 'hero')
            <x-sections.hero :heading="$content['data']['heading']" :sub-heading="$content['data']['sub_heading']" :cta-link="$content['data']['cta_link']" :cta-text="$content['data']['cta_text']"/>
        @elseif($content['type'] === 'simple-card-list')

            <x-sections.simple-card-list
                :items="$content['data']['items']"
            />

        @elseif($content['type'] === 'feature-section')

            <x-sections.feature
                :layout="$content['data']['layout']"
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
                :content="$content['data']['content']"
                :image="$content['data']['image']"
                :cta-link="$content['data']['cta_link']"
                :cta-text="$content['data']['cta_text']"
                :features="$content['data']['features']"
            />

        @elseif($content['type'] === 'counter-section')

            <x-sections.counter
                :items="$content['data']['items']"
            />

        @elseif($content['type'] === 'simple-card-grid')

            @php
                $strategy = match($content['data']['list_items']) {
                    'services' => new \App\Services\ContentTransformations\ServicesTransformation(),
                    'custom' => new \App\Services\ContentTransformations\CustomListItemsTransformation(),
                };

                $transformer = new \App\Services\ContentTransformations\ContentTransformer($strategy);
                $data = $transformer->transform($content);
            @endphp

            <x-sections.simple-card-grid
                :ctaText="$content['data']['cta_text']"
                :ctaLink="$content['data']['cta_link']"
                :items="$data"
            />

        @elseif($content['type'] === 'testimonials-slider')

            <x-sections.testimonials
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
            />

        @elseif($content['type'] === 'contact-form')

            <x-sections.contact-form
                :heading="$content['data']['heading']"
                :sub-heading="$content['data']['sub_heading']"
                :layout="$content['data']['layout']"
                :ctaText="$content['data']['cta_text']"
                :success-message="$content['data']['success_message']"
            />

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
