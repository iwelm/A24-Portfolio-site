import Swiper from 'swiper/bundle';
export default class Carousel {
  constructor(elementHTML) {
    this.elementHTML = elementHTML;
    this.options = {
      direction: 'vertical',
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: this.elementHTML.querySelector('.swiper-pagination'),
        clickable: true,
      },

      navigation: {
        nextEl: this.elementHTML.querySelector('.swiper-button-next'),
        prevEl: this.elementHTML.querySelector('.swiper-button-prev'),
      },
    };

    this.options.breakpoints = {
      768: {
        spaceBetween: 5,
      },
    };

    // Swiper pour actualités
    /* const swiperActualite = new Swiper('.swiperActualite', {
      slidesPerView: 4.5,
      spaceBetween: 0,
      pagination: {
        el: '.swiper-pagination-actualite',
        clickable: true,
      },
    });
*/
    this.init();
  }
  init() {
    console.log('Initialisation de ma composante Carousel');
    this.setOptions();
    const swiper = new Swiper(this.elementHTML, this.options);
  }

  setOptions() {
    if ('horizontal' in this.elementHTML.dataset) {
      this.options = {
        direction: 'horizontal',
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      };
    }

    console.log(this.elementHTML.dataset.split);
    if ('split' in this.elementHTML.dataset) {
      this.options.breakpoints = {
        1024: {
          slidesPerView: 4,
        },

        768: {
          slidesPerView: 3,
        },

        570: {
          slidesPerView: 2,
        },

        480: {
          slidesPerView: 1,
        },

        1: {
          slidesPerView: 1,
        },
      };
    }

    if ('autoplay' in this.elementHTML.dataset) {
      this.options.autoplay = {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      };
    }

    if ('loop' in this.elementHTML.dataset) {
      this.options.loop = true;
    }

    if ('slides' in this.elementHTML.dataset) {
      const slidesValue = this.elementHTML.dataset.slides;
      this.options.slidesPerView = slidesValue || this.options.slidesPerView;
    }
  }
}
