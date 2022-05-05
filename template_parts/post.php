<article>

	<?php if( has_post_thumbnail() ):?>
		<a href="<?php the_permalink();?>"><?php the_post_thumbnail( $size = 'medium', $attr = 'post-thumbnail' );?></a>
	<?php endif;?>

	<div class="post-body">
		<a href="<?php the_permalink();?>">
			<?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
		</a>
		<p><?=get_the_date();?> | <?php the_author(); ?></p>
		<p>Categoria: <?php the_category( $separator = '-', $parents = '', $post_id = false )?></p>
		<p class="excerpt">
			<?php the_excerpt(); ?>
		</p>

		<p><?php comments_number(); ?></p>
	</div>
</article>