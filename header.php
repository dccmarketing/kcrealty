<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package KC Realty
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kcrealty' ); ?></a><?php

	if ( is_front_page() ) {

		putRevSlider( 'homepage' );

	} else {

		if ( is_singular( 'staff_directory' ) ) {

			$bg_image = get_theme_mod( 'default_header_image' );

		} else {

			$id = get_queried_object_id();
			$bg_image = kcrealty_get_featured_image( $id );

		}

		echo '<div class="featured-image" style="
			background-image: -moz-linear-gradient(top, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.7) 75%, rgba(255,255,255,1) 100%),url(' . $bg_image . ');
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.7)), color-stop(75%,rgba(255,255,255,0.7)), color-stop(100%,rgba(255,255,255,1))),url(' . $bg_image . ');
			background-image: -webkit-linear-gradient(top, rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.7) 75%,rgba(255,255,255,1) 100%),url(' . $bg_image . ');
			background-image: -o-linear-gradient(top, rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.7) 75%,rgba(255,255,255,1) 100%),url(' . $bg_image . ');
			background-image: -ms-linear-gradient(top, rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.7) 75%,rgba(255,255,255,1) 100%),url(' . $bg_image . ');
			background-image: linear-gradient(to bottom, rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.7) 75%,rgba(255,255,255,1) 100%),url(' . $bg_image . ');
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=#b3ffffff, endColorstr=#ffffff,GradientType=0 ),url(' . $bg_image . ');"></div>';

	}

	?><header id="masthead" class="site-header" role="banner">
		<div class="header_wrap">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<div class="site-branding">

					<div class="logo"><?php echo kcrealty_get_svg( 'logo' ); ?></div>
					<h1 class="site-title"><span class="site-title-1">KC Commercial</span><span class="site-title-2">Realty Group</span></h1>
					<h2 class="site-description"><span class="header-desc-1">Real Estate</span> | <span class="header-desc-2">Development</span> | <span class="header-desc-3">Management</span></h2>
				</div><!-- .site-branding -->
			</a>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'kcrealty' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary' ) );

			?></nav><!-- #site-navigation -->
		</div><!-- .header_wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">