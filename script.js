var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 30,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
        dynamicBullets: true,
    },
    navigation: {
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev",
    },
    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});
