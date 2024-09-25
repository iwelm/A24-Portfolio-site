export default class Scrolly {
  constructor(element) {
    this.element = element;

    this.options = {
      rootMargin: '0px 0px 0px 0px', // fenetre de la page
      repeat: true,
    };
    this.init();
  }

  init() {
    this.setOptions();

    const observer = new IntersectionObserver(
      this.watch.bind(this),
      this.options
    );

    const items = this.element.querySelectorAll('[data-scrolly]');
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      observer.observe(item);
    }
  }

  setOptions() {
    if ('noRepeat' in this.element.dataset) {
      this.options.repeat = false;
    }
  }

  watch(entries, observer) {
    for (let i = 0; i < entries.length; i++) {
      const entry = entries[i];

      const target = entry.target;

      if (entry.isIntersecting) {
        target.classList.add('is-active');

        if (this.options.repeat == false) {
          observer.unobserve(target); // Empeche les animations de jouer une deuxieme fois.
        }

        // observer.observe(target); // fait jouer l'animations à chaque fois.
        // observer.unobserve(target); // empeche le scrolly de jouer l'animations quand on remonte dans la page // empeche l'animations de jouer une 2ieme fois
      } else {
        target.classList.remove('is-active');
      }
    }
  }
}
