import Carousel from './components/Carousel';
import Scrolly from './components/Scrolly';
import Header from './components/Header';
import Youtube from './components/Youtube.js';
import Form from './components/Form.js';
import Accordeon from './components/Accordeon.js';
import Horizontal from './components/Horizontal.js';
import Modale from './components/Modale.js';
import Scroll from './components/Scroll.js';
import Preload from './components/Preload.js';

export default class ComponentFactory {
  constructor() {
    this.componentList = {
      Accordeon,
      Header,
      Carousel,
      Scrolly,
      Youtube,
      Form,
      Horizontal,
      Modale,
      Scroll,
      Preload,
    };
    this.init();
  }

  init() {
    // Scrolly
    const components = document.querySelectorAll('[data-component]');

    for (let i = 0; i < components.length; i++) {
      const element = components[i];
      const componentName = element.dataset.component;

      new this.componentList[componentName](element);
    }
  }
}
