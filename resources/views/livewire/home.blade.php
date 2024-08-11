<div>
    <x-home.hero/>

    @if(count($features))
        <x-home.features-v2 :features="$features"/>
    @endif

    <x-home.about-us/>

    @if(count($services))
        <x-sections.services :services="$services"/>
    @endif

    @if(count($projects))
        <x-home.projects :projects="$projects"/>
    @endif

    @if(count($testimonials))
        <x-home.testimonials :testimonials="$testimonials"/>
    @endif

    <x-sections.counter/>

    <x-home.contact-us/>

</div>

