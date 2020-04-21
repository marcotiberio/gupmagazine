<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gup_underscore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gup_underscore' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gup_underscore' ),
			'after'  => '</div>',
		) );
		?>

<div id="post-title">
        <h2><?php the_field('book_title'); ?></h2>
    </div>

    <hr style="margin: 0 10%;">

    <div id="post-content">
        <div class="post-credits">
            <div>
                <?php if( get_field('book_credits_author') ): ?>
                <h4>GUP Author</h4>
                <p><?php the_field('book_credits_author'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <hr style="margin-right:40%;">
            <div>
                <?php if( get_field('book_credits_artist') ): ?>
                <h4>Artist</h4>
                <p><?php the_field('book_credits_artist'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_artist-website') ): ?>
                <h4>Artist Website</h4>
                <p><?php the_field('book_credits_artist-website'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_artist-social-media') ): ?>
                <h4>Artist Social Media</h4>
                <p><?php the_field('book_credits_artist-social-media'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <hr style="margin-right:40%;">
            <div>
                <?php if( get_field('book_credits_book-title') ): ?>
                <h4>Title</h4>
                <p><?php the_field('book_credits_book-title'); ?></h4>
                </p>
                <?php if( get_field('book_credits_book-cover') ): ?>
                <?php 
                        $image = get_field('book_credits_book-cover');
                        $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-publisher') ): ?>
                <h4>Publisher</h4>
                <p><?php the_field('book_credits_book-publisher'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-format') ): ?>
                <h4>Format</h4>
                <p><?php the_field('book_credits_book-format'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_book-price') ): ?>
                <h4>Price</h4>
                <p><?php the_field('book_credits_book-price'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_publisher-website') ): ?>
                <h4>Publisher Website</h4>
                <p><?php the_field('book_credits_publisher-website'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
            <div>
                <?php if( get_field('book_credits_publisher-social-media') ): ?>
                <h4>Publisher Social Media</h4>
                <p><?php the_field('book_credits_publisher-social-media'); ?></h4>
                </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="post-text">
            <p><?php the_field('book_text'); ?></p>
        </div>

    </div>
	
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
