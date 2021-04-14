<?php
	/* Template Name: About Page */
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

		<section class="mission">
			<h3><strong>MISSION</strong></h3>
			<?php the_field('mission', 165); ?>
		</section>
		<section class="team">
			<h3 style="display: none;"><strong>TEAM</strong></h3>
			<?php if( have_rows('team', 165) ): ?>
				<div class="grid">
					<?php while( have_rows('team', 165) ): the_row();
						$photo = get_sub_field('photo');
						$name = get_sub_field('name');
						$position = get_sub_field('position');
						$bio = get_sub_field('bio');
						?>
						<div class="member">
							<?php if( get_sub_field('photo') ): ?>
								<img src="<?php the_sub_field('photo'); ?>">
							<?php endif; ?>
							<?php if( get_sub_field('name') ): ?>
								<h3><?php the_sub_field('name'); ?></h3>
							<?php endif; ?>
							<?php if( get_sub_field('position') ): ?>
								<p><?php the_sub_field('position'); ?></p>
							<?php endif; ?>
							<?php if( get_sub_field('bio') ): ?>
								<?php the_sub_field('bio'); ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>
		<section>
			<div class="addresses">
				<div><?php the_field('editorial_office'); ?></div>
				<div><?php the_field('customer_service'); ?></div>
				<div><?php the_field('advertising_corporate'); ?></div>
			</div>
		</section>

</div>


<?php
get_sidebar();
get_footer();
