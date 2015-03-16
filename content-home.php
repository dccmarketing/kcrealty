<?php
/**
 * @package KC Realty
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content"><?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'kcrealty' ),
			'after'  => '</div>',
		) );

	?></div><!-- .entry-content -->
</article><!-- #post-## -->