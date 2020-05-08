<?php 
	/* Template Name: Talents */
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
            
        <?php

            // check if the repeater field has rows of data
            if( have_rows('talents_slides') ):

                // loop through the rows of data
                while ( have_rows('talents_slides') ) : the_row();

                    // display a sub field value
                    the_sub_field('talents_slides');

                endwhile;

            else :

                // no rows found

            endif;

        ?>

			<main class="container">
                <div class="gup-new">
                    <div class="img">
                        <?php 
                        $image = get_field('gupnew_cover');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </div>
                    <div class="text">
                        <p><?php the_field('gupnew_text'); ?></p>
                    </div>
                </div>
                <div class="fresh-eyes">
                    <div class="text">
                        <p><?php the_field('fresheyes_text'); ?></p>
                    </div>
                    <div class="img">
                        <?php 
                        $image = get_field('fresheyes_cover');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </div>
                </div>
            </main>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();