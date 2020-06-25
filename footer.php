<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gup_underscore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-custom">
			<div class="footer-custom-column" id="footer-custom-col1">
				<h4>LINKS</h4>
				<p>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
				) );
				?>
				</p>
			</div>
			<div class="footer-custom-column" id="footer-custom-col2">
				<h4>EDITORIAL OFFICE</h4>
				<p>
				GUP Magazine<br>
				Lindengracht 35<br>
				1015 KB Amsterdam<br>
				The Netherlands<br>
				</p>
			</div>
			<div class="footer-custom-column" id="footer-custom-col3">
			<h4>NEWSLETTER</h4>
			<!-- NEWSLETTER -->
			<form style="padding:0; text-align:center;" 
					action="https://tinyletter.com/gupmagazine" 
					method="post" 
					target="popupwindow" 
					onsubmit="window.open('https://tinyletter.com/gupmagazine', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
			<p><label for="tlemail">Stay updated on our latest publications, events, articles and open calls</label></p>
			<p><input type="text" style="width:140px" name="email" id="tlemail" /></p>
			<input type="hidden" value="1" name="embed"/>
			<input type="submit" value="Subscribe" /><p>
			<!-- NEWSLETTER -->
			</div>
			<div class="footer-custom-column" id="footer-custom-col4">
				<h4>FOLLOW US</h4>
				<div class="social-footer">
					<div><a href="https://www.facebook.com/GUP.magazine/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a></div>
					<div><a href="https://www.instagram.com/gupmagazine/" target="_blank"><i class="fab fa-instagram-square fa-2x"></i></a></div>
					<div><a href="https://twitter.com/gupmagazine" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a></div>
				</div>
				<h4>CONTACT US</h4>
				<a href="mailto:info@gupmagazine.com" target="_blank">info@gupmagazine.com</a>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gup_underscore' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'gup_underscore' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'gup_underscore' ), 'gup_underscore', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
