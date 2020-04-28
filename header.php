<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gup_underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gup_underscore' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$gup_underscore_description = get_bloginfo( 'description', 'display' );
			if ( $gup_underscore_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gup_underscore_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<div class="nav-custom">
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>
		</div><!-- #site-navigation -->
		<div class="nav--search">
			<?php get_search_form(); ?>
		</div>
		<div class="nav--overlay">
			<i class="fas fa-bars" id="open_menuOverlay" onclick="openMenuoverlay()"></i>
		</div>
	</header><!-- #masthead -->

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
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/fresheyes.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/GUP-NEW-logo-2019.1.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/Fritz-Kola-Logo.png" alt=""></div>
		<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/BRINKHOF_BLACK.png" alt=""></div>
	</section>

	<div id="content" class="site-content">
