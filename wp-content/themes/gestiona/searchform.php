<?php
/*
* The template for displaying Search Form
* Template Name: Search Form
*/
?>
<form id="searchform" action="<?php bloginfo('url'); ?>" method="get" accept-charset="utf-8" role="search">
    <div><input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Pesquise por..." >
    <input type="submit" id="searchsubmit" value=" " ></div>
</form>