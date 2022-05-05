<?php get_header(); ?>

<section class="container page-container">
	
	<div class="posts-container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<article>	

					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail( $size = 'medium', $attr = 'post-thumbnail' );?>
					<?php endif; ?>

					<?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
				
					<p><?=get_the_date();?> | <?php the_author(); ?></p>
					<p class="excerpt">
						<?php the_content(); ?>
					</p>
					<p><?php comments_number('0 Comentários','um comentario', '% comentários'); ?> </p>
					
					<div>
						<?php if(comments_open()): ?>
							<?php comments_template(); ?>
						<?php endif; ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>	
		<div class="pagination">
			<div><?php previous_post_link(); ?></div>
			<div><?php next_post_link(); ?></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	
</section>

<?php get_footer(); ?>	
