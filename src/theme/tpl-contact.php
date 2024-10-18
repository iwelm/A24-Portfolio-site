<?php /* Template Name: Page contact */ ?>

<?php get_header(); ?>

<section class="formulaire">
    <div class="wrapper">
        <div data-scrolly="fromLeft"><h1>Me contacter</h1></div>

        <form action="https://formsubmit.co/85af5fd0012942b1bf0593797cc5c24f" method="POST" class="form" data-component="Form">
            <input type="hidden" name="_captcha" value="false" />
            <input type="hidden" name="_next" value="https://wlavoie.ca/form/" />

            <!--data-component="Form"-->
            <div class="form_body">
                <fieldset class="grid-form">
                    <div class="input" data-scrolly="fromTop">
                        <label class="input_label" for="lastname">Nom</label>
                        <input class="input_element" type="text" name="lastname" id="lastname" placeholder="Votre nom" required />
                        <p>Veuillez ajouter votre nom</p>
                    </div>

                    <div class="input" data-scrolly="fromRight">
                        <label class="input_label" for="firstname">Prénom</label>
                        <input class="input_element" type="text" name="firstname" id="firstname" placeholder="Votre prénom" required />
                        <p>Veuillez ajouter votre prénom</p>
                    </div>

                    <div class="input" data-scrolly="fromBottom">
                        <label class="input_label" for="name">Adresse email</label>
                        <input class="input_element" type="email" name="email" id="email" placeholder="2057691@cegepmontpetit.ca" required />
                        <p>Veuillez ajouter votre adresse courriel</p>
                    </div>

                    <div class="input" data-scrolly="fromLeft">
                        <label class="input_label" for="phone">Téléphone</label>
                        <input
                            class="input_element"
                            type="tel"
                            name="phone"
                            id="phone"
                            placeholder="(418) 620-5020"
                            pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s\.\-]?\d{3}[\s\.\-]?\d{4}$"
                            required
                        />
                        <p>Veuillez ajouter un numéro de téléphone</p>
                    </div>

                    <div class="input textarea u-grid-fullwidth" data-scrolly="fromBottom">
                        <label class="input_label" for="comment">Commentaire</label>
                        <textarea class="input_element" name="comment" id="comment" maxlength="500" required></textarea>
                        <p>Veuillez ajouter un commentaire</p>
                    </div>
                </fieldset>

                <section class="form-bas" type="submit" data-scrolly="fromLeft">
                    <button class="button">Envoyer</button>
                </section>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>