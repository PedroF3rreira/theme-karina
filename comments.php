<?php
//caso os comentarios prescisem de senha 
	if(post_password_required()){
		return;
	}

 ?>

 <?php if(have_comments()): ?>
 	<?php foreach($comments as $comment):?>
 		<div class="comment">
 			
 			<div class="comment-image">
 				<?=get_avatar($comment, 60); ?>
 			</div>
			
			<div class="comment-content">
				<p class="author-comment"><?php comment_author(); ?> - <?php comment_date(); ?></p>
				<p class="text-comment"><?php comment_text();?></p>
			</div>
		
 		</div>
 	<?php endforeach; ?>
 <?php endif; ?>

 <?php the_comments_pagination(); ?>

 <?php comment_form(); ?>