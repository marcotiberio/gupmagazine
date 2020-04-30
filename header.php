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
				<button class="menu-toggle" id="menu-toggleMobile" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
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
			<i class="fas fa-bars" id="open_menuOverlay"></i>
		</div>
	</header><!-- #masthead -->

	<section id="menuOverlay">
		<main class="menuOverlay--inside">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'overlay-menu',
				'menu_id'        => 'overlay-menu',
			) );
			?>
			<div class="column" id="column--hidden_mobile">
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
			<div class="column" id="column--hidden_mobile">
			<h4>FOLLOW US</h4>
				<div class="social-footer" style="margin: 0;">
					<div><a href="https://www.facebook.com/GUP.magazine/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></div>
					<div><a href="https://www.instagram.com/gupmagazine/" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a></div>
					<div><a href="https://twitter.com/gupmagazine" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></div>
				</div>
			</div>
			<div class="column" id="column--hidden_mobile">
				<h4>CURRENT ISSUE</h4>
				<div><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/03/64-e1585331048652.png" alt=""></div>
				<a href="#" target="_blank">BUY</a>
			</div>
			<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/fresheyes.png" alt=""></div>
			<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/GUP-NEW-logo-2019.1.png" alt=""></div>
			<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/Fritz-Kola-Logo.png" alt=""></div>
			<div class="sponsor-image"><img src="https://gupmagazine.kinsta.cloud/wp-content/uploads/2020/04/BRINKHOF_BLACK.png" alt=""></div>
		</main>
	</section>

	<div id="content" class="site-content">
