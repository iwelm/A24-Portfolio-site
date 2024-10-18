<?php get_header(); ?>

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
        <?php if(get_field('hero_video')) : ?>
            <video autoplay loop muted playsinline preload="auto" crossorigin="anonymous" src="<?php echo esc_url(get_field('hero_video')); ?>" type="video/webm"></video>
            <?php endif; ?>
            <div class="wrapper">
                <div class="hero_left">
                    <div data-scrolly="fromLeft">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="hero_p" data-scrolly="fromTop">
                    <?php if( have_rows('repeteur_hero_competences') ): ?>
                        <?php while(have_rows('repeteur_hero_competences') ): the_row(); ?>
                        <p><?php the_sub_field('repeteur_hero_competence_nom'); ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div data-scrolly="fromBottom">
                        <a class="bouton" href="https://wlavoie.ca/mes-projets/">Mes projets</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="section_about">
            <div class="wrapper">
                <div class="grid_moi">
                    <div class="info_moi">
                        <div class="info_moi_1" data-scrolly="fromLeft">
                        <?php if(get_field('about_titre')) : ?>
                            <h2><?php the_field('about_titre'); ?></h2>
                        <?php endif; ?>
                        </div>
                        <div class="info_moi_2" data-scrolly="fromRight">

                        <?php if(get_field('about_description')) : ?>
                            <p><?php the_field('about_description'); ?></p>
                        <?php endif; ?>

                        <?php if(get_field('about_description_resume')) : ?>
                            <h3><?php the_field('about_description_resume'); ?></h3>
                        <?php endif; ?>

                        </div>
                    </div>
                    <?php 
                        $image = get_field('about_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="Portrait photo de moi" data-scrolly="fromRight" />
                            <?php endif; ?>
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
                                <?php if( have_rows('repeteur_je_suis') ): ?>
                                    <?php while(have_rows('repeteur_je_suis') ): the_row(); ?>
                                        <li>
                                            <p><?php the_sub_field('repeteur_je_suis_texte'); ?></p>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
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
                                <?php if( have_rows('repeteur_jaime') ): ?>
                                    <?php while(have_rows('repeteur_jaime') ): the_row(); ?>
                                        <li>
                                            <p><?php the_sub_field('repeteur_jaime_texte'); ?></p>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="marquee">
            <div class="marquee_content scroll">
            <?php if( have_rows('repeteur_marquee_logiciel', 'options') ): ?>
                <?php while(have_rows('repeteur_marquee_logiciel', 'options') ): the_row(); ?>
                    <h1><?php the_sub_field('repeteur_marquee_logiciel_texte', 'options'); ?></h1>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>

            <div class="marquee_content scroll">
            <?php if( have_rows('repeteur_marquee_logiciel', 'options') ): ?>
                <?php while(have_rows('repeteur_marquee_logiciel', 'options') ): the_row(); ?>
                    <h1><?php the_sub_field('repeteur_marquee_logiciel_texte', 'options'); ?></h1>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>

        <section class="logiciel_langage">
            <div class="wrapper">
                <div class="cards">
                <?php if( have_rows('repeteur_logiciel_accueil') ): ?>
                    <?php while(have_rows('repeteur_logiciel_accueil') ): the_row(); ?>
                        <div class="card" data-scrolly="from<?php the_sub_field('repeteur_data_scrolly_nom'); ?>">
                            <h4><?php the_sub_field('repeteur_logiciel_nom'); ?></h4>
                            <div class="bkg-logiciel">
                                <svg class="icon icon--xl">
                                    <use xlink:href="#icon-<?php the_sub_field('repeteur_logiciel_icone_nom'); ?>"></use>
                                </svg>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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


        <?php get_footer(); ?>