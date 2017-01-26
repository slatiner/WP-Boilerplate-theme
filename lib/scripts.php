<?php


function styles() {
  //wp_register_style('styles', get_template_directory_uri() . '/assets/css/dest/main.css' , false, null);
  //wp_enqueue_style('styles');

}
add_action('wp_enqueue_scripts', 'styles', 2);


function scripts() {
	  //JS
	  wp_register_script('scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'),true, true);
    wp_register_script('matchheight', get_template_directory_uri() . '/assets/vendor/jquery-match-height-master/jquery.matchHeight.js' ,array('jquery'),true, true);

}
add_action('wp_enqueue_scripts', 'scripts', 99);
