export default class Accordeon {
  constructor(elementHTML) {
    this.elementHTML = elementHTML; // Acces à la section accordeon html
    this.accordeons = this.elementHTML.querySelectorAll('.js-header'); // associe tout les js-header à this.accordeons
    this.init();
  }

  init() {
    console.log('Initialisation de Accordeon');
    for (let i = 0; i < this.accordeons.length; i++) {
      const accordeon = this.accordeons[i];
      accordeon.addEventListener('click', this.toggleAccordion.bind(this)); // boucle dans tout les this.accordeons et ajoute un ecouteur click qui appel toggleAcordion
    }
  }

  toggleAccordion(event) {
    if ('notClosing' in this.elementHTML.dataset) {
      // data-no-closing placé sur la balise qui va toggle add/remove la classe is-active
      const accordeonSelectionner = event.currentTarget;
      accordeonSelectionner.classList.toggle('is-active');
    }

    if ('autoOpen' in this.elementHTML.dataset) {
      // meme chose que data-not-closing mais au click elle ferme tout les autres accordeon sauf elle qui est actif.
      for (let i = 0; i < this.accordeons.length; i++) {
        const accordeonSelectionner = this.accordeons[i];
        accordeonSelectionner.classList.remove('is-active');
      }
    }
    event.currentTarget.classList.add('is-active');
  }
}
