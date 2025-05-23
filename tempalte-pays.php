<?php
/*
Template Name: Événement
*/
get_header();
?>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="template-pays">
            <h2><?php the_title(); ?></h2>
            <div><?php the_content() ?>
        <?php endwhile; endif; ?>
        <div class="champs-perso">
            <h3>Date et adresse de l'événement</h3>
            <?php the_field('date_evenement'); ?></p>
            <?php the_field('coordonne_evenement'); ?></p>
        </div>

        <?php ?>
        <!-- ////////////////////////////////////////////////  section rest-api -->
        <section class="destination">
            <?php categories_liste("destination") ?>
            <!--<h2 class="destination__titre">Articles de la catégorie</h2>-->
            <div class="destination__list"></div>
        </section>
    </div>
</section>

<?php get_footer(); ?>