import Icons from './utils/Icons';
import ComponentFactory from './ComponentFactory';
import Swiper from 'swiper/bundle';

// Testez désactiver/activer javascript -- cmd shift P -- dans le navigateur

class Main {
  constructor() {
    const swiperActualite = new Swiper('.swiperActualite', {
      // Swiper pour actualités
      slidesPerView: 5,
      spaceBetween: 0,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js'); // Permet au Javascript de tjr fonctionner meme si js désactiver

    new ComponentFactory();
    // Chargement du sprite svg par le système d'icône
    Icons.load();
    console.log('Initialisation de mon deuxieme carousel');
  }
}
new Main();
