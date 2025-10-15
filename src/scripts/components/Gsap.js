import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';

export default class GSAP {
  constructor(element) {
    GSAP.instance = this;
    console.log('GSAP en fonction');
    this.element = element; // Acces à la section html
    this.options = {
      pageScrollSpeed: 0,
    };

    this.init();
  }

  init() {
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    this.setOptions();
    this.smoothScroll();

    const contents = gsap.utils.toArray('.horizontal .wrapper .content');
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

  setOptions() {
    // Met la vitesse du smooth dans une variable modifiable ex: data-speed='1.2'
    if ('smoothSpeed' in this.element.dataset)
      this.options.pageScrollSpeed = this.element.dataset.smoothSpeed;
  }

  smoothScroll() {
    let smoother = ScrollSmoother.create({
      wrapper: '#smooth-wrapper',
      content: '#smooth-content',
      smooth: this.options.pageScrollSpeed, // C'est ici qu'on change la vitesse du smooth pour notre data-set
      effects: true,
    });
  }
}
