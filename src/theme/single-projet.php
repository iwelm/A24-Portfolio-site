<?php get_header(); ?>

<section class="presentation">
    <div class="wrapper">
        <div data-scrolly="fromLeft">
            <h1><?php the_title(); ?></h1>

            <?php if(get_field('url_projet_web')) : ?>
                <?php if(get_field('url_projet_web')) : ?>
                    <a target="blank" href="<?php the_field('url_projet_web'); ?>">
                        <h2>Voir le site</h2>
                        <svg class="icon icon--md">
                            <use xlink:href="#icon-<?php the_field('url_projet_web_icone'); ?>"></use>
                        </svg>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="info_projet" data-scrolly="fromRight">
            <div class="projet_sorte_container">
                <div class="projet_sorte">
                    <?php if(get_field('projet_type_but')) : ?>
                        <h3><?php the_field('projet_type_but'); ?></h3>
                    <?php endif; ?>
                </div>

                <div class="projet_sorte">
                    <?php if(get_field('projet_sorte')) : ?>
                        <h3><?php the_field('projet_sorte'); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <div class="projet_logiciel">
            <?php if( have_rows('repeteur_projet_logiciel') ): ?>
                <?php while(have_rows('repeteur_projet_logiciel') ): the_row(); ?>
                    <div class="logiciel_grid">
                        <h4><?php the_sub_field('repeteur_projet_logiciel_nom_alpha'); ?></h4>
                        <div class="logiciel-bkg">
                            <svg class="icon">
                                <use xlink:href="#icon-<?php the_sub_field('repeteur_projet_logiciel_nom'); ?>"></use>
                            </svg>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?> 
            </div>
        </div>
    </div>
</section>

<?php if(get_field('youtube_id')) : ?>
    <?php 
        $image = get_field('youtube_image');
            if( !empty( $image ) ): ?>
                <?php if(get_field('youtube_id')) : ?>                
                    <section class="video_youtube" data-scrolly="fromBottom">
                        <div class="wrapper">  
                            <div class="youtube" data-component="Youtube" data-youtube-id="<?php the_field('youtube_id'); ?>">
                     

                                <div class="youtube__media js-youtube">
                                    
                                            <img class="js-poster" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="Portrait photo de moi" data-scrolly="fromRight" />
                                    
                                    

                                    <svg class="icon icon--xl">
                                    
                                        <use xlink:href="#icon-<?php the_field('youtube_icone'); ?>"></use>
                                        
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </section>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<section class="marquee">
    <div class="marquee_content scroll">
    <?php if( have_rows('repeteur_marquee_information_projet', 'options') ): ?>
        <?php while(have_rows('repeteur_marquee_information_projet', 'options') ): the_row(); ?>
            <h1><?php the_sub_field('repeteur_marquee_information_projet_texte', 'options'); ?></h1>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

    <div class="marquee_content scroll">
    <?php if( have_rows('repeteur_marquee_information_projet', 'options') ): ?>
        <?php while(have_rows('repeteur_marquee_information_projet', 'options') ): the_row(); ?>
            <h1><?php the_sub_field('repeteur_marquee_information_projet_texte', 'options'); ?></h1>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>


<?php if( have_rows('repeteur_info_projet_section') ): ?>
    <?php while(have_rows('repeteur_info_projet_section') ): the_row(); ?>
        <section class="projet_information">
            <?php if( have_rows('repeteur_info_projet') ): ?>
                <?php while(have_rows('repeteur_info_projet') ): the_row(); ?>
                    <div class="wrapper">
                        <div class="border_info" data-scrolly="fromLeft">
                            
                                <h2><?php the_sub_field('repeteur_info_projet_titre'); ?></h2>
                                <p><?php the_sub_field('repeteur_info_projet_description'); ?></p>
                        </div>

                        <div class="swiper" data-component="Carousel" data-loop data-autoplay data-scrolly="fromRight">
                            <div class="swiper-wrapper" data-component="Modale">
                            <?php if( have_rows('repeteur_info_projet_image') ): ?>
                                <?php while(have_rows('repeteur_info_projet_image') ): the_row(); ?>
                                <?php  $image = get_sub_field('repeteur_info_projet_image_ici'); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="Photo du projet" />
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                            <!-- N'oubliez pas votre pagination -->
                                <div class="swiper-pagination"></div>
                        </div>
                                
                        <div class="modale">
                            <div class="modale-content">
                                <button class="modale-close"><h1>X</h1></button>
                                <img src="" alt="" class="modale-img" />
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section class="marquee">
    <div class="marquee_content scroll">
    <?php if( have_rows('repeteur_marquee_galerie_photo', 'options') ): ?>
        <?php while(have_rows('repeteur_marquee_galerie_photo', 'options') ): the_row(); ?>
            <h1><?php the_sub_field('repeteur_marquee_galerie_photo_image', 'options'); ?></h1>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

    <div class="marquee_content scroll">
    <?php if( have_rows('repeteur_marquee_galerie_photo', 'options') ): ?>
        <?php while(have_rows('repeteur_marquee_galerie_photo', 'options') ): the_row(); ?>
            <h1><?php the_sub_field('repeteur_marquee_galerie_photo_image', 'options'); ?></h1>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>



<?php if( have_rows('repeteur_galerie_photo') ): ?>
    <?php while(have_rows('repeteur_galerie_photo') ): the_row(); ?>
        <section class="galerie" data-scrolly="fromBottom">
            <div class="wrapper" data-component="Modale">
                <div class="column">
                    <?php if( have_rows('repeteur_colonne_un') ): ?>
                        <?php while(have_rows('repeteur_colonne_un') ): the_row(); ?>
                            <?php  $image = get_sub_field('repeteur_colonne_un_image'); ?>
                                <img src="<?php echo esc_url($image['url']); ?>"/>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="column">
                    <?php if( have_rows('repeteur_colonne_deux') ): ?>
                        <?php while(have_rows('repeteur_colonne_deux') ): the_row(); ?>
                            <?php  $image = get_sub_field('repeteur_colonne_deux_image'); ?>
                                <img src="<?php echo esc_url($image['url']); ?>"/>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="column">
                    <?php if( have_rows('repeteur_colonne_trois') ): ?>
                        <?php while(have_rows('repeteur_colonne_trois') ): the_row(); ?>
                            <?php  $image = get_sub_field('repeteur_colonne_trois_image'); ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="modale">
                <div class="modale-content">
                    <button class="modale-close"><h1>X</h1></button>
                    <img src="" alt="" class="modale-img" />
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>