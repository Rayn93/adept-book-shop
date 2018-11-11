<?php


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles()
{
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_filter( 'current_theme_supports-wc-product-gallery-zoom', '__return_false' );
add_filter( 'current_theme_supports-wc-product-gallery-slider', '__return_false' );
add_filter( 'current_theme_supports-wc-product-gallery-lightbox', '__return_false' );

?>