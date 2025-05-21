<?php

$image_default = get_theme_mod('carte_default');

?>

<?php get_header();?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <div class="thumbnail">
                <?php
                    if (has_post_thumbnail()){
                    the_post_thumbnail('large');
                    }else{ ?>
                        <img src="<?= $image_default ?>" alt="baba">
                    <?php } ?>  
            </div>
             
            <section class="lePost">
                <h2><?php the_title();?></h2>
                <div class="informationSupp">
                    <h3>Alexis David</h3>
                    <p>31 Octobre 2000</p>
                </div>
                <div class="InfoLocale"><?php the_content();?></div>
                <div class="temperatures">
                    <p>Température Maximale: <?php the_field('temperature_maximale')?> C </p>
                    <p>Température Minimale: <?php the_field('temperature_minimale')?> C </p>
                    <p>Température Moyenne: <?php the_field('temperature_moyenne')?> C </p>
                </div>
            </section>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    <?php get_footer() ?>
</body>
</html>