@props(['services'])
<div>
    <x-section-bradcrumbs title="Services"/>

    <x-sections.services :services="$services"/>

    <x-sections.counter/>

    <x-sections.book-appointment/>

</div>
