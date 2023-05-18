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

var swiperGalleryThumbnail = new Swiper(".trustedby__slider-thumbnail", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiperGallery = new Swiper(".trustedby__slider-info", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiperGalleryThumbnail,
    },
  })