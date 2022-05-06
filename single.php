<?php get_header(); ?>

<section class="container page-container">
	
	<div class="posts-container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<article>	
					<div>
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail( $size = 'medium', $attr = 'post-thumbnail' );?>
						<?php endif; ?>

						<?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
					
						<p><?=get_the_date();?> | <?php the_author(); ?></p>
						<p class="excerpt">
							<?php the_content(); ?>
						</p>
						<p><?php comments_number('0 Comentários','um comentario', '% comentários'); ?> </p>
						
						<div class="posts-relation">
							<h3>Posts Relacionados</h3>
							<?php 
								
								$category = get_the_category();
								
								$query = new WP_Query( array(
										'post_per_page' => 3,
										'post__not_in' => array( $post->ID ),
										'cat' => $category[0]->term_id,
									));
								
								if($query->have_posts()){
									while( $query->have_posts() ){
										$query->the_post();
										?>
										<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									<?php
									}
								}
							 ?>
						</div>

						<div>
							<?php if(comments_open()): ?>
								<?php comments_template(); ?>
							<?php endif; ?>
						</div>
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
