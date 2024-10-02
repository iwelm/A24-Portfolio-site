export default class Form {
  constructor(element) {
    this.element = element; // Correspond à notre data-component="Form"
    this.init();
  }

  init() {
    this.element.setAttribute('novalidate', ''); // Empêche la notification de validation d'afficher
    this.element.addEventListener('submit', this.onSubmit.bind(this));
  }

  onSubmit(event) {
    event.preventDefault(); // Empêche le comportement par défaut

    // Envoi AJAX du formulaire
    const formData = new FormData(this.element);
    fetch(this.element.action, {
      method: 'POST',
      body: formData,
    })
      .then((response) => {
        if (response.ok) {
          this.showConfirmation(); // Appelle la confirmation si l'envoi réussit
        } else {
          console.error("Erreur lors de l'envoi du formulaire");
        }
      })
      .catch((error) => console.error('Erreur:', error));
  }

  showConfirmation() {
    this.element.classList.add('is-sent'); // Indique que le formulaire a été envoyé
  }
}
