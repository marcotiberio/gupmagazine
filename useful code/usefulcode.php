<?php

/* ENQUEUE CSS */
function load_stylesheets()
{

    /* MY STYLE */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    /* BOOTSTRAP */
    wp_register_style('style', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');



/* ENQUEUE JQUERY */
function include_jquery()
{

    /* JQUERY */
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');



}
add_action('wp_enqueue_scripts', 'include_jquery');



/* ENQUEUE JS */
function loadjs()
{

    /* MY CUSTOM JS */
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);

    wp_enqueue_script('customjs');



}
add_action('wp_enqueue_scripts', 'loadjs');




add_theme_support( 'custom-logo', array(
	'height'      => 63,
	'width'       => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );



add_theme_support('menus');


register_nav_menus(

  array(

        'top-menu' => __('Main Nav', 'theme'),
        'footer-menu' => __('Footer Nav', 'theme'),
  )
);



add_theme_support('post-thumbnails');





add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);