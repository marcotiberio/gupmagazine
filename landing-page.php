<?php
	/* Template Name: Landing Page */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

		<button class="button_landing">
			<?php
			$link = get_field('button');
			if( $link ):
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_blank';
				?>
				<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>
		</button>

		<section class="background_landing">

		<?php if( have_rows('flexible') ): ?>
			<?php while( have_rows('flexible') ): the_row(); ?>
				<?php if( get_row_layout() == 'intro' ): ?>
					<section class="intro">
						<h1><?php the_sub_field('big'); ?></h1>
						<h3><?php the_sub_field('small'); ?></h3>
					</section>
				<?php endif; ?>
				<?php if( get_row_layout() == 'hero_image' ): ?>
					<?php if( have_rows('images') ): ?>
						<?php while( have_rows('images') ): the_row();

							// Get sub field values.
							$image_desktop = get_sub_field('image_desktop');
							$image_mobile = get_sub_field('image_mobile');

							?>
							<section class="hero" style="background-image:url()">
								<?php
								$image_desktop = get_sub_field('image_desktop');
								if( !empty( $image_desktop ) ): ?>
									<img class="image-desktop" src="<?php echo esc_url($image_desktop['url']); ?>" alt="<?php echo esc_attr($image_desktop['alt']); ?>" />
								<?php endif; ?>
								<?php
								$image_mobile = get_sub_field('image_mobile');
								if( !empty( $image_mobile ) ): ?>
									<img class="image-mobile" src="<?php echo esc_url($image_mobile['url']); ?>" alt="<?php echo esc_attr($image_mobile['alt']); ?>" />
								<?php endif; ?>
							</section>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</section>

</div>


<?php
get_sidebar();
get_footer();
