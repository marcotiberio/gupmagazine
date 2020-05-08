<?php 
	/* Template Name: Talents */
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">

        <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
        ?>
        
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