<?php
get_header();
?>
<section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
            </article>         
            <?php endwhile; endif; ?>
            <h2><?php the_field('titre_evenement');?></h2>
            <h2>Date de l'événement : <h2>
            <?php the_field('date_evenement'); ?></p>
            Description de l'événement
            <p><?php the_field('description_evenement'); ?></p>
            

        </div>
    
</section>


<div class="evenement">
<h1><?php the_title(); ?></h1>

</div>
</div>
<?php get_footer(); ?>
