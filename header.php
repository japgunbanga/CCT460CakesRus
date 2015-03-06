<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gaby
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Calling Jquery for the slider -->
<script type="text/javascript" src="<?php echo bloginfo('template_url') ?>/js/jquery.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cakes-r-us' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		    <!-- Adding custom image for logo will display left side if defined -->
			<div class="site-logo">	
				<?php if ( get_header_image() ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
					</a>
				<?php endif; // End header image check. ?>
			</div>
			<div class="site-branding-right">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'cakes-r-us' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
