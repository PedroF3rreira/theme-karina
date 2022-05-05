<form role="search" method="get" class="search-form" action="<?=esc_url(home_url('/'));  ?>">
	<input type="search" name="s" value="<?php the_search_query();?>">
	<input type="submit" value="Buscar">
</form>