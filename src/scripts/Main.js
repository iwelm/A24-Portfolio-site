import Icons from './utils/Icons';
import ComponentFactory from './ComponentFactory';

class Main {
  constructor() {
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js');
    new ComponentFactory();
    Icons.load();
  }
}
new Main();
