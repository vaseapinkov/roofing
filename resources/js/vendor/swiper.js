import Swiper from "swiper/bundle";
import 'swiper/css/bundle';

new Swiper('#home-swiper', {
    loop: true,
    slidesPerView: 5,
    centeredSlides: true,
    speed: 1000,
    allowTouchMove: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});
