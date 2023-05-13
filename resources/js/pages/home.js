import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const swiper = new Swiper('.swiper-testimonial', {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    //centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        //disableOnInteraction: false,
    },
});