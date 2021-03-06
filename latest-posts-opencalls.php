<?php 
	/* Template Name: Latest Posts Open Calls */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
			
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

		<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'category_name' => 'open-call',
				'posts_per_page' => -1
			);
			$arr_posts = new WP_Query( $args );
			 
			if ( $arr_posts->have_posts() ) :
			 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
					<article class="latestpost--custom" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div>
						<?php
						if ( has_post_thumbnail() ) :
							the_post_thumbnail( 'thumbnail-list' );
						endif;
						?>
						</div>
						<div>
						<header class="entry-header">
							<a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
							<h5 class="post-subtitle">
								<span><?php the_field('post_subtitle'); ?></span>
							</h5>
						</header>
						<div class="entry-content">
						<?php $summary = get_field('opencall_text');
          					echo substr($summary, 0, 300); ?><span>...</span>
							<p><a href="<?php the_permalink(); ?>">Read More</a></p>
						</div>
						</div>
					</article>
					<?php
				endwhile;
			endif; ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
