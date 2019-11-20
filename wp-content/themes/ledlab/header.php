<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ledlab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Lifespan Emotional Development Lab at Northeastern, studying aging and emotion throughout the adult lifespan">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ledlab' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-content">
			<div class="custom-logo">
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
					} 
				?>
			</div><!-- .custom-logo -->

			<nav id="site-navigation" class="main-navigation">
			  <div id="topnav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			  </div>
			</nav><!-- #site-navigation -->
		</div> <!-- .header-content -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
