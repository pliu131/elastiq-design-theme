<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elastiqdesign
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<script src="https://use.typekit.net/fxa8pns.js"></script>
	<script src="https://use.fontawesome.com/6f7cd88ea7.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83590974-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elastiqdesign' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="site-branding">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<span class="elastiq">elastiq</span><span class="design">design</span>
						</a></h1>
					<?php else : ?>
						<p class="site-title"><a class="site-title__link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="elastiq">elastiq</span><span class="design">design</span></a></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '☰ Menu', 'elastiqdesign' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<a class="typeform-share link button button--project" href="https://peterliu1.typeform.com/to/pxW6wn" data-mode="1" target="_blank">Get in Touch</a>
				</nav><!-- #site-navigation -->
			</div><!-- .container --> 
		</header><!-- #masthead -->

<div id="content" class="site-content">
