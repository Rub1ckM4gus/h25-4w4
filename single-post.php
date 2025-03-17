<?php get_header();?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>   
            <?php
                if (has_post_thumbnail()){
                the_post_thumbnail('large');}
            ?>    
                <h2><?php the_title();?></h2>
                <div><?php the_content();?></div>
                <p>Température Maximale: <?php the_field('temperature_maximale')?> C </p>
                <p>Température Minimale: <?php the_field('temperature_minimale')?> C </p>
                <p>Température Moyenne: <?php the_field('temperature_moyenne')?> C </p>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <footer></footer>
    <?php get_footer() ?>
</body>
</html>