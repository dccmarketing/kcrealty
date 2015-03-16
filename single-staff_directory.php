<?php
/**
 * The template for displaying all single staff members.
 *
 * @package KC Realty
 */

get_header();
$meta = get_post_meta( get_the_ID() );

	?><div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

		while ( have_posts() ) : the_post();

			?><article id="post-<?php the_ID(); ?>" <?php post_class( 'staff-single' ); ?>>
				<header class="entry-header contentsingle"><?php

					if ( has_post_thumbnail() ) {

						the_post_thumbnail( 'medium', array( 'class' => 'staff-single-image' ) );

					}

					?><div class="staff-single-info"><?php

						the_title( '<h1 class="entry-title">', '</h1>' );

						if ( ! empty( $meta['position_title'][0] ) ) {

							?><h3 class="staff-position"><?php echo $meta['position_title'][0]; ?></h3><?php


						}

						if ( ! empty( $meta['email_address'][0] ) ) {

							?><a href="mailto:<?php echo $meta['email_address'][0]; ?>" class="staff-email">Email</a><?php


						}

						if ( ! empty( $meta['vcard'][0] ) ) {

							?><a href="<?php echo $meta['vcard'][0]; ?>" class="staff-vcard">Download v-card</a><?php


						}

					?></div>
				</header><!-- .entry-header -->
				<div class="entry-content"><?php

					the_content();

				?></div><!-- .entry-content -->
			</article><!-- #post-## --><?php

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>