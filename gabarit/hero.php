<?php 
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
    $hero_nombreCarrousel = get_theme_mod('hero_nombreCarrousel', 3);
?>

<section class="hero">

    <?php for($k=0; $k<$hero_nombreCarrousel; $k++){
        $hero_background[$k] = get_theme_mod('hero_background' . $k, '');
        if($k == 0){?>
        <div class="hero__carrousel hero__carrousel--active" style="background-image: url(<?php echo $hero_background[$k] ?>)"></div>
        <?php } else { ?>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[$k] ?>)"></div>
        <?php } ?>
    <?php } ?>   

    <div class="hero__radio">
        <?php for ($k = 0; $k < $hero_nombreCarrousel; $k++) { ?>
            <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" 
                type="radio" name="carroussel" 
                id="carroussel_<?php echo $k; ?>" 
                <?php echo $k === 0 ? 'checked="checked"' : ''; ?>>
        <?php } ?>
    </div>

    <div class="hero__contenu global">
        <?php for ($k = 0; $k < $hero_nombreCarrousel; $k++) { ?>
            <div class="hero__animation <?php echo $k === 0 ? 'hero__animation--active' : ''; ?>">
                <h1 class="hero__titre"><?php bloginfo('name');?></h1>
                <p class="hero__description"><?php bloginfo('description');?></p>
            </div>
        <?php } ?>

        <p class="hero__courriel">
        <?php bloginfo('admin_email');?>
        </p>
        <p class="hero__adresse">
            5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
        </p>
        <p class="hero_auteur">Auteur: <?php echo $hero_auteur?> </p>
        <div class="hero__icone">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=github&color=000000" width="20" height="20">
        </div>
    </div>
</section>