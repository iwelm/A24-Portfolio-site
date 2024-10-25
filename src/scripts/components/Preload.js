export default class Preload {
  constructor() {
    this.init();
  }

  init() {
    document.addEventListener('DOMContentLoaded', () => {
      // Vérifie si la page a été rechargée (hard refresh)
      const navigationType = performance.getEntriesByType('navigation')[0].type;

      // Vérifie si c'est la première visite en consultant le localStorage
      const isFirstVisit = !localStorage.getItem('visited');

      if (isFirstVisit || navigationType === 'reload') {
        // Si c'est la première visite ou un rechargement, lance l'animation et marque la visite
        localStorage.setItem('visited', 'true');
        this.playPreloader();
      } else {
        // Si ce n'est pas la première visite ni un rechargement, cache directement le preloader
        const preloader = document.getElementById('preloader');
        preloader.style.display = 'none';
        document.body.classList.remove('no-scroll');
      }
    });
  }

  playPreloader() {
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
  }
}
