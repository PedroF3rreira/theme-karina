<?php get_header(); ?>

<section class="container page-container">
	<div class="posts-container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				
				<?php get_template_part('template_parts/post'); ?>

			<?php endwhile; ?>
		<?php endif; ?>	
		<div class="pagination">
			<div><?php previous_posts_link( 'Voltar' ); ?></div>
			<div><?php next_posts_link( 'Proxímo' ); ?></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	
</section>

<?php get_footer(); ?>	
