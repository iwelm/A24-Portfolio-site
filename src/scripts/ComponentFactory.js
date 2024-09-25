import Carousel from './components/Carousel';
import Scrolly from './components/Scrolly';
import Header from './components/Header';
import Youtube from './components/Youtube.js';
import Form from './components/Form.js';
import Accordeon from './components/Accordeon.js';

export default class ComponentFactory {
  constructor() {
    this.componentList = {
      Accordeon,
      Header,
      Carousel,
      Scrolly,
      Youtube,
      Form,
    };
    this.init();
  }

  init() {
    console.log('Initialisation du ComponetFacory');
    // Scrolly
    const components = document.querySelectorAll('[data-component]');

    for (let i = 0; i < components.length; i++) {
      const element = components[i];
      console.log(element);
      const componentName = element.dataset.component;

      new this.componentList[componentName](element);
    }
  }
}
