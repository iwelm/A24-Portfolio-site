export default class Modale {
  constructor() {
    this.init();
  }

  init() {
    const boutonsModale = document.querySelectorAll('img'); // Sélectionne toutes les images
    const modale = document.querySelector('.modale');
    this.closeModaleX = document.querySelector('.modale-close');

    // Ajoute un événement à chaque image pour ouvrir la modale
    boutonsModale.forEach((img) => {
      img.addEventListener('click', (event) => {
        this.openModale(event, modale);
      });
    });

    // Ferme la modale lorsque l'utilisateur clique à l'extérieur de l'image
    modale.addEventListener('click', (event) => {
      if (event.target === modale) {
        this.closeModale(modale);
      }
    });

    this.closeModaleX.addEventListener('click', () => {
      this.closeModale(modale);
    });
  }

  openModale(event, modale) {
    event.preventDefault();
    const imageSrc = event.currentTarget.src;
    const imageAlt = event.currentTarget.alt;
    const modaleImage = modale.querySelector('img');

    modaleImage.src = imageSrc;
    modaleImage.alt = imageAlt;

    modale.classList.add('visible'); // Affiche la modale
    document.body.style.overflowY = 'hidden';
    document.body.style.overflowX = 'hidden';
  }

  closeModale(modale) {
    modale.classList.remove('visible'); // Cache la modale
    document.body.style.overflowY = 'visible';
    document.body.style.overflowX = 'hidden';
  }
}
