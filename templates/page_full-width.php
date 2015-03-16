<?php
/**
 * Template Name: Full-width, no sidebar
 *
 * Description: A full-width template with no sidebar
 *
 * @package KC Realty
 */

get_header(); ?>

		<div class="wrap">
			<div id="content" class="full-width"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

			endwhile; // loop

			?></div><!-- .full-width --><?php

get_footer(); ?>