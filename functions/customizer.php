<?php 
    function theme_tp_customize_register($wp_customize){
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_tp'), 
    'priority' => 30,
    ));

/********************** ajout de la donnée ***************************/
    $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Alexis David', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
    ));
/********************** ajout contrôle de la donnée ******************/
    $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
    ));
/********************** ajout de la donnée du nombre d'image dans carrousel***************************/
    $wp_customize->add_setting('hero_nombreCarrousel', array(
    'default' => __('3', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
    ));
  /********************** ajout contrôle de la donnée ******************/
    $wp_customize->add_control('hero_nombreCarrousel', array(
    'label' => __('nombre images carrousel', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
    ));
    $hero_nombreCarrousel = get_theme_mod('hero_nombreCarrousel', 3);

/********************** ajout de l'image d'arrière plan **************/
for($k = 0; $k<$hero_nombreCarrousel; $k++){
    $wp_customize->add_setting('hero_background' . $k, array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
    ));
/********************** ajout contrôle de l'image d'arrière plan *****/
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background' . $k, array(
    'label' => __('Image en arrière plan' . ($k+1), 'theme_tp'),
    'section' => 'hero_section',
    )));
}

////////////////////////////////////////////////////////////////////
/******************* CUSTOMIZER POUR: SECTION_404 *****************/
////////////////////////////////////////////////////////////////////
$wp_customize->add_section('section_404', array(
  'title' => __('Section_404', 'theme_tp'), 
  'priority' => 35,
));

/********************** ajout de l'image d'arrière plan **************/
$wp_customize->add_setting('background_404', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

/********************** ajout contrôle de l'image d'arrière plan *****/
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_404', array(
  'label' => __('Image en arrière plan', 'theme_tp'),
  'section' => 'section_404',
)));


/** CUSTOMIZER POUR IMAGES SINGLE-POST DEFAULT**/

$wp_customize->add_section('section_single_post', array(
  'title' => __('Single_Post_Image', 'theme_tp'), 
  'priority' => 40,
));

/********************** ajout de l'image d'arrière plan **************/
$wp_customize->add_setting('carte_default', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

/********************** ajout contrôle de l'image d'arrière plan *****/
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carte_default', array(
  'label' => __('Image cartes par défault', 'theme_tp'),
  'section' => 'section_single_post',
)));



}
?>