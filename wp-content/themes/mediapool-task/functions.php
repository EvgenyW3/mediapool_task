<?php
function enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');