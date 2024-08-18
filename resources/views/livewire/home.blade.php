<div>
    <x-home.hero/>

    @if(count($features))
        <x-home.features-v2 :features="$features"/>
    @endif

    <x-home.insurance/>

    <x-home.about-us/>

    <x-sections.counter/>

    @if(count($services))
        <x-sections.services :services="$services"/>
    @endif

    <x-home.contact-us/>

    @if(count($projects))
        <x-home.projects :projects="$projects"/>
    @endif

    @if(count($testimonials))
        <x-home.testimonials :testimonials="$testimonials"/>
    @endif

    <x-sections.book-appointment/>

</div>

