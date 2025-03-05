<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    <button class="recherche__bouton" type="submit">
        <span class="recherche__icone">🔍</span>
    </button>
</form>

