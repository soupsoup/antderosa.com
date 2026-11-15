<?php
/**
 * Header: brand + nav + hamburger.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="lt-header">
	<a class="lt-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

	<nav class="lt-nav" aria-label="<?php esc_attr_e( 'Primary', 'limeticker' ); ?>">
		<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'      => false,
		'fallback_cb'    => 'limeticker_fallback_menu',
		'depth'          => 2,
	) );
	?>
	</nav>

	<button class="lt-burger" type="button" aria-expanded="false" aria-controls="lt-mobile-menu">MENU</button>
</header>

<nav class="lt-mobile-menu" id="lt-mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'limeticker' ); ?>">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'      => false,
		'fallback_cb'    => 'limeticker_fallback_menu',
		'depth'          => 2,
	) );
	?>
</nav>
