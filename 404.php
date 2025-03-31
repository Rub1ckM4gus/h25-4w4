<?php get_header(); ?>

<?php
$background_404= get_theme_mod('background_404', '');
?>

<div id="accueil" class="global404">
    <div class="gabarit_404" style="background-image: url(<?php echo $background_404 ?>)">
        <section class="accueil__section ensemble_404">
            <div class="assembler_404">
                <div>
                    <h2 class="texte_annonce404">Oops, vous avez échoué sur l'île 404 !</h2>
                    <p class="texte_explication404">Pas de panique, cher membre explorateur ! Vous avez dérivé
                        un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées 
                        pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau 
                        nos voyages d’exception !</p>
                    <div class="conteneur_404">
                        <button id="bouton_retour" type="button">Retour à l'accueil</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="les_categories">
            <a href="https://gftnth00.mywhc.ca/4w4_24/costa-rica-2/" class="proposition_populaire">Costa Rica</a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/amazon-rainforest-bresil/" class="proposition_populaire">Brézil</a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/parc-national-de-yellowstone-etats-unis/" class="proposition_populaire">Yellowstone</a>
            <a href="https://gftnth00.mywhc.ca/4w4_24/fiordland-national-park-nouvelle-zelande/" class="proposition_populaire">Nouvelle-Zélande</a>
        </div>
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