<?php get_header(); ?>
<!--arquivo criado para gerenciar as paginas-->
<section class="container page-container">
	<div class="posts-container">
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
					<?php the_content(); ?>
				</p>
				<div>
					<?php if(comments_open()): ?>
						<?php comments_template(); ?>
						<?php comments_number(); ?>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<div><?php previous_posts_link('Voltar'); ?></div>
			<div><?php next_posts_link('Proxímo'); ?></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	
</section>

<?php get_footer(); ?>	


 ?>
	
	