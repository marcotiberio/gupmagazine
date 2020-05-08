<?php 
	/* Template Name: Talents */
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
            

        <section class="talents-slider">
            <?php
            if( have_rows('talents_slides') ):
            $i = 1;
            $row_count = count(get_field('talents_slides'));
            while ( have_rows('talents_slides') ) : the_row();
            ?>
        </section>

			<main class="container">
                <h3>GUP NEW</h3>
                <div class="gup-new">
                    <div class="cover">
                        <?php 
                        $image = get_field('gupnew_cover');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </div>
                    <div class="text">
                        <p><?php the_field('gupnew_text'); ?></p>
                    </div>
                </div>
                <h3>FRESH EYES</h3>
                <div class="fresh-eyes">
                    <div class="text">
                        <p><?php the_field('fresheyes_text'); ?></p>
                    </div>
                    <div class="cover">
                        <?php 
                        $image = get_field('fresheyes_cover');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
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