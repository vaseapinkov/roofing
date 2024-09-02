@props(['services'])
<div>

    <x-sections.simple-card-grid :items="$services"/>

    <x-sections.forms.book-appintment
        heading="Book Your Appointment"
        sub-heading="Your roof require professional attention"
        cta-text="Book Now"
        success-message="Message sent, a consultant will get in touch with you soon"
    />

</div>
