const AnimWP = () => {
    if (document.querySelector('.mySwiper')) {
        const opciones = {
            rewind: true, 
            scrollbar: {
                el: ".swiper-scrollbar",
                hide: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            slidesPerView: 5,
            spaceBetween: 10,
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                "@0.75": {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                "@1.00": {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                "@1.50": {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        };
        new Swiper(".mySwiper", opciones);
    }
};

document.addEventListener("DOMContentLoaded", AnimWP);
