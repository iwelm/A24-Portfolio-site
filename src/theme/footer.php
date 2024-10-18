<footer>
<div class="wrapper">
    <div class="footer_left">
    <?php if(get_field('info_footer_fichier_cv', 'options')) : ?>
    
        <?php $file_url = get_field('info_footer_fichier_cv', 'options'); ?>

        <a href="<?php echo esc_url($file_url); ?>" target="_blank">
            <?php the_field('info_footer_cv', 'options'); ?>
        </a>

    <?php endif; ?>

        <?php if(get_field('info_footer_telephone', 'options')) : ?>
            <p><?php the_field('info_footer_telephone', 'options'); ?></p>
        <?php endif; ?>
        
        <?php if(get_field('info_footer_email', 'options')) : ?>
            <p><?php the_field('info_footer_email', 'options'); ?></p>
        <?php endif; ?>
    </div>
    <div class="footer_right">
        <ul>
        <?php if( have_rows('repeteur_icone_footer', 'options') ): ?>
            <?php while(have_rows('repeteur_icone_footer', 'options') ): the_row(); ?>
                <li><a href="<?php the_sub_field('url_icone_footer', 'options'); ?>" target="blank"><div class="bkg-sociaux" aria-label="Lien vers mon Github">
                    <svg class="icon">
                    <use xlink:href="#icon-<?php the_sub_field('nom_icone_footer', 'options'); ?>"></use> 
                </svg>
                </div></a></li>
            <?php endwhile; ?>
        <?php endif; ?>
           
        </ul>
        <p> Tous droits réservés  ©2024 Wilem</p>
        <p>Site intégré sur WordPress</p>
    </div>
</div>    
</footer> 

<?php wp_footer(); ?>
</section>

</body>
</html>