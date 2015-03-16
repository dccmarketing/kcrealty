<?php
/**
 * The template for displaying all single properties.
 *
 * @package KC Realty
 */

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

		while ( have_posts() ) : the_post();

			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header contentsingle"><?php

					the_title( '<h1 class="entry-title">', '</h1>' );

				?></header><!-- .entry-header -->
				<div class="entry-content">
					<h3>Property Highlights</h3><?php

					the_content();

				?></div><!-- .entry-content --><?php

				$gallery = get_field( 'image_gallery', false, false );

				if ( !empty( $gallery ) ) {

					?><div class="property-gallery">
						<h3>Property Gallery</h3><?php

						$gallery = get_field( 'image_gallery', false, false );

						$shortcode = '[gallery ids="' . implode( ',', $gallery ) . '"]';

						echo do_shortcode( $shortcode );

					?></div><!-- .property-gallery --><?php

				}

				$location = get_field( 'property_map' );

				if ( !empty( $location ) ) {

					?><div class="property-map">
						<h3>Property Map</h3>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
					</div><!-- .property-map --><?php

				}

				$flyer = get_field( 'property_flyer' );
				$lease = get_field( 'leasing_plan' );

				if ( ! empty( $flyer ) || ! empty( $lease ) ) {

					?><div class="property-details">
						<h3>Property Details</h3><?php

						if ( ! empty( $flyer ) ) {

							?><p><a href="<?php echo $flyer; ?>">Download Property Flyer</a></p><?php

						}

						if ( ! empty( $lease ) ) {

							?><p><a href="<?php echo $lease; ?>">Download Leasing Plan</a></p><?php

						}

					?></div><!-- .property-details --><?php

				}

			?></article><!-- #post-## --><?php

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>