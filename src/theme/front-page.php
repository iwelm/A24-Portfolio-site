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
                    <div data-lag="1.3">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="hero_p" data-lag="1.1">
                    <?php if( have_rows('repeteur_hero_competences') ): ?>
                        <?php while(have_rows('repeteur_hero_competences') ): the_row(); ?>
                        <p><?php the_sub_field('repeteur_hero_competence_nom'); ?></p>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div data-lag="1.1">
                        <a class="bouton" href="https://wlavoie.ca/mes-projets/">Mes projets</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="section_about">
            <div class="wrapper">
                <div class="grid_moi">
                    <div class="info_moi">
                        <div class="info_moi_1" data-speed="1.1">
                        <?php if(get_field('about_titre')) : ?>
                            <h2><?php the_field('about_titre'); ?></h2>
                        <?php endif; ?>
                        </div>
                        <div class="info_moi_2" data-speed="1.2">

                            <?php if(get_field('about_description')) : ?>
                                <p><?php the_field('about_description'); ?></p>
                            <?php endif; ?>

                            <?php if(get_field('about_description_resume')) : ?>
                                <h3><?php the_field('about_description_resume'); ?></h3>
                            <?php endif; ?>
                            
                            <a target="blank" href="https://youtu.be/xiXIlHyPbrA?feature=shared">Vidéo de présentation!</a>
                        </div>
                    </div>
                    <?php 
                        $image = get_field('about_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="Portrait photo de moi" data-speed="1.3" />
                            <?php endif; ?>
                </div>
                <div class="accordeon" data-speed="1.3">
                    <div class="grid-accordeon" data-component="Accordeon" data-not-Closing>
                        <div class="accordion__container js-header">
                            <div class="accordion__header" data-scrolly="fromBottom">
                                <h3>Je suis :</h3>
                                <svg class="icon">
                                    <use xlink:href="#icon-plus"></use>
                                </svg>
                            </div>
                            <div class="accordion__content" data-scrolly="fromLeft">
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
                            <div class="accordion__content" data-scrolly="fromRight">
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
                            <p><?php the_sub_field('repeteur_logiciel_nom'); ?></p>
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
            <?php if( have_rows('repeteur_marquee_projets', 'options') ): ?>
                <?php while(have_rows('repeteur_marquee_projets', 'options') ): the_row(); ?>
                    <h1><?php the_sub_field('repeteur_marquee_projets_texte', 'options'); ?></h1>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>

            <div class="marquee_content scroll">
            <?php if( have_rows('repeteur_marquee_projets', 'options') ): ?>
                <?php while(have_rows('repeteur_marquee_projets', 'options') ): the_row(); ?>
                    <h1><?php the_sub_field('repeteur_marquee_projets_texte', 'options'); ?></h1>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>

        <section class="mes_projets">
            <div class="wrapper">



        <?php
            $args = array(
                'post_type'      => 'projet', 
                'post_status'    => 'publish',  
                'posts_per_page' => 2,         
                'order'          => 'ASC',      
                'tax_query'      => array(      
                    array(
                        'taxonomy' => 'category', 
                        'field'     => 'slug',    
                        'terms'     => 'accueil', 
                        'operator'  => 'IN',      
                    ),
                ),
            );
            
            $query = new WP_Query($args);
        ?>

                <div class="projets">


                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                    <div class="projet espace">
                        <div class="left" data-scrolly="fromLeft">
                            <div class="info-left">
                                <div>
                                    <h3><?php the_title(); ?></h3>

                                    <?php if(get_field('projet_type')) : ?>
                                         <h4><?php the_field('projet_type'); ?></h4>
                                    <?php endif; ?>
                                
                                </div>

                                <div>
                                <?php if(get_field('projet_type_but')) : ?>
                                         <p><?php the_field('projet_type_but'); ?></p>
                                    <?php endif; ?>
                                    <div class="logiciel">
                                    <?php if( have_rows('repeteur_projet_logiciel') ): ?>
                                        <?php while(have_rows('repeteur_projet_logiciel') ): the_row(); ?>
                                            <div class="logiciel-bkg">
                                                <svg class="icon">
                                                    <use xlink:href="#icon-<?php the_sub_field('repeteur_projet_logiciel_nom'); ?>"></use>
                                                </svg>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                <a class="bouton" href="<?php the_permalink(); ?>">Voir le projet</a>
                           
                        </div>
                        <div class="right" data-scrolly="fromRight">
                        <?php if(get_field('projet_description')) : ?>
                                         <p><?php the_field('projet_description'); ?></p>
                                    <?php endif; ?>
                                    <?php 
                        $image = get_field('projet_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="Vignette du projet" />
                            <?php endif; ?>
                           
                                <a class="bouton-responsive" href="<?php the_permalink(); ?>">Voir le projet</a>
                           
                        </div>
                    </div>

                    <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>

                    <div data-scrolly="fromTop">
                        <a class="bouton tous" href="https://wlavoie.ca/mes-projets/">tous mes projets</a>
                    </div>
                </div>
            </div>
        </section>


        <?php get_footer(); ?>