<?php 
	/* Template Name: Talents */
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
			
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