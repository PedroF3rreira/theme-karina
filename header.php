<!DOCTYPE html>
<html>
<head>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container">
		<div class="header-section">
			
			<div class="logo">
				<h1>Karina theme</h1>
			</div>
			
			<?php get_search_form(); ?>
			
			<?php 
				if(has_nav_menu('primary')){
					
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'menu-container',
						'fallback_cb' => false
					));
				}
			 ?>
		 </div>
	</div>
</header>