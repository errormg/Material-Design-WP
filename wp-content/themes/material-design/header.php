<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Material Design
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="mdl-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.blue_grey-orange.min.css" /> -->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.deep_purple-pink.min.css" /> 

</head>

<body <?php body_class( 'mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base' ); ?>>
<div id="page" class="hfeed site mdl-layout__container has-scrolling-header">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header has-drawer has-tabs is-upgraded" data-upgraded=",MaterialLayout">
		<a class="skip-link screen-reader-text visuallyhidden" href="#content"><?php esc_html_e( 'Skip to content', 'material-design' ); ?></a>

		<header id="masthead" class="site-header mdl-layout__header mdl-layout__header--scroll mdl-color--primary" role="banner">
			<div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
			<div class="site-branding mdl-layout__header-row">
				<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
				<!--<p class="site-description"><?php bloginfo( 'description' ); ?></p>-->
			</div><!-- .site-branding -->
			<div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>

			<div class="mdl-layout__tab-bar-container">
				<nav id="site-navigation" class="main-navigation mdl-layout--large-screen-only mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark mdl-js-ripple-effect--ignore-events" role="navigation" data-upgraded=",MaterialRipple">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'link_after' => '<span class="mdl-layout__tab-ripple-container mdl-js-ripple-effect" data-upgraded=",MaterialRipple"><span class="mdl-ripple is-animating" style="width: 268.063079926547px; height: 268.063079926547px; -webkit-transform: translate(-50%, -50%) translate(87px, 32px); transform: translate(-50%, -50%) translate(87px, 32px);"></span></span>' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
		<div class="mdl-layout__drawer">
	        <span class="mdl-layout-title">Material Design Lite</span>
	        <nav class="mdl-navigation">
	          <a href="#overview" class="mdl-navigation__link">Overview</a>
	          <a href="#features" class="mdl-navigation__link">Features</a>
	          <a href="#features" class="mdl-navigation__link">Details</a>
	          <a href="#features" class="mdl-navigation__link">Technology</a>
	          <a href="#features" class="mdl-navigation__link">FAQ</a>
	        </nav>
      	</div>

		<div id="content" class="site-content mdl-layout__content">
