<?php
function exhair_setup()
{

}
add_action('after_setup_theme', 'exhair_setup');



/**
 * Enqueue scripts and styles.
 */
function exhair_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/normalize.css', 'style', time());
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', 'style', time());
	//wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', 'style', time());

	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', time(), true);
	wp_enqueue_script('retina-js', get_template_directory_uri() . '/assets/js/retina.min.js', time(), true);
	//wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', time(), true);

}
add_action('wp_enqueue_scripts', 'exhair_scripts');