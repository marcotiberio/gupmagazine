<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gup_underscore
 */

get_header();
?>

<section id="menuOverlay">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'overlay-menu',
			'menu_id'        => 'overlay-menu',
		) );
		?>
		<div class="column">
			<h4>EDITORIAL OFFICE</h4>
			<p>
			GUP Magazine<br>
			Lindengracht 35<br>
			1015 KB Amsterdam<br>
			The Netherlands<br>
			<br>
			<a href="mailto:info@gupmagazine.com" target="_blank">info@gupmagazine.com</a>
			</p>
		</div>
		<div class="column">
		<h4>FOLLOW US</h4>
			<div class="social-footer">
				<div><a href="https://www.facebook.com/GUP.magazine/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></div>
				<div><a href="https://www.instagram.com/gupmagazine/" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a></div>
				<div><a href="https://twitter.com/gupmagazine" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></div>
			</div>
		</div>
		<div class="column">
			<?php if( get_field('current_issue_cover') ): ?>
			<h4>CURRENT ISSUE</h4>
			<p><?php the_field('current_issue_cover'); ?></p>
			<?php if( get_field('current_issue_cover') ): ?>
			<?php 
					$image = get_field('current_issue_cover');
					$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					} ?>
			<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/fresheyes_logo.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/gupnew_logo.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/fritzkola_logo.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/brinkhof_logo.png" alt=""></div>
	</section>

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
