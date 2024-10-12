import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export default class Horizontal {
  constructor() {
    console.log('Horizontal');
    this.init();
  }

  init() {
    gsap.registerPlugin(ScrollTrigger);
    const contents = gsap.utils.toArray('.horizontal .wrapper .content');

    // Assure-toi que le contenu est chargé
    window.onload = () => {
      gsap.to(contents, {
        xPercent: -100 * (contents.length - 1),
        scrollTrigger: {
          trigger: '.horizontal',
          pin: true,
          scrub: 0.5,
          end: () => `+=${contents.length * window.innerWidth}`,
        },
      });
      ScrollTrigger.refresh();
    };
  }
}
