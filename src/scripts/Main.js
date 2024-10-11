import Icons from './utils/Icons';
import ComponentFactory from './ComponentFactory';

// Testez désactiver/activer javascript -- cmd shift P -- dans le navigateur

class Main {
  constructor() {
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js'); // Permet au Javascript de tjr fonctionner meme si js désactiver

    new ComponentFactory();
    // Chargement du sprite svg par le système d'icône
    Icons.load();
  }
}
new Main();
