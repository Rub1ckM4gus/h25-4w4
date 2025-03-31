<?php get_header(); ?>

<div id="accueil" class="global">
    <div class="gabarit_404">
        <section class="accueil__section ensemble_404">
            <div class="assembler_404">
                <div>
                    <h2 class="texte_section">Erreur 404</h2>
                    <h4 class="texte_404">Vous essayez d'accéder à une page qui n'existe pas</h4>
                    <h4 class="texte_404">Pour revenir à la page d'accueil, cliquez sur le lien suivant</h4>
                    <div class="conteneur_404">
                        <button id="bouton_retour" type="button">Explorez le monde</button>
                        <?php 
                        echo get_search_form();
                       ?>
                    </div>
                </div>
            </div>
        </section>
        <ul class="les_categories">
            <a href="https://gftnth00.mywhc.ca/4w4_24/costa-rica-2/"><li class="proposition_populaire">Costa Rica</li></a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/amazon-rainforest-bresil/"><li class="proposition_populaire">Brézil</li></a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/parc-national-de-yellowstone-etats-unis/"><li class="proposition_populaire">Yellowstone</li></a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/fiordland-national-park-nouvelle-zelande/"><li class="proposition_populaire">Nouvelle-Zélande</li></a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/parc-national-de-yosemite-etats-unis/"><li class="proposition_populaire">Parc Yosemite</li></a>
        </ul>
    </div>
</div>
<?php  get_footer();?>

<script>
    /*Code recupere du fichier js*/
    let btn = document.getElementById('bouton_retour');

    btn.addEventListener('click', revenirFrontPage) 

    function revenirFrontPage() {
    document.location.href = 'https://gftnth00.mywhc.ca/4w4_24/';
    };
</script>