<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug);

    // Vérifier si la catégorie parente existe
    if ($parent_category) {
    $parent_id = $parent_category->term_id;

    // Récupérer les sous-catégories de "destination"
    $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

    // Vérifier s'il y a des sous-catégories
    if (!empty($sous_categories)) {
        echo '<ul class="categorie__ul">';
    foreach ($sous_categories as $categorie) {
    // Afficher le nom de chaque sous-catégorie
        echo '<li  data-category_id = "' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
    }
    echo '</ul>';
    }
}
}

/** Génere une ou plusieurs vagues **/
function genere_vague($couleur){ ?>
    <svg style="top:200px" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur?>" fill-opacity="1" d="M0,64L30,74.7C60,85,120,107,180,144C240,181,300,235,360,224C420,213,480,139,540,112C600,85,660,107,720,112C780,117,840,107,900,117.3C960,128,1020,160,1080,176C1140,192,1200,192,1260,213.3C1320,235,1380,277,1410,298.7L1440,320L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
    <svg style="top:200px" class="vague"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur?>" fill-opacity="1" d="M0,192L60,165.3C120,139,240,85,360,101.3C480,117,600,203,720,208C840,213,960,139,1080,133.3C1200,128,1320,192,1380,224L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
<?php }