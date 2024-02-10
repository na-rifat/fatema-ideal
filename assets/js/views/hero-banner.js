import { Swiper, Pagination, Autoplay } from 'swiper';
import 'swiper/scss';


const hero = {
    init() {
        this.dur = 600;

        let slider = new Swiper(
            '.hero-banner .swiper',
            {
                slidesPerView: 1,
                modules: [Pagination, Autoplay],
                loop: true,
                speed: 1200,
                autoplay: {
                    delay: 3000,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.swiper-pagination'
                },
                grabCursor: true
            }
        )
    }
}

hero.init();