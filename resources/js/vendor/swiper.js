import Swiper from "swiper/bundle";
import 'swiper/css/bundle';

new Swiper('#home-swiper', {
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    speed: 1000,
    allowTouchMove: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        1024: {
            slidesPerView: 5,
        }
    }
});

new Swiper('#testimonials-slider', {
    enabled: true,
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    speed: 2000,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
