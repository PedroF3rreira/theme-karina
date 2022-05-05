<?php 
//arquivo onde são executatos os hooks do wordpress
require get_template_directory().'/inc/setup.php';

add_action('wp_enqueue_scripts', 'pk_theme_styles');//adiciona estilos para o tema
add_action('after_setup_theme', 'pk_after_setup');//executa função apos carregamento do tema
add_action('widgets_init', 'pk_widgets');//inicia os widgets

?>