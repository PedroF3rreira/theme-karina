<?php 
/**
 * Template name: largura total
 */
 ?>
<?php get_header(); ?>
<!--arquivo criado para gerenciar as paginas-->
<section class="container">
	<div class="posts-container">
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<article>
				<div>
					<a href="<?php the_permalink();?>">

						<?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
						
					</a>

					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail( $size = 'large', $attr = 'post-thumbnail' );?>
					<?php endif; ?>

					<p>
						<?php the_content(); ?>
					</p>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>	


 ?>
	
	