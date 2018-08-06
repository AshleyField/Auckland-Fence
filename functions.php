<?php


function aucklandFenceCustomFiles(){
	wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_style('customGoogleFonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_script('swiperJS', get_theme_file_uri('minified/swiper.min.js'), NULL, '1.0', true);
	wp_enqueue_style('swiperCSS', get_theme_file_uri('minified/swiper.min.css'));
	wp_enqueue_script('aucklandFenceJS', get_theme_file_uri('minified/scripts.min.js'), NULL, '1.0', true);
	wp_enqueue_style('aucklandFenceStyles', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'aucklandFenceCustomFiles');

?>