export default class Preload {
  constructor() {
    console.log('Preloader');
    this.init();
  }

  init() {
    document.addEventListener('DOMContentLoaded', () => {
      document.body.classList.add('no-scroll');

      let count = 0;
      let counterElement = document.getElementById('count');
      let interval = setInterval(() => {
        count++;
        counterElement.textContent = count;

        if (count === 100) {
          clearInterval(interval);

          const preloader = document.getElementById('preloader');
          preloader.style.opacity = '0'; // Réduire l'opacité à 0

          setTimeout(() => {
            document.body.classList.remove('no-scroll');
            preloader.style.display = 'none'; // Masquer le preloader
          }, 1000); // Durée de la transition
        }
      }, 15);
    });
  }
}
