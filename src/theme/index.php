<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J5E2EYNYKS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-J5E2EYNYKS');
    </script>


    <link rel="icon" type="image/png" href="/assets/favicon/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/assets/favicon/site.webmanifest" />


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page d'accueil de mon Portfolio">
    <meta name="author" content="Wilem Lavoie">


    <title>Accueil</title>



    <link rel="stylesheet" href="styles/main.css" />
    <script src="scripts/main.js" defer></script>
    <script src="node_modules/lottie-web/build/player/lottie.min.js"></script>
</head>

<body data-component="Scrolly">
    <section data-component="Scroll">
        <header class="header" data-component="Header" data-scrolly="fromTop">
            <div class="wrapper">
                <a href="index.html" class="header__brand"><svg class="icon" aria-label="Retour à la page d'accueil">
                        <use xlink:href="#icon-logo"></use>
                    </svg></a>
                <nav class="nav-primary">
                    <ul>
                        <li>
                            <a href="projets.html">Mes projets</a>
                        </li>
                        <li>
                            <a href="index.html#section_about">À propos</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
                <button class="header__toggle js-toggle" aria-label="Ouvrir le menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

        </header>

        <section id="preloader" data-component="Preload">
            <div class="border_counter">
                <div class="counter">
                    <h1>
                        <span id="count">0</span>
                        %
                    </h1>
                </div>
            </div>
        </section>

        <section class="hero">
            <video autoplay loop muted playsinline preload="auto" crossorigin="anonymous" src="assets/video/demo_reel_it.1.webm" type="video/webm"></video>
            <div class="wrapper">
                <div class="hero_left">
                    <div data-scrolly="fromLeft">
                        <h1>Wilem Lavoie</h1>
                    </div>
                    <div class="hero_p" data-scrolly="fromTop">
                        <p>Développeur front-end junior</p>
                        <p>Animateur 3D</p>
                    </div>
                    <div data-scrolly="fromBottom">
                        <a class="bouton" href="projets.html">Mes projets</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="section_about">
            <div class="wrapper">
                <div class="grid_moi">
                    <div class="info_moi">
                        <div class="info_moi_1" data-scrolly="fromLeft">
                            <h2>
                                Salut! Ravi de faire ta
                                <span class="orange">connaissance.</span>
                            </h2>
                        </div>
                        <div class="info_moi_2" data-scrolly="fromRight">
                            <p>
                                Bonjour je suis
                                <span class="orange">Wilem Lavoie</span>
                                et je suis un futur finissant de la TIM. J’aime le
                                <span class="orange">web</span>
                                , la
                                <span class="orange">3D</span>
                                et le
                                <span class="orange">design</span>
                                . Je me qualifie d’optimiste, sympathique et minutieux. Je suis toujours
                                <span class="orange">ouvert à la critique</span>
                                , afin de m’améliorer. J’aime les
                                <span class="orange">idées ambitieuses</span>
                                qui m’invite à me dépasser.
                            </p>
                            <h3>J'adore les projets web et la production 3D.</h3>
                        </div>
                    </div>
                    <img src="assets/images/moi.jpg" alt="Portrait photo de moi" data-scrolly="fromRight" />
                </div>
                <div class="accordeon" data-scrolly="fromBottom">
                    <div class="grid-accordeon" data-component="Accordeon" data-not-Closing>
                        <div class="accordion__container js-header">
                            <div class="accordion__header" data-scrolly="fromBottom">
                                <h3>Je suis :</h3>
                                <svg class="icon">
                                    <use xlink:href="#icon-plus"></use>
                                </svg>
                            </div>
                            <div class="accordion__content" data-scrolly="fromTop">
                                <ul>
                                    <li>
                                        <p>Curieux</p>
                                    </li>
                                    <li>
                                        <p>Optimiste</p>
                                    </li>
                                    <li>
                                        <p>Sociable</p>
                                    </li>
                                    <li>
                                        <p>Débrouillard</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion__container js-header">
                            <div class="accordion__header" data-scrolly="fromBottom">
                                <h3>J'aime :</h3>
                                <svg class="icon">
                                    <use xlink:href="#icon-plus"></use>
                                </svg>
                            </div>
                            <div class="accordion__content" data-scrolly="fromTop">
                                <ul>
                                    <li>
                                        <p>Cinéma</p>
                                    </li>
                                    <li>
                                        <p>Sport</p>
                                    </li>
                                    <li>
                                        <p>Musique</p>
                                    </li>
                                    <li>
                                        <p>Jeux vidéos</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee">
            <div class="marquee_content scroll">
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
            </div>

            <div class="marquee_content scroll">
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
                <h1>Mes logiciels & langages</h1>
            </div>
        </section>

        <section class="logiciel_langage">
            <div class="wrapper">
                <div class="cards">
                    <div class="card" data-scrolly="fromTop">
                        <h4>HTML</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-html"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card bottom" data-scrolly="fromLeft">
                        <h4>figma</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-figma"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card" data-scrolly="fromTop">
                        <h4>CSS</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-css"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card bottom" data-scrolly="fromBottom">
                        <h4>Blender</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-blender"></use>
                            </svg>
                        </div>
                    </div>

                    <div class="card" data-scrolly="fromTop">
                        <h4>javascript</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-javascript"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card bottom" data-scrolly="fromBottom">
                        <h4>php</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-php"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card" data-scrolly="fromTop">
                        <h4>wordpress</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-wordpress"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card" data-scrolly="fromTop">
                        <h4>reaper</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-reaper"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card" data-scrolly="fromTop">
                        <h4>after-effects</h4>
                        <div class="bkg-logiciel">
                            <svg class="icon icon--xl">
                                <use xlink:href="#icon-after-effect"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee">
            <div class="marquee_content scroll">
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
            </div>

            <div class="marquee_content scroll">
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
                <h1>Mes projets</h1>
            </div>
        </section>

        <section class="mes_projets">
            <div class="wrapper">
                <div class="projets">
                    <div class="projet espace">
                        <div class="left" data-scrolly="fromLeft">
                            <div class="info-left">
                                <div>
                                    <h3>Baie-Sainte-Catherine</h3>
                                    <h4>Intégration web - 2024</h4>
                                </div>

                                <div>
                                    <p>Projet étudiant</p>
                                    <div class="logiciel">
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-html"></use>
                                            </svg>
                                        </div>
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-css"></use>
                                            </svg>
                                        </div>
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-javascript"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bouton">
                                <a href="projet.html">Voir le projet</a>
                            </div>
                        </div>
                        <div class="right" data-scrolly="fromRight">
                            <p>
                                Refonte du site de Baie-Sainte-Catherine. Le projet consiste à concevoir le design des parties majeures du site et à l'intégrer sur le
                                web. Le site est donc autant un défi de
                                <span class="orange">design</span>
                                que
                                <span class="orange">d'intégration web.</span>
                            </p>
                            <img src="assets/images/bsc.webp" alt="Vignette du projet Baie-Sainte-Catherine" />
                            <div class="bouton-responsive">
                                <a href="projet.html">Voir le projet</a>
                            </div>
                        </div>
                    </div>

                    <div class="projet">
                        <div class="left" data-scrolly="fromLeft">
                            <div class="info-left">
                                <div>
                                    <h3>L’astéroïde</h3>
                                    <h4>Animation 3D - 2024</h4>
                                </div>
                                <div>
                                    <p>Projet étudiant</p>
                                    <div class="logiciel">
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-after-effect"></use>
                                            </svg>
                                        </div>
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-reaper"></use>
                                            </svg>
                                        </div>
                                        <div class="logiciel-bkg">
                                            <svg class="icon">
                                                <use xlink:href="#icon-blender"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bouton">
                                <a href="projet.html">Voir le projet</a>
                            </div>
                        </div>
                        <div class="right" data-scrolly="fromRight">
                            <p>
                                «L’astéroïde» est un
                                <span class="orange">projet étudiant</span>
                                réalisé en
                                <span class="orange">équipe de deux.</span>
                                Toute la partie espace est entièrement faite par moi, telle que la modélisation, la mise en scène, l’environnement et le son.
                            </p>
                            <img src="assets/images/asteroide.jpg" alt="Vignette du projet Astéroide" />
                            <div class="bouton-responsive">
                                <a href="projet.html">Voir le projet</a>
                            </div>
                        </div>
                    </div>
                    <div data-scrolly="fromTop">
                        <div class="bouton tous">
                            <a href="projets.html">tous mes projets</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="wrapper">
                <div class="footer_left">
                    <a href="assets/pdf/cv.pdf" target="blank">Mon Curriculum vitæ</a>
                    <p>Téléphone : 438-390-8479</p>
                    <p>Email : wilem.lavoie@gmail.com</p>
                </div>
                <div class="footer_right">
                    <ul>
                        <li><a href="https://github.com/iwelm" target="blank">
                                <div class="bkg-sociaux" aria-label="Lien vers mon Github">
                                    <svg class="icon">
                                        <use xlink:href="#icon-github"></use>
                                    </svg>
                                </div>
                            </a></li>
                        <li><a href="https://www.linkedin.com/in/wilem-lavoie" target="blank">
                                <div class="bkg-sociaux" aria-label="Lien vers mon Linkedin">
                                    <svg class="icon">
                                        <use xlink:href="#icon-linkedin"></use>
                                    </svg>
                                </div>
                            </a></li>
                        <li><a href="https://youtube.com/@wilemlavoie?feature=shared" target="blank">
                                <div class="bkg-sociaux" aria-label="Lien vers mon Youtube">
                                    <svg class="icon">
                                        <use xlink:href="#icon-youtube"></use>
                                    </svg>
                                </div>
                            </a></li>
                    </ul>
                    <p>Tous droits réservés  © 2024 Wilem Lavoie </p>
                </div>
            </div>
        </footer>


    </section>

</body>

</html>