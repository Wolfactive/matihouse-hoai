<form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
    <input class="input-search" onclick="onClick_search()" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <button class="btn-submit" type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>