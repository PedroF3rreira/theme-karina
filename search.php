<?php get_header(); ?>

<section class="container page-container">
	<h1>Você pesquisou por: <?php echo get_search_query();?></h1>
	<div class="posts-container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<article>
					
					<a href="<?php the_permalink();?>">

						<?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
						
					</a>

					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail( $size = 'medium', $attr = 'post-thumbnail' );?>
					<?php endif; ?>
					<p><?=get_the_date();?> | <?php the_author(); ?></p>
					<p class="excerpt">
						<?php the_excerpt(); ?>
					</p>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>	
		<div class="pagination">
			<div><?php previous_posts_link('Voltar'); ?></div>
			<div><?php next_posts_link('Proxímo'); ?></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	
</section>

<?php get_footer(); ?>	
