<?php 
/**Template-part carte*/
?>

<article class="carte carte--grande">
  <div class="carte__contenu">
    <?php
    $logo_id = get_theme_mod('custom_logo');
    if ($logo_id) {
      echo wp_get_attachment_image($logo_id, 'logo', false, array(
          'class' => 'custom-logo',
          'alt' => get_bloginfo('name'),
        ));
      }
    ?>
    <h4 class="carte__titre"><?php the_title(); ?></h4>
    <p class="carte__description"><?php echo wp_trim_words(the_content(),10, "..." ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink()?>">information supplémentaire...</a>
    <?php the_category(); ?>
    <p> Température Maximale: <?php the_field('temperature_maximale');?> C </p>
  </div>
</article>
