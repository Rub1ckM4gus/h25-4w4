<?php

function categorie_par_destination($cat_a_retirer):void{

?>

<ul class="post-categories">
    <?php foreach(get_categories() as $cat): ?>
    <?php if(in_category($cat->slug) && $cat->slug != $cat_a_retirer): ?>
    <li>
        <?php
        $lien = get_site_url();
        $lien = $lien . "/categorie/$cat->slug/";        
        ?>
        <a href="<?= $lien ?>" rel="category tag" class="carte__bouton carte__bouton--actif">
            <?php echo $cat->slug; ?>
        </a>
    </li>
    <?php endif; endforeach; ?>
</ul>
<?php } ?>

