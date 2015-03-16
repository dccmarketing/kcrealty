<?php
/**
 * @package KC Realty
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

	the_post_thumbnail( 'newslist' );

	?><header class="entry-header contentsingle"><?php

		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

	?></header><!-- .entry-header -->

	<div class="entry-content"><?php

		the_excerpt();

	?></div><!-- .entry-content -->

	<footer class="entry-footer"><?php

		kcrealty_posted_on();

		kcrealty_entry_footer();

	?></footer><!-- .entry-footer -->
</article><!-- #post-## -->