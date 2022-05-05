<?php 
//adiciona os styles ao tema
function pk_theme_styles()
{
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js',array('jquery'),false);
}

//depois de carregar executa está ação para adicionar menu
function pk_after_setup()
{
	add_theme_support('menus');
	add_theme_support('post-thumbnails');//adiciona suporte a thumbnail no tema
	register_nav_menu('primary', __('primary menu', 'karina'));//registra um menu
}

//adicionar widgets
function pk_widgets()
{
	//registra um sidebar widgets
	register_sidebar(array(
		'name' => __('Primeiro sidebar', 'karina'),
		'id' => 'pk_sidebar',
		'description' => __('sidebar basico', 'karina'),
		'after_title' => '<h4>',
		'before_title' => '</h4>',
		'after_widget' => '<div>',
		'before_widget' => '</div>'
	));
}

