export default class Accordeon {
  constructor(elementHTML) {
    this.elementHTML = elementHTML; // Acces à la section accordeon html
    this.accordeons = this.elementHTML.querySelectorAll('.js-header'); // associe tout les js-header à this.accordeons
    this.init();
  }

  init() {
    for (let i = 0; i < this.accordeons.length; i++) {
      const accordeon = this.accordeons[i];
      accordeon.addEventListener('click', this.toggleAccordion.bind(this)); // boucle dans tout les this.accordeons et ajoute un ecouteur click qui appel toggleAcordion
    }
  }

  toggleAccordion(event) {
    if ('notClosing' in this.elementHTML.dataset) {
      this.accordeonSelectionner = event.currentTarget;
      this.accordeonSelectionner.classList.toggle('is-active');
    } else if (this.accordeonSelectionner.classList.contains('is-active')) {
      this.accordeonSelectionner = event.currentTarget;
      this.accordeonSelectionner.classList.remove('is-active');
    }
  }
}
