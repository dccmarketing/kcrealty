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

	if ( is_home() || is_front_page() ) {

		putRevSlider( 'homepage' );

	} else {

		echo kcrealty_get_featured_image( get_the_ID() );

	}

	/*
	<img src="<?php echo get_stylesheet_directory_uri() . '/images/HeaderGraphicSmall.png'; ?>" class="underlay" />
	*/

	?>
	<header id="masthead" class="site-header" role="banner">
		<div class="header_wrap">
			<div class="site-branding">
				<div class="logo"><?php echo kcrealty_get_svg( 'logo' ); ?></div>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="site-title-1"><?php echo get_field( 'name_1', 'option' ); ?></span><span class="site-title-2"><?php echo get_field( 'name_2', 'option' ); ?></span></a></h1>
				<h2 class="site-description"><span class="header-desc-1"><?php echo get_field( 'core_business_1', 'option' ); ?></span> | <span class="header-desc-2"><?php echo get_field( 'core_business_2', 'option' ); ?></span> | <span class="header-desc-3"><?php echo get_field( 'core_business_3', 'option' ); ?></span></h2>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'kcrealty' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary' ) );

			?></nav><!-- #site-navigation -->
		</div><!-- .header_wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">