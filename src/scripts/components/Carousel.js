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
    this.setOptions();
    const swiper = new Swiper(this.elementHTML, this.options);
  }

  setOptions() {
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
  }
}
