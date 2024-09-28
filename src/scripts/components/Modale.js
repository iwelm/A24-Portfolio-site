export default class Modale {
  constructor() {
    this.init();
  }

  init() {
    console.log('Modale');
    const boutonsModale = document.querySelectorAll(
      '.swiper-slide .swiper-slide-active'
    );
    const modale = document.querySelector('.modale');

    for (let i = 0; i < boutonsModale.length; i++) {
      boutonsModale[i].addEventListener('click', this.openModale.bind(this)); // Binding to use 'this' correctly
      const img = boutonsModale[i].querySelector('img');
      if (img) {
        img.addEventListener('click', this.openModale.bind(this));
      }
    }
  }

  openModale(event) {
    event.preventDefault();
    const imageSrc = event.currentTarget.querySelector('img').src; // Use event.currentTarget instead of this
    const imageAlt = event.currentTarget.querySelector('img').alt;
    const modale = document.querySelector('.modale'); // Get the modal here
    const modaleImage = modale.querySelector('img');

    modaleImage.src = imageSrc;
    modaleImage.alt = imageAlt;

    modale.classList.add('visible');
    modale.addEventListener('click', this.closeModale.bind(this));
  }

  closeModale(event) {
    if (event.target !== this) return;
    const modale = document.querySelector('.modale'); // Get the modal here
    modale.classList.remove('visible');
  }
}
