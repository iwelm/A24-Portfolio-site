import Swiper from 'swiper/bundle';
export default class Carousel {
  constructor(elementHTML) {
    this.elementHTML = elementHTML;
    this.options = {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: this.elementHTML.querySelector('.swiper-pagination'),
        clickable: true,
      },

      navigation: {
        nextEl: this.elementHTML.querySelector('.swiper-button-next'),
        prevEl: this.elementHTML.querySelector('.swiper-button-prev'),
      },
    };
    this.init();
  }
  init() {
    console.log('Initialisation de ma composante Carousel');
    this.setOptions();
    const swiper = new Swiper(this.elementHTML, this.options);
  }

  setOptions() {
    console.log(this.elementHTML.dataset.split);
    if ('split' in this.elementHTML.dataset) {
      this.options.breakpoints = {
        768: {
          slidesPerView: 2.5,
        },
      };
    }

    if ('autoplay' in this.elementHTML.dataset) {
      this.options.autoplay = {
        delay: 4000,
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
