import { Swiper, Pagination, Navigation } from "swiper";


const events = {
    init() {
        this.dur = 600;
        this.parent = $(`.upcoming-events`)

        let sliders = new Swiper(
            '.upcoming-events .swiper',
            {
                slidesPerView: 2.5,
                modules: [Pagination, Navigation],
                spaceBetween: 40,
                grabCursor: true,
                pagination: {
                    el: '.swiper-pagination'
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 2.5
                    },
                    768: {
                        slidesPerView: 1.5,
                        spaceBetween: 30
                    },
                    0: {
                        slidesPerView: 1.2,
                        spaceBetween: 20
                    }
                }
            }
        )
    }
}

events.init();