import Lenis from 'lenis';

export default class Scroll {
  constructor() {
    this.init();
  }

  init() {
    const lenis = new Lenis({
      lerp: 0.07,
      wheelMultiplier: 1,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
  }
}
