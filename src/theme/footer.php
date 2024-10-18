
<footer>
<div class="wrapper">
    <div class="footer_left">
        <a href="assets/pdf/cv.pdf" target="blank">Mon Curriculum vitæ</a>
        <p>Téléphone : 438-390-8479</p>
        <p>Email : wilem.lavoie@gmail.com</p>
    </div>
    <div class="footer_right">
        <ul>
        <?php if( have_rows('repeteur_icone_footer', 'options') ): ?>
            <?php while(have_rows('repeteur_icone_footer', 'options') ): the_row(); ?>
                <li><a href="<?php the_sub_field('url_icone_footer', 'options'); ?>" target="blank"><div class="bkg-sociaux" aria-label="Lien vers mon Github">
                    <svg class="icon">
                    <use xlink:href="#icon-<?php the_sub_field('nom_icon_footer', 'options'); ?>"></use> 
                </svg>
                </div></a></li>
            <?php endwhile; ?>
        <?php endif; ?>
           
        </ul>
        <p>Tous droits réservés  © 2024 Wilem Lavoie </p>
    </div>
</div>    
</footer> 

<?php wp_footer(); ?>
</section>

</body>
</html>