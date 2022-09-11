<?php 

function writers_resources()
{
	wp_enqueue_style('font-a', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', false);
	wp_enqueue_script('swup', get_template_directory_uri() . '/assets/js/swup.min.js', '', '', false);
	wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'writers_resources');

?>