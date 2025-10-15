<?php /* Template Name: Page projets */ ?>

<?php get_header(); ?>

<div class="mes_projets">
    <div class="wrapper">
        <div data-scrolly="fromLeft">
            <h1>Mes projets</h1>
        </div>
    </div>
</div>
        

<section class="horizontal">

        <?php
            $arg = array(
                'post_type' => 'projet',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'order' => 'asc',
            );

            $query = new WP_Query($arg);
        ?>

    <div class="wrapper">
        <?php if ($query->have_posts()) : ?>
         <?php while ($query->have_posts()) : $query->the_post(); ?>

        <div class="content">
            <div class="projet">
                <div class="left">
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
                <div class="right">
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
        </div>
        <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>