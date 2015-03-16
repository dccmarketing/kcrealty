<?php
/**
 * Template Name: Home Page
 *
 * Description: The home page template
 *
 * @package KC Realty
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'home' );

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_sidebar();
get_footer();
?>