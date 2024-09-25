import gsap from 'gsap';

export default class Horizontal {
  constructor(elementHTML) {
    this.init();
  }

  init() {
    console.log('Initialisation Horizontal');

    gsap.registerPlugin(ScrollTrigger);

    let sections = gsap.utils.toArray('.card');

    gsap.to(sections, {
      xPercent: -100 * (sections.length - 1),
      ease: 'none',
      scrollTrigger: {
        trigger: '.logiciel_langage',
        pin: true,
        scrub: 1,
        snap: 1 / (sections.length - 1),
        end: () =>
          '+=' + document.querySelector('.logiciel_langage').offsetWidth,
      },
    });
  }

  /*
  constructor(elementHTML) {
    this.elementHTML = elementHTML; // Acces à la section accordeon html
    this.horizontal = this.elementHTML.querySelector('.js-horizontal'); //
    const horizontalWidth = this.horizontal.offsetWidth;
    const scroll = horizontalWidth - window.innerWidth;
    this.init();
  }

  init() {
    console.log('initialisation de Horizontal');
    const tween = gsap.to(this.horizontal, {
      x: -amountToScroll,
      duration: 3,
      ease: 'none',
    });

    ScrollTrigger.create({
      trigger: '.wrapper',
      start: 'top 20%',
      end: '+=' + amountToScroll,
      pin: true,
      animation: tween,
      scrub: 1,
      markers: true,
    });
  }  */
}
