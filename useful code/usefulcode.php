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




<?php if ( memberful_can_user_access_post( get_current_user_id(), get_the_ID() ) ) { ?>

    <div id="post-title">
        <h2><?php the_field('book_title'); ?></h2>
    </div>

    <hr style="margin: 0 10%;">
    
    <div id="post-credits_mobile-title">
        <h4>CREDITS</h4>
    </div>

    <div id="post-content">
        <div class="post-credits" id="toggle-credits-mobile">
            <div>
                <?php if( get_field('book_credits_author') ): ?>
                <h4>GUP Author</h4>
                <p><?php the_field('book_credits_author'); ?></p>
                <?php endif; ?>
            </div>
            <hr style="margin-right:40%;">
            <div>
                <?php if( get_field('book_credits_artist') ): ?>
                <h4>Artist</h4>
                <p><?php the_field('book_credits_artist'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_artist-website') ): ?>
                <h4>Artist Website</h4>
                <p><?php the_field('book_credits_artist-website'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_artist-social-media') ): ?>
                <h4>Artist Social Media</h4>
                <p><?php the_field('book_credits_artist-social-media'); ?></p>
                <?php endif; ?>
            </div>
            <hr style="margin-right:40%;">
            <div>
                <?php if( get_field('book_credits_book-title') ): ?>
                <h4>Title</h4>
                <p><?php the_field('book_credits_book-title'); ?></p>
                <?php if( get_field('book_credits_book-cover') ): ?>
                <?php 
                        $image = get_field('book_credits_book-cover');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-publisher') ): ?>
                <h4>Publisher</h4>
                <p><?php the_field('book_credits_book-publisher'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-format') ): ?>
                <h4>Format</h4>
                <p><?php the_field('book_credits_book-format'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-price') ): ?>
                <h4>Price</h4>
                <p><?php the_field('book_credits_book-price'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_publisher-website') ): ?>
                <h4>Publisher Website</h4>
                <p><?php the_field('book_credits_publisher-website'); ?></p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_publisher-social-media') ): ?>
                <h4>Publisher Social Media</h4>
                <p><?php the_field('book_credits_publisher-social-media'); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="post-text">
            <p><?php the_field('book_text'); ?></p>
        </div>

    </div>
<?php } ?>