<?php
/**
 * Header template.
 *
 * @package SyncBookingVillaResort
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e( 'Vai al contenuto', 'syncbooking-villa-resort' ); ?></a>

<header class="site-header" data-header>
	<div class="site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Home', 'syncbooking-villa-resort' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="brand__name"><?php bloginfo( 'name' ); ?></span>
				<span class="brand__tagline"><?php esc_html_e( 'Resort & SPA', 'syncbooking-villa-resort' ); ?></span>
			<?php endif; ?>
		</a>

		<button class="menu-toggle" type="button" data-menu-toggle aria-controls="primary-menu" aria-expanded="false">
			<span></span>
			<span></span>
			<span></span>
			<?php esc_html_e( 'Menu', 'syncbooking-villa-resort' ); ?>
		</button>

		<nav class="primary-nav" id="primary-menu" data-menu>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'primary-nav__list',
				'fallback_cb'    => 'sbvr_default_menu',
			) );
			?>
		</nav>

		<a class="header-cta" href="<?php echo esc_url( sbvr_get_theme_option( 'sbvr_booking_url', '#booking' ) ); ?>">
			<?php esc_html_e( 'Prenota', 'syncbooking-villa-resort' ); ?>
		</a>
	</div>
</header>

<main id="content" class="site-main">
