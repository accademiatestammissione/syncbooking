<?php
/**
 * SyncBooking Villa Resort theme setup.
 *
 * @package SyncBookingVillaResort
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SBVR_VERSION', '1.0.0' );

function sbvr_setup() {
	load_theme_textdomain( 'syncbooking-villa-resort', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 96,
		'width'       => 260,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Menu principale', 'syncbooking-villa-resort' ),
		'footer'  => __( 'Menu footer', 'syncbooking-villa-resort' ),
	) );
}
add_action( 'after_setup_theme', 'sbvr_setup' );

function sbvr_assets() {
	wp_enqueue_style( 'sbvr-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'sbvr-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), SBVR_VERSION );
	wp_enqueue_script( 'sbvr-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), SBVR_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'sbvr_assets' );

function sbvr_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'sbvr_resort', array(
		'title'    => __( 'Resort e Booking', 'syncbooking-villa-resort' ),
		'priority' => 30,
	) );

	$settings = array(
		'sbvr_booking_url' => array(
			'label'   => __( 'URL booking', 'syncbooking-villa-resort' ),
			'default' => '#booking',
			'type'    => 'url',
		),
		'sbvr_phone' => array(
			'label'   => __( 'Telefono', 'syncbooking-villa-resort' ),
			'default' => '+39 000 000 0000',
			'type'    => 'text',
		),
		'sbvr_email' => array(
			'label'   => __( 'Email', 'syncbooking-villa-resort' ),
			'default' => 'info@example.com',
			'type'    => 'email',
		),
		'sbvr_address' => array(
			'label'   => __( 'Indirizzo', 'syncbooking-villa-resort' ),
			'default' => 'Conversano, Puglia',
			'type'    => 'text',
		),
		'sbvr_hero_image' => array(
			'label'   => __( 'Immagine hero', 'syncbooking-villa-resort' ),
			'default' => 'https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=2200&q=85',
			'type'    => 'url',
		),
	);

	foreach ( $settings as $setting_id => $setting ) {
		$wp_customize->add_setting( $setting_id, array(
			'default'           => $setting['default'],
			'sanitize_callback' => 'url' === $setting['type'] ? 'esc_url_raw' : 'sanitize_text_field',
		) );

		$wp_customize->add_control( $setting_id, array(
			'label'   => $setting['label'],
			'section' => 'sbvr_resort',
			'type'    => $setting['type'],
		) );
	}
}
add_action( 'customize_register', 'sbvr_customize_register' );

function sbvr_get_theme_option( $key, $fallback = '' ) {
	return get_theme_mod( $key, $fallback );
}

function sbvr_booking_form_shortcode() {
	ob_start();
	get_template_part( 'template-parts/booking-form' );
	return ob_get_clean();
}
add_shortcode( 'syncbooking_form', 'sbvr_booking_form_shortcode' );

function sbvr_default_menu() {
	$items = array(
		'#welcome'     => __( 'Benvenuto', 'syncbooking-villa-resort' ),
		'#houses'      => __( 'Case', 'syncbooking-villa-resort' ),
		'#services'    => __( 'Servizi', 'syncbooking-villa-resort' ),
		'#wellness'    => __( 'SPA', 'syncbooking-villa-resort' ),
		'#experiences' => __( 'Esperienze', 'syncbooking-villa-resort' ),
		'#contacts'    => __( 'Contatti', 'syncbooking-villa-resort' ),
	);

	echo '<ul class="primary-nav__list">';
	foreach ( $items as $href => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_url( $href ), esc_html( $label ) );
	}
	echo '</ul>';
}
