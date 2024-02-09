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
                }
            }
        )
    }
}

events.init();