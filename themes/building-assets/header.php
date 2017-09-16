<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header reverse-header" role="banner">
				<div class="container">
					<div class="title">
					<h1>Building Assets</h1>
					</div>
					<div class="menu">
						<a href="#mission">Mission</a>
						<a href="#vision">Vision</a>
						<a href="#who-we-are">Who We Are</a>
						<a href="#what-we-do">What We Do</a>
					</div>
				</div>
				</div>
			</header><!-- #masthead -->
			<button class='donate-button'>
					<h1>Donate</h1>
				</button>
</div>
			<div id="content" class="site-content">

