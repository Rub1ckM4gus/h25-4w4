<?php
$footer_couleur = get_theme_mod('footer_couleur','#aaa')
//genere_vague($footer_couleur);
?>
<footer style="background-color": <?= $footer_couleur?> >
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe", 
                    "container" => "nav", 
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur officia optio itaque 
                    omnis quaerat sed nemo dolorum? Perferendis, impedit. Sapiente unde 
                    saepe labore ducimus eligendi nostrum sint nisi. Nemo, tempora!
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. In odit quos, perspiciatis amet velit 
                officia enim distinctio incidunt officiis iure. Mollitia esse maiores id numquam iure in iste? 
                Exercitationem, ea!
            </div>
        </section>
        <section class="piedpage_s2"></section>
        <section class="piedpage_s3"></section>
    </div>
</footer>
<?php wp_footer() ?>