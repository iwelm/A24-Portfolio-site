export default class Form {
  constructor(element) {
    this.element = element; // Correspont a notre data-component"Form"
    this.formElements = this.element.elements;
    this.init();
  }

  init() {
    this.element.setAttribute('novalidate', ''); //empeche la notifications validation d'afficher donc le formualire sera envoyé meme si des champs requis sont vides.

    for (let i = 0; i < this.formElements.length; i++) {
      const input = this.formElements[i];

      if (input.required) {
        input.addEventListener('input', this.validateInput.bind(this));
      }
    }

    this.element.addEventListener('submit', this.onSubmit.bind(this));
  }

  onSubmit(event) {
    event.preventDefault();

    if (this.validate()) {
      console.log('success');
      //envoi ajax du formulaire
      this.showConfirmation();
    } else {
      console.log('fail');
    }
  }

  validate() {
    let isValid = true;
    for (let i = 0; i < this.formElements.length; i++) {
      const input = this.formElements[i];

      if (input.required && !this.validateInput(input)) {
        isValid = false;
      }
    }

    return isValid;
  }

  validateInput(event) {
    const input = event.currentTarget || event;
    if (input.validity.valid) {
      this.removeError(input);
    } else {
      this.addError(input);
    }

    return input.validity.valid;
  }

  addError(input) {
    const container =
      input.closest('[data-input-container]') || input.closest('.input');
    container.classList.add('error');
  }

  removeError(input) {
    const container =
      input.closest('[data-input-container]') || input.closest('.input');
    container.classList.remove('error');
  }

  showConfirmation() {
    this.element.classList.add('is-sent');
  }
}
