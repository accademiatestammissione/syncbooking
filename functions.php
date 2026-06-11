<?php
/**
 * WordPress bridge for SyncBooking multi-subtheme package.
 *
 * @package SyncBookingTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SBT_VERSION', '2.1.3' );
define( 'SBT_OPTION', 'syncbooking_theme_options' );
define( 'SBT_REQUIRED_PLUGIN_SLUG', 'syncbooking' );
define( 'SBT_REQUIRED_PLUGIN_FILE', 'syncbooking/sync-booking.php' );
define( 'SBT_MEDIA_OPTION', 'syncbooking_theme_media_imports' );
define( 'SBT_ASSETS_IMPORT_JOB_OPTION_PREFIX', 'syncbooking_theme_assets_import_job_' );
define( 'SBT_ASSETS_IMPORT_DOWNLOAD_CHUNK', 1048576 );
define( 'SBT_ASSETS_IMPORT_EXTRACT_BATCH', 12 );
define( 'SBT_ASSETS_IMPORT_REGISTER_BATCH', 8 );

function sbt_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_editor_style( 'style.css' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'syncbooking-hospitality' ),
		)
	);
	load_theme_textdomain( 'syncbooking-hospitality', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'sbt_setup' );

function sbt_register_block_assets() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
			'core/button',
			array(
				'name'  => 'syncbooking-outline',
				'label' => __( 'SyncBooking Outline', 'syncbooking-hospitality' ),
			)
		);
	}

	if ( function_exists( 'register_block_pattern' ) ) {
		register_block_pattern(
			'syncbooking-hospitality/intro',
			array(
				'title'      => __( 'Hospitality Intro', 'syncbooking-hospitality' ),
				'categories' => array( 'text' ),
				'content'    => '<!-- wp:paragraph --><p>' . esc_html__( 'Welcome to your hospitality experience.', 'syncbooking-hospitality' ) . '</p><!-- /wp:paragraph -->',
			)
		);
	}
}
add_action( 'init', 'sbt_register_block_assets' );

function sbt_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'syncbooking-hospitality' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Fallback widget area for standard WordPress pages and posts.', 'syncbooking-hospitality' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sbt_widgets_init' );

function sbt_display_version() {
	return 'V2.13';
}

function sbt_enqueue_comment_reply() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sbt_enqueue_comment_reply' );

function sbt_subthemes() {
	return array(
		'theme01' => array(
			'label' => 'Villa Rosa Resort',
			'dir'   => 'theme01',
			'pages' => array(
				'home'                => array( 'title' => 'Home', 'file' => 'index.php' ),
				'villa'               => array( 'title' => 'Villa', 'file' => 'villa.php', 'content_key' => 'villa' ),
				'houses'              => array( 'title' => 'Houses', 'file' => 'houses.php', 'content_key' => 'houses' ),
				'whole-villa'         => array( 'title' => 'The whole Villa', 'file' => 'entire.php', 'content_key' => 'entire' ),
				'price-and-condition' => array( 'title' => 'Price & Condition', 'file' => 'price-and-condition.php', 'content_key' => 'price' ),
				'spa-wellness'        => array( 'title' => 'SPA & Wellness', 'file' => 'spa-wellness.php', 'content_key' => 'spa' ),
				'experiences'         => array( 'title' => 'Experiences', 'file' => 'experiences.php', 'content_key' => 'experiences' ),
				'article'             => array( 'title' => 'Article', 'file' => 'article.php', 'content_key' => 'article' ),
				'surroundings'        => array( 'title' => 'Surroundings', 'file' => 'surroundings.php', 'content_key' => 'surroundings' ),
				'offers'              => array( 'title' => 'Offers', 'file' => 'offers.php', 'content_key' => 'offers' ),
				'contacts'            => array( 'title' => 'Contacts', 'file' => 'contacts.php', 'content_key' => 'contacts' ),
			),
		),
		'theme02' => array(
			'label' => 'Masseria Le Cerase',
			'dir'   => 'theme02',
			'pages' => array(
				'home'                => array( 'title' => 'Home', 'file' => 'index.php', 'content_key' => 'home' ),
				'masseria'            => array( 'title' => 'Masseria', 'file' => 'villa.php', 'content_key' => 'villa' ),
				'rooms'               => array( 'title' => 'Rooms', 'file' => 'house.php', 'content_key' => 'house' ),
				'whole-masseria'      => array( 'title' => 'Whole Masseria', 'file' => 'whole-masseria.php', 'content_key' => 'whole' ),
				'price-and-condition' => array( 'title' => 'Price & Condition', 'file' => 'price-and-condition.php', 'content_key' => 'price' ),
				'spa-wellness'        => array( 'title' => 'SPA & Wellness', 'file' => 'spa-wellness.php', 'content_key' => 'spa' ),
				'experiences'         => array( 'title' => 'Experiences', 'file' => 'experiences.php', 'content_key' => 'experiences' ),
				'weddings'            => array( 'title' => 'Weddings', 'file' => 'weddings.php', 'content_key' => 'weddings' ),
				'surroundings'        => array( 'title' => 'Surroundings', 'file' => 'surroundings.php', 'content_key' => 'surroundings' ),
				'offers'              => array( 'title' => 'Offers', 'file' => 'offers.php', 'content_key' => 'offers' ),
				'contacts'            => array( 'title' => 'Contacts', 'file' => 'contacts.php', 'content_key' => 'contacts' ),
			),
		),
	);
}

function sbt_default_options() {
	return array(
		'subtheme'           => 'theme01',
		'admin_language'     => 'it',
		'default_language'   => 'en',
		'edit_mode'          => 'visual',
		'languages'          => array( 'en', 'it' ),
		'overrides'          => array(),
		'custom_house_pages' => array(),
		'disabled_theme_pages' => array(),
	);
}

function sbt_get_options() {
	$options = get_option( SBT_OPTION, array() );
	return wp_parse_args( is_array( $options ) ? $options : array(), sbt_default_options() );
}

function sbt_available_languages() {
	return array(
		'en' => 'English',
		'it' => 'Italiano',
		'fr' => 'Francais',
		'de' => 'Deutsch',
		'es' => 'Espanol',
	);
}

function sbt_enabled_languages() {
	$raw_options = get_option( SBT_OPTION, array() );
	$options = sbt_get_options();
	$available = sbt_available_languages();
	$languages = isset( $options['languages'] ) && is_array( $options['languages'] ) ? array_map( 'sanitize_key', $options['languages'] ) : array( 'en', 'it' );
	if ( ! is_array( $raw_options ) || ! array_key_exists( 'default_language', $raw_options ) ) {
		$languages[] = 'it';
	}
	$languages[] = 'en';
	$languages[] = sbt_default_language();
	$languages = array_values( array_unique( array_filter( $languages, function( $language ) use ( $available ) {
		return isset( $available[ $language ] );
	} ) ) );

	return $languages ? $languages : array( 'en' );
}

function sbt_header_language_codes() {
	return array_map( 'strtoupper', sbt_enabled_languages() );
}

function sbt_default_language() {
	$options = sbt_get_options();
	$available = sbt_available_languages();
	$language = isset( $options['default_language'] ) ? sanitize_key( $options['default_language'] ) : 'en';

	return isset( $available[ $language ] ) ? $language : 'en';
}

function sbt_header_language_base_slug( $page_key = '', $content_key = '' ) {
	if ( function_exists( 'get_queried_object_id' ) && get_queried_object_id() ) {
		$post_slug = sbt_page_base_slug_for_post( get_queried_object_id() );
		$pages = sbt_page_templates();
		if ( isset( $pages[ $post_slug ] ) ) {
			return $post_slug;
		}
	}

	$page_key = $page_key ? sanitize_title( $page_key ) : 'home';
	$content_key = $content_key ? sanitize_key( $content_key ) : '';
	$pages = sbt_page_templates();
	if ( isset( $pages[ $page_key ] ) ) {
		return $page_key;
	}

	if ( $content_key ) {
		foreach ( $pages as $slug => $page ) {
			if ( isset( $page['content_key'] ) && $page['content_key'] === $content_key ) {
				return $slug;
			}
		}
	}

	$fallbacks = array(
		'spa'   => 'spa-wellness',
		'price' => 'price-and-condition',
		'whole' => 'whole-masseria',
	);

	return isset( $fallbacks[ $page_key ] ) && isset( $pages[ $fallbacks[ $page_key ] ] ) ? $fallbacks[ $page_key ] : 'home';
}

function sbt_header_language_items( $slug = '', $content_key = '' ) {
	$slug = sbt_header_language_base_slug( $slug, $content_key );
	$current_language = sbt_current_content_language();
	$items = array();

	foreach ( sbt_enabled_languages() as $language ) {
		$items[] = array(
			'language' => $language,
			'code'     => strtoupper( $language ),
			'url'      => sbt_theme_page_public_url( $slug, $language ),
			'active'   => $current_language === $language,
		);
	}

	return $items;
}

function sbt_current_header_language_code() {
	return strtoupper( function_exists( 'sbt_current_content_language' ) ? sbt_current_content_language() : 'en' );
}

function sbt_admin_language() {
	$options = sbt_get_options();
	return isset( $options['admin_language'] ) && in_array( $options['admin_language'], array( 'it', 'en' ), true ) ? $options['admin_language'] : 'it';
}

function sbt_edit_mode() {
	$options = sbt_get_options();
	return isset( $options['edit_mode'] ) && in_array( $options['edit_mode'], array( 'standard', 'visual' ), true ) ? $options['edit_mode'] : 'visual';
}

function sbt_t( $key ) {
	$labels = array(
		'it' => array(
			'choose_subtheme' => 'Choose subtheme',
			'theme_note'      => 'Each subtheme keeps separate layout, header, footer, menu, pages and editable content.',
			'save_theme'      => 'Save theme settings',
			'admin_language'  => 'Lingua gestionale',
			'default_language' => 'Lingua base sito',
			'site_languages'  => 'Page languages',
			'reset_template'  => 'Reset template',
			'reset_note'      => 'Restore the selected subtheme to its original content and clear saved edits for that subtheme.',
		),
		'en' => array(
			'choose_subtheme' => 'Choose subtheme',
			'theme_note'      => 'Each subtheme keeps separate layout, header, footer, menu, pages and editable content.',
			'save_theme'      => 'Save theme settings',
			'admin_language'  => 'Admin language',
			'default_language' => 'Default site language',
			'site_languages'  => 'Page languages',
			'reset_template'  => 'Reset template',
			'reset_note'      => 'Restore the selected subtheme to its original content and remove saved changes for that subtheme.',
		),
	);
	$language = sbt_admin_language();

	return $labels[ $language ][ $key ] ?? $labels['it'][ $key ] ?? $key;
}

function sbt_active_subtheme_key() {
	$options = sbt_get_options();
	$subthemes = sbt_subthemes();
	return isset( $subthemes[ $options['subtheme'] ] ) ? $options['subtheme'] : 'theme01';
}

function sbt_active_subtheme() {
	$subthemes = sbt_subthemes();
	return $subthemes[ sbt_active_subtheme_key() ];
}

function sbt_unit_label( $overrides = array() ) {
	$value = isset( $overrides['SITE.unit_label'] ) ? $overrides['SITE.unit_label'] : '';
	$value = '' !== $value ? $value : 'House';

	return wp_strip_all_tags( $value );
}

function sbt_unit_label_options() {
	return array(
		'Room'      => 'Rooms',
		'House'     => 'Houses',
		'Unit'      => 'Units',
		'Apartment' => 'Apartments',
	);
}

function sbt_entire_label_options() {
	return array(
		'The whole Villa'  => 'The whole Villa',
		'The whole Masseria' => 'The whole Masseria',
		'Entire Villa'    => 'Entire Villa',
		'Whole Masseria' => 'Whole Masseria',
		'Entire House'    => 'Entire House',
		'Entire Property' => 'Entire Property',
	);
}

function sbt_default_entire_label( $subtheme = '' ) {
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;
	return 'theme02' === $subtheme ? 'The whole Masseria' : 'The whole Villa';
}

function sbt_rental_mode( $subtheme = '' ) {
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;
	$mode = sbt_structural_override_value( $subtheme, 'SITE.rental_mode', 'units' );
	return 'entire' === $mode ? 'entire' : 'units';
}

function sbt_is_entire_rental_mode( $subtheme = '' ) {
	return 'entire' === sbt_rental_mode( $subtheme );
}

function sbt_entire_label( $subtheme = '' ) {
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;
	$value = sbt_structural_override_value( $subtheme, 'SITE.entire_label', sbt_default_entire_label( $subtheme ) );
	$options = sbt_entire_label_options();

	return isset( $options[ $value ] ) ? $value : sbt_default_entire_label( $subtheme );
}

function sbt_entire_page_slug( $subtheme = '' ) {
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;
	if ( 'theme02' === $subtheme ) {
		return 'whole-masseria';
	}

	return 'whole-villa';
}

function sbt_entire_page_file( $subtheme = '' ) {
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;
	return 'theme02' === $subtheme ? 'whole-masseria.php' : 'entire.php';
}

function sbt_entire_nav_url( $subtheme = '' ) {
	return sbt_entire_page_slug( $subtheme ) . '.php';
}

function sbt_unit_plural_label( $unit_label = '' ) {
	$options = sbt_unit_label_options();
	$unit_label = '' === $unit_label ? sbt_unit_label( array( 'SITE.unit_label' => sbt_structural_override_value( 'theme01', 'SITE.unit_label', 'House' ) ) ) : $unit_label;

	return isset( $options[ $unit_label ] ) ? $options[ $unit_label ] : $unit_label . 's';
}

function sbt_unit_listing_slug() {
	return sanitize_title( sbt_unit_plural_label() );
}

function sbt_unit_listing_slug_for_label( $unit_label ) {
	return sanitize_title( sbt_unit_plural_label( $unit_label ) );
}

function sbt_unit_detail_slug( $unit_label, $number ) {
	return sanitize_title( sbt_unit_default_title( $unit_label, $number ) );
}

function sbt_unit_default_title( $unit_label, $number ) {
	$unit_label = wp_strip_all_tags( (string) $unit_label );
	$unit_label = '' !== $unit_label ? $unit_label : 'House';
	return trim( $unit_label . ' ' . absint( $number ) );
}

function sbt_unit_content_key( $number ) {
	$number = absint( $number );
	$source_keys = array(
		1 => 'house2',
		2 => 'house3',
		3 => 'house4',
	);

	return isset( $source_keys[ $number ] ) ? $source_keys[ $number ] : 'unit_' . $number;
}

function sbt_unit_slug_from_title( $title, $number, &$used_slugs = array() ) {
	$slug = sanitize_title( $title );
	if ( '' === $slug ) {
		$slug = 'unit-' . absint( $number );
	}

	$protected = array( 'home', 'villa', 'masseria', 'houses', 'house', 'rooms', 'whole-villa', 'entire-villa', 'whole-masseria', 'price-and-condition', 'spa-wellness', 'experiences', 'weddings', 'article', 'surroundings', 'offers', 'contacts' );
	if ( in_array( $slug, $protected, true ) || in_array( $slug, $used_slugs, true ) ) {
		$slug .= '-' . absint( $number );
	}

	$used_slugs[] = $slug;
	return $slug;
}

function sbt_option_override_value( $subtheme, $language, $path, $default = '' ) {
	$options = sbt_get_options();
	$language = sanitize_key( $language );
	$overrides = isset( $options['overrides'][ $subtheme ] ) && is_array( $options['overrides'][ $subtheme ] ) ? $options['overrides'][ $subtheme ] : array();

	if ( isset( $overrides['_languages'][ $language ][ $path ] ) ) {
		return $overrides['_languages'][ $language ][ $path ];
	}

	if ( isset( $overrides['_languages']['en'][ $path ] ) ) {
		return $overrides['_languages']['en'][ $path ];
	}

	return isset( $overrides[ $path ] ) ? $overrides[ $path ] : $default;
}

function sbt_structural_override_value( $subtheme, $path, $default = '' ) {
	$options = sbt_get_options();
	$overrides = isset( $options['overrides'][ $subtheme ] ) && is_array( $options['overrides'][ $subtheme ] ) ? $options['overrides'][ $subtheme ] : array();

	if ( isset( $overrides['_languages']['en'][ $path ] ) && '' !== $overrides['_languages']['en'][ $path ] ) {
		return $overrides['_languages']['en'][ $path ];
	}

	foreach ( sbt_enabled_languages() as $language ) {
		if ( isset( $overrides['_languages'][ $language ][ $path ] ) && '' !== $overrides['_languages'][ $language ][ $path ] ) {
			return $overrides['_languages'][ $language ][ $path ];
		}
	}

	return isset( $overrides[ $path ] ) ? $overrides[ $path ] : $default;
}

function sbt_desired_unit_count( $subtheme = 'theme01' ) {
	$count = absint( sbt_structural_override_value( $subtheme, 'SITE.unit_count', 3 ) );
	return max( 1, min( 20, $count ) );
}

function sbt_subtheme_path( $path = '' ) {
	$subtheme = sbt_active_subtheme();
	return get_template_directory() . '/subthemes/' . $subtheme['dir'] . ( '' === $path ? '' : '/' . ltrim( $path, '/' ) );
}

function sbt_asset_url( $path ) {
	$subtheme_key = sbt_active_subtheme_key();
	$path = ltrim( (string) $path, '/' );
	$uploads = wp_get_upload_dir();
	if ( empty( $uploads['error'] ) ) {
		$local = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $subtheme_key . '/' . $path;
		if ( file_exists( $local ) ) {
			return trailingslashit( $uploads['baseurl'] ) . 'syncbooking-theme/' . $subtheme_key . '/' . str_replace( '%2F', '/', rawurlencode( $path ) );
		}
	}

	return trailingslashit( sbt_remote_assets_base_url( $subtheme_key ) ) . str_replace( '%2F', '/', rawurlencode( $path ) );
}

function sbt_remote_assets_zip_url( $subtheme_key = '' ) {
	$key = $subtheme_key ? sanitize_key( $subtheme_key ) : sbt_active_subtheme_key();
	$urls = array(
		'theme01' => 'https://syncbooking.com/clone-theme/theme-01/assets.zip',
		'theme02' => 'https://syncbooking.com/clone-theme/theme-02/assets.zip',
	);

	return isset( $urls[ $key ] ) ? $urls[ $key ] : '';
}

function sbt_remote_assets_base_url( $subtheme_key = '' ) {
	$key = $subtheme_key ? sanitize_key( $subtheme_key ) : sbt_active_subtheme_key();
	$bases = array(
		'theme01' => 'https://syncbooking.com/clone-theme/theme-01/',
		'theme02' => 'https://syncbooking.com/clone-theme/theme-02/',
	);

	return isset( $bases[ $key ] ) ? $bases[ $key ] : '';
}

function sbt_media_base_url() {
	$uploads = wp_get_upload_dir();
	$key = sbt_active_subtheme_key();
	$target = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $key . '/';

	if ( is_dir( $target ) ) {
		return trailingslashit( $uploads['baseurl'] ) . 'syncbooking-theme/' . $key . '/';
	}

	return sbt_remote_assets_base_url( $key );
}

function sbt_demo_media_url( $relative, $subtheme_key = '' ) {
	$key = $subtheme_key ? sanitize_key( $subtheme_key ) : sbt_active_subtheme_key();
	$relative = rawurldecode( ltrim( (string) $relative, '/' ) );
	$uploads = wp_get_upload_dir();
	if ( empty( $uploads['error'] ) ) {
		$local = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $key . '/' . $relative;
		if ( file_exists( $local ) ) {
			return trailingslashit( $uploads['baseurl'] ) . 'syncbooking-theme/' . $key . '/' . str_replace( '%2F', '/', rawurlencode( $relative ) );
		}
	}

	return trailingslashit( sbt_remote_assets_base_url( $key ) ) . str_replace( '%2F', '/', rawurlencode( $relative ) );
}

function sbt_theme_style_value( $key, $fallback = '' ) {
	$overrides = sbt_active_overrides();
	return isset( $overrides[ $key ] ) && '' !== $overrides[ $key ] ? $overrides[ $key ] : $fallback;
}

function sbt_theme_design_css() {
	$fonts = array(
		'classic' => array( "'Cormorant Garamond', Georgia, serif", "'Jost', system-ui, sans-serif" ),
		'elegant' => array( 'Georgia, serif', "'Jost', system-ui, sans-serif" ),
		'modern' => array( "'Jost', system-ui, sans-serif", "'Jost', system-ui, sans-serif" ),
		'editorial' => array( "'Cormorant Garamond', Georgia, serif", 'system-ui, sans-serif' ),
	);
	$font_key = sbt_theme_style_value( 'SITE.font_pairing', 'classic' );
	$font_pair = $fonts[ $font_key ] ?? $fonts['classic'];
	$color_map = array(
		'bg' => array( 'SITE.color_bg', '#f6f2ea' ),
		'surface' => array( 'SITE.color_surface', '#fbf8f2' ),
		'ink' => array( 'SITE.color_ink', '#2b2723' ),
		'muted' => array( 'SITE.color_muted', '#7d7468' ),
		'line' => array( 'SITE.color_line', '#e6dfd2' ),
		'green' => array( 'SITE.color_primary', '#8a463f' ),
		'green-deep' => array( 'SITE.color_primary_deep', '#6f3631' ),
		'green-soft' => array( 'SITE.color_primary_soft', '#a8645a' ),
		'rose' => array( 'SITE.color_accent', '#b47e6e' ),
		'gold' => array( 'SITE.color_gold', '#a98c5b' ),
		'header-red' => array( 'SITE.color_header', '#8a463f' ),
		'header-red-deep' => array( 'SITE.color_header_deep', '#73362f' ),
	);
	$lines = array(
		'--serif:' . $font_pair[0],
		'--sans:' . $font_pair[1],
	);
	foreach ( $color_map as $css_var => $settings ) {
		$value = sbt_theme_style_value( $settings[0], $settings[1] );
		$value = sanitize_hex_color( $value ) ?: $settings[1];
		$lines[] = '--' . $css_var . ':' . $value;
	}
	echo '<style id="sbt-theme-design-vars">:root{' . implode( ';', $lines ) . ';}</style>' . "\n";
}

function sbt_enqueue_theme_fonts() {
	wp_enqueue_style(
		'syncbooking-hospitality-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Jost:wght@300;400;500&display=swap',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'sbt_enqueue_theme_fonts' );

function sbt_page_templates() {
	$subtheme_key = sbt_active_subtheme_key();
	$subtheme = sbt_active_subtheme();
	$pages = $subtheme['pages'];
	if ( 'theme01' === $subtheme_key ) {
		$entire_slug = sbt_entire_page_slug( $subtheme_key );
		$pages[ $entire_slug ] = array(
			'title'       => sbt_entire_label( $subtheme_key ),
			'file'        => sbt_entire_page_file( $subtheme_key ),
			'content_key' => 'entire',
		);
	}

	if ( sbt_is_entire_rental_mode( $subtheme_key ) ) {
		unset( $pages['houses'], $pages['house'], $pages['rooms'] );
		$entire_slug = sbt_entire_page_slug( $subtheme_key );
		if ( ! isset( $pages[ $entire_slug ] ) ) {
			$pages[ $entire_slug ] = array(
				'title'       => sbt_entire_label( $subtheme_key ),
				'file'        => sbt_entire_page_file( $subtheme_key ),
				'content_key' => 'theme02' === $subtheme_key ? 'whole' : 'entire',
			);
		} else {
			$pages[ $entire_slug ]['title'] = sbt_entire_label( $subtheme_key );
		}

		return $pages;
	}

	if ( isset( $pages['houses'] ) ) {
		$pages['houses']['title'] = sbt_unit_plural_label();
	}
	if ( isset( $pages['house'] ) ) {
		$pages['house']['title'] = sbt_unit_plural_label();
	}
	if ( isset( $pages['rooms'] ) ) {
		$pages['rooms']['title'] = sbt_unit_plural_label();
	}
	foreach ( sbt_custom_house_pages( $subtheme_key ) as $house_page ) {
		$pages[ $house_page['slug'] ] = array(
			'title'         => $house_page['title'],
			'file'          => $house_page['slug'] . '.php',
			'template_file' => 'house-custom.php',
			'content_key'   => $house_page['content_key'],
			'custom_house'  => true,
		);
		if ( 'theme02' === $subtheme_key ) {
			$pages[ $house_page['slug'] ]['template_file'] = 'room-custom.php';
		}
	}

	return $pages;
}

function sbt_disabled_theme_pages( $subtheme = '' ) {
	$options = sbt_get_options();
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : sanitize_key( $subtheme );
	$disabled = isset( $options['disabled_theme_pages'][ $subtheme ] ) && is_array( $options['disabled_theme_pages'][ $subtheme ] ) ? $options['disabled_theme_pages'][ $subtheme ] : array();

	return array_values( array_unique( array_filter( array_map( 'sanitize_title', $disabled ) ) ) );
}

function sbt_is_theme_page_disabled( $slug, $subtheme = '' ) {
	return in_array( sanitize_title( $slug ), sbt_disabled_theme_pages( $subtheme ), true );
}

function sbt_custom_house_pages( $subtheme = '' ) {
	$options = sbt_get_options();
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : $subtheme;

	if ( empty( $options['custom_house_pages'][ $subtheme ] ) || ! is_array( $options['custom_house_pages'][ $subtheme ] ) ) {
		return array();
	}

	return array_values( array_filter( $options['custom_house_pages'][ $subtheme ], 'is_array' ) );
}

function sbt_is_theme_page_post( $post_id ) {
	if ( ! $post_id || 'page' !== get_post_type( $post_id ) ) {
		return false;
	}

	$slug = sbt_page_base_slug_for_post( $post_id );
	$pages = sbt_page_templates();
	return isset( $pages[ $slug ] );
}

function sbt_page_base_slug_for_post( $post_id ) {
	$base_slug = get_post_meta( $post_id, '_sbt_base_slug', true );
	return $base_slug ? sanitize_title( $base_slug ) : get_post_field( 'post_name', $post_id );
}

function sbt_page_language_for_post( $post_id ) {
	$language = get_post_meta( $post_id, '_sbt_language', true );
	$language = $language ? sanitize_key( $language ) : sbt_default_language();
	return in_array( $language, sbt_enabled_languages(), true ) ? $language : sbt_default_language();
}

function sbt_current_content_language() {
	if ( is_admin() ) {
		if ( isset( $_GET['edit_lang'] ) ) {
			$language = sanitize_key( wp_unslash( $_GET['edit_lang'] ) );
			return in_array( $language, sbt_enabled_languages(), true ) ? $language : sbt_default_language();
		}

		if ( isset( $_POST['sbt_edit_language'] ) ) {
			$language = sanitize_key( wp_unslash( $_POST['sbt_edit_language'] ) );
			return in_array( $language, sbt_enabled_languages(), true ) ? $language : sbt_default_language();
		}
	}

	if ( function_exists( 'get_queried_object_id' ) && get_queried_object_id() ) {
		return sbt_page_language_for_post( get_queried_object_id() );
	}

	return sbt_default_language();
}

function sbt_page_map() {
	$map = array();
	foreach ( sbt_page_templates() as $slug => $page ) {
		$map[ $page['file'] ] = $slug;
		$map[ $slug . '.php' ] = $slug;
	}
	return $map;
}

function sbt_page_slug_for_url_value( $url ) {
	$file = strtok( (string) $url, '#' );
	$map = sbt_page_map();
	return isset( $map[ $file ] ) ? $map[ $file ] : '';
}

function sbt_syncbooking_booking_page_id() {
	$page_id = absint( get_option( 'syncbooking_booking_page' ) );
	if ( $page_id && 'publish' === get_post_status( $page_id ) ) {
		return $page_id;
	}

	$pages = get_posts( array(
		'post_type'      => 'page',
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'fields'         => 'ids',
		'meta_key'       => '_wp_page_template',
		'meta_value'     => 'syncbooking-template.php',
	) );
	if ( $pages ) {
		return (int) $pages[0];
	}

	foreach ( array( 'search-and-book', 'booking-direct', 'booking-website', 'search', 'booking-sync', 'booking-search' ) as $slug ) {
		$page = get_page_by_path( $slug, OBJECT, 'page' );
		if ( $page && 'publish' === get_post_status( $page ) ) {
			return (int) $page->ID;
		}
	}

	return 0;
}

function sbt_syncbooking_booking_url() {
	$page_id = sbt_syncbooking_booking_page_id();
	return $page_id ? get_permalink( $page_id ) : home_url( '/search-and-book/' );
}

function sbt_form_runtime_config() {
	return array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'action'  => 'sbt_submit_form',
		'nonce'   => wp_create_nonce( 'sbt_submit_form' ),
		'i18n'    => array(
			'sending' => __( 'Sending...', 'syncbooking-hospitality' ),
			'success' => __( 'Thank you, your request has been sent. We will contact you shortly.', 'syncbooking-hospitality' ),
			'error'   => __( 'We could not send the request. Please try again or contact us directly.', 'syncbooking-hospitality' ),
		),
	);
}

function sbt_print_form_runtime_config() {
	if ( is_admin() ) {
		return;
	}
	?>
	<script>
	window.SBT_FORM = <?php echo wp_json_encode( sbt_form_runtime_config() ); ?>;
	</script>
	<?php
}
add_action( 'wp_footer', 'sbt_print_form_runtime_config', 5 );

function sbt_form_recipient_email() {
	$data = function_exists( 'sbt_load_active_data' ) ? sbt_load_active_data() : array();
	$site = isset( $data['SITE'] ) && is_array( $data['SITE'] ) ? $data['SITE'] : array();
	$email = isset( $site['email'] ) ? sanitize_email( wp_strip_all_tags( $site['email'] ) ) : '';

	return is_email( $email ) ? $email : get_option( 'admin_email' );
}

function sbt_handle_form_submission() {
	if ( ! check_ajax_referer( 'sbt_submit_form', 'nonce', false ) ) {
		wp_send_json_error( array( 'message' => __( 'Security check failed.', 'syncbooking-hospitality' ) ), 403 );
	}

	$honeypot = isset( $_POST['website'] ) ? trim( (string) wp_unslash( $_POST['website'] ) ) : '';
	if ( '' !== $honeypot ) {
		wp_send_json_success( array( 'message' => __( 'Thank you, your request has been sent. We will contact you shortly.', 'syncbooking-hospitality' ) ) );
	}

	$form_type = isset( $_POST['form_type'] ) ? sanitize_key( wp_unslash( $_POST['form_type'] ) ) : 'contact';
	$form_type = in_array( $form_type, array( 'contact', 'quote' ), true ) ? $form_type : 'contact';
	$name = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
	if ( '' === $message && isset( $_POST['notes'] ) ) {
		$message = sanitize_textarea_field( wp_unslash( $_POST['notes'] ) );
	}

	if ( '' === $name || ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid name and email address.', 'syncbooking-hospitality' ) ), 400 );
	}

	$payload = array(
		'form_type'  => $form_type,
		'name'       => $name,
		'email'      => $email,
		'phone'      => $phone,
		'message'    => $message,
		'language'   => isset( $_POST['language'] ) ? sanitize_key( wp_unslash( $_POST['language'] ) ) : sbt_current_content_language(),
		'source_url' => isset( $_POST['source_url'] ) ? esc_url_raw( wp_unslash( $_POST['source_url'] ) ) : wp_get_referer(),
	);
	$recipient = sbt_form_recipient_email();
	$subject = sprintf(
		/* translators: 1: form type, 2: sender name */
		__( 'New %1$s from %2$s', 'syncbooking-hospitality' ),
		'quote' === $form_type ? __( 'wedding quote request', 'syncbooking-hospitality' ) : __( 'contact request', 'syncbooking-hospitality' ),
		$name
	);
	$body = implode(
		"\n",
		array(
			'Name: ' . $name,
			'Email: ' . $email,
			'Phone: ' . $phone,
			'Form: ' . $form_type,
			'Language: ' . strtoupper( $payload['language'] ),
			'Source: ' . $payload['source_url'],
			'',
			'Message:',
			$message,
		)
	);
	$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
	$mail_sent = wp_mail( $recipient, $subject, $body, $headers );

	if ( ! $mail_sent ) {
		wp_send_json_error(
			array(
				'message' => __( 'The email could not be sent. Please check WordPress mail settings or install a SMTP plugin.', 'syncbooking-hospitality' ),
			),
			500
		);
	}

	wp_send_json_success(
		array(
			'message' => __( 'Thank you, your request has been sent. We will contact you shortly.', 'syncbooking-hospitality' ),
		)
	);
}
add_action( 'wp_ajax_sbt_submit_form', 'sbt_handle_form_submission' );
add_action( 'wp_ajax_nopriv_sbt_submit_form', 'sbt_handle_form_submission' );

function sbt_is_syncbooking_booking_url( $url ) {
	$url = untrailingslashit( set_url_scheme( (string) $url, 'https' ) );
	$booking_url = untrailingslashit( set_url_scheme( sbt_syncbooking_booking_url(), 'https' ) );
	return '' !== $url && $url === $booking_url;
}

function sbt_url( $url ) {
	$map = sbt_page_map();
	$file = strtok( (string) $url, '#' );
	$hash = false === strpos( (string) $url, '#' ) ? '' : '#' . substr( (string) $url, strpos( (string) $url, '#' ) + 1 );

	if ( 'syncbooking:booking' === (string) $file ) {
		return sbt_syncbooking_booking_url() . $hash;
	}

	if ( 0 === strpos( (string) $url, 'post:' ) ) {
		$post_slug = sanitize_title( substr( (string) $file, 5 ) );
		$post_id = sbt_seed_post_id( $post_slug, sbt_current_content_language() );
		return $post_id ? get_permalink( $post_id ) . $hash : home_url( '/' . $post_slug . '/' ) . $hash;
	}

	if ( isset( $map[ $file ] ) ) {
		return sbt_theme_page_public_url( $map[ $file ], sbt_current_content_language() ) . $hash;
	}

	return $url;
}

function sbt_seed_post_id( $seed_slug, $language = '' ) {
	$seed_slug = sanitize_title( $seed_slug );
	$language = '' === $language ? '' : sanitize_key( $language );
	if ( '' === $seed_slug ) {
		return 0;
	}

	if ( $language ) {
		$existing = get_posts( array(
			'post_type'      => 'post',
			'post_status'    => 'any',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_query'     => array(
				array(
					'key'   => '_sbt_seed_base_slug',
					'value' => $seed_slug,
				),
				array(
					'key'   => '_sbt_language',
					'value' => $language,
				),
			),
		) );
		if ( $existing ) {
			return (int) $existing[0];
		}
	}

	$existing = get_posts( array(
		'post_type'      => 'post',
		'post_status'    => 'any',
		'posts_per_page' => 1,
		'fields'         => 'ids',
		'meta_key'       => '_sbt_seed_slug',
		'meta_value'     => $seed_slug,
	) );
	if ( $existing ) {
		return (int) $existing[0];
	}

	$post = get_page_by_path( $seed_slug, OBJECT, 'post' );
	return $post ? (int) $post->ID : 0;
}

function sbt_editable_url_value( $url ) {
	$url = trim( (string) $url );
	if ( '' === $url ) {
		return '';
	}

	if ( 'syncbooking:booking' === strtok( $url, '#' ) ) {
		return $url;
	}

	if ( preg_match( '#^https?://#i', $url ) ) {
		if ( sbt_is_syncbooking_booking_url( $url ) || preg_match( '#/booking/?$#i', wp_parse_url( $url, PHP_URL_PATH ) ?: '' ) ) {
			return 'syncbooking:booking';
		}

		return set_url_scheme( $url, 'https' );
	}

	$resolved = sbt_url( $url );
	if ( preg_match( '#^https?://#i', $resolved ) ) {
		return set_url_scheme( $resolved, 'https' );
	}

	if ( 0 === strpos( $url, '//' ) ) {
		return set_url_scheme( $url, 'https' );
	}

	if ( 0 === strpos( $url, '/' ) ) {
		return set_url_scheme( home_url( $url ), 'https' );
	}

	if ( 0 === strpos( $url, '#' ) ) {
		return set_url_scheme( home_url( '/' . $url ), 'https' );
	}

	return set_url_scheme( home_url( '/' . ltrim( $url, '/' ) ), 'https' );
}

function sbt_sanitize_editable_url( $url ) {
	$url = sbt_editable_url_value( $url );
	return 0 === strpos( (string) $url, 'syncbooking:' ) ? sanitize_text_field( $url ) : esc_url_raw( $url );
}

function sbt_sanitize_editable_override( $path, $value ) {
	$value = wp_unslash( $value );
	$kind = sbt_field_kind( $path, $value );

	if ( 'url' === $kind ) {
		return sbt_sanitize_editable_url( $value );
	}

	if ( 'image' === $kind ) {
		return esc_url_raw( $value );
	}

	if ( 'gallery' === $kind ) {
		$urls = preg_split( '/\r\n|\r|\n/', (string) $value );
		$urls = array_filter( array_map( 'esc_url_raw', array_map( 'trim', $urls ) ) );
		return implode( "\n", $urls );
	}

	return wp_kses_post( $value );
}

function sbt_link_target_options() {
	$options = array(
		'syncbooking:booking' => 'SyncBooking booking page',
	);
	$posts = get_posts(
		array(
			'post_type'      => array( 'page', 'post' ),
			'post_status'    => 'publish',
			'posts_per_page' => 200,
			'orderby'        => array(
				'post_type' => 'ASC',
				'title'     => 'ASC',
			),
			'order'          => 'ASC',
		)
	);

	foreach ( $posts as $post ) {
		$type_label = 'page' === $post->post_type ? 'Page' : 'Post';
		$url = set_url_scheme( get_permalink( $post ), 'https' );
		$options[ $url ] = $type_label . ' - ' . get_the_title( $post );
	}

	return $options;
}

function sbt_render_link_target_control( $name, $current ) {
	$current = sbt_editable_url_value( $current );
	$options = sbt_link_target_options();
	$has_current = isset( $options[ $current ] );
	?>
	<span class="sbt-link-control">
		<input type="hidden" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>" class="sbt-link-value">
		<select class="sbt-link-select">
			<option value="">Direct / external link</option>
			<?php foreach ( $options as $url => $label ) : ?>
				<option value="<?php echo esc_attr( $url ); ?>" <?php selected( $current, $url ); ?>><?php echo esc_html( $label ); ?> - <?php echo esc_html( $url ); ?></option>
			<?php endforeach; ?>
		</select>
		<input type="url" value="<?php echo esc_attr( $has_current ? '' : $current ); ?>" class="sbt-link-direct" placeholder="https://example.com/page/">
		<span class="sbt-link-hint">Choose a page/post, the SyncBooking booking page, or enter a direct https:// URL.</span>
	</span>
	<?php
}

function sbt_register_upload_assets( $directory, $subtheme_key ) {
	if ( ! function_exists( 'wp_insert_attachment' ) || ! is_dir( $directory ) ) {
		return;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';

	$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $directory, RecursiveDirectoryIterator::SKIP_DOTS ) );
	foreach ( $iterator as $file ) {
		if ( ! $file->isFile() ) {
			continue;
		}

		sbt_register_upload_asset_file( $file->getPathname(), $directory, $subtheme_key );
	}
}

function sbt_register_upload_asset_file( $path, $directory, $subtheme_key ) {
	if ( ! function_exists( 'wp_insert_attachment' ) || ! is_file( $path ) ) {
		return 'ignored';
	}

	$type = wp_check_filetype( $path );
	if ( empty( $type['type'] ) || 0 !== strpos( $type['type'], 'image/' ) ) {
		return 'ignored';
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';

	$relative = trim( $subtheme_key . '/' . str_replace( trailingslashit( $directory ), '', $path ), '/' );
	$existing = get_posts( array(
		'post_type'      => 'attachment',
		'post_status'    => 'inherit',
		'posts_per_page' => 1,
		'meta_key'       => '_sbt_bundled_media_path',
		'meta_value'     => wp_normalize_path( $relative ),
		'fields'         => 'ids',
	) );

	if ( $existing ) {
		return 'skipped';
	}

	$attachment_id = wp_insert_attachment( array(
		'post_mime_type' => $type['type'],
		'post_title'     => sanitize_file_name( pathinfo( $path, PATHINFO_FILENAME ) ),
		'post_content'   => '',
		'post_status'    => 'inherit',
	), $path );

	if ( is_wp_error( $attachment_id ) ) {
		return 'failed';
	}

	update_post_meta( $attachment_id, '_sbt_bundled_media_path', wp_normalize_path( $relative ) );
	wp_update_attachment_metadata( $attachment_id, wp_generate_attachment_metadata( $attachment_id, $path ) );

	return 'registered';
}

function sbt_count_files_in_directory( $directory ) {
	if ( ! is_dir( $directory ) ) {
		return 0;
	}

	$count = 0;
	$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $directory, RecursiveDirectoryIterator::SKIP_DOTS ) );
	foreach ( $iterator as $file ) {
		if ( $file->isFile() ) {
			$count++;
		}
	}

	return $count;
}

function sbt_download_remote_assets_zip( $subtheme_key = '' ) {
	return new WP_Error( 'sbt_progressive_import_required', __( 'Use the progressive assets importer from General Settings. Assets are downloaded and extracted in small steps to avoid server timeouts.', 'syncbooking-hospitality' ) );
}

function sbt_assets_import_job_option( $subtheme_key ) {
	return SBT_ASSETS_IMPORT_JOB_OPTION_PREFIX . sanitize_key( $subtheme_key );
}

function sbt_assets_import_uploads_path_allowed( $path ) {
	$uploads = wp_get_upload_dir();
	if ( ! empty( $uploads['error'] ) ) {
		return false;
	}

	$base = wp_normalize_path( trailingslashit( $uploads['basedir'] ) );
	$path = wp_normalize_path( $path );

	return 0 === strpos( $path, $base );
}

function sbt_assets_import_error_response( $message ) {
	wp_send_json_error( array(
		'message' => $message,
	) );
}

function sbt_assets_import_progress( $job ) {
	$stage = isset( $job['stage'] ) ? $job['stage'] : 'download';
	if ( 'download' === $stage ) {
		$total = ! empty( $job['total_bytes'] ) ? absint( $job['total_bytes'] ) : 0;
		$done = ! empty( $job['bytes_downloaded'] ) ? absint( $job['bytes_downloaded'] ) : 0;
		$download_percent = $total > 0 ? min( 1, $done / $total ) : 0;
		return min( 50, (int) floor( $download_percent * 50 ) );
	}

	if ( 'extract' === $stage ) {
		$total = ! empty( $job['total_entries'] ) ? absint( $job['total_entries'] ) : 1;
		$done = ! empty( $job['extract_index'] ) ? absint( $job['extract_index'] ) : 0;
		return 50 + min( 35, (int) floor( min( 1, $done / max( 1, $total ) ) * 35 ) );
	}

	if ( 'register' === $stage ) {
		$total = ! empty( $job['register_total'] ) ? absint( $job['register_total'] ) : 1;
		$done = ! empty( $job['register_index'] ) ? absint( $job['register_index'] ) : 0;
		return 85 + min( 14, (int) floor( min( 1, $done / max( 1, $total ) ) * 14 ) );
	}

	return 'complete' === $stage ? 100 : 0;
}

function sbt_assets_import_response_data( $job, $message, $done = false ) {
	return array(
		'done'             => (bool) $done,
		'job_id'           => $job['id'] ?? '',
		'stage'            => $job['stage'] ?? '',
		'message'          => $message,
		'progress'         => $done ? 100 : sbt_assets_import_progress( $job ),
		'bytes_downloaded' => absint( $job['bytes_downloaded'] ?? 0 ),
		'total_bytes'      => absint( $job['total_bytes'] ?? 0 ),
		'extract_index'    => absint( $job['extract_index'] ?? 0 ),
		'total_entries'    => absint( $job['total_entries'] ?? 0 ),
		'register_index'   => absint( $job['register_index'] ?? 0 ),
		'register_total'   => absint( $job['register_total'] ?? 0 ),
		'extracted'        => absint( $job['extracted'] ?? 0 ),
		'registered'       => absint( $job['registered'] ?? 0 ),
		'skipped'          => absint( $job['skipped'] ?? 0 ),
		'failed'           => count( $job['failed'] ?? array() ),
	);
}

function sbt_assets_import_collect_files( $directory ) {
	$files = array();
	if ( ! is_dir( $directory ) ) {
		return $files;
	}

	$base = trailingslashit( $directory );
	$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $directory, RecursiveDirectoryIterator::SKIP_DOTS ) );
	foreach ( $iterator as $file ) {
		if ( $file->isFile() ) {
			$relative = str_replace( $base, '', $file->getPathname() );
			$files[] = wp_normalize_path( $relative );
		}
	}

	sort( $files );

	return $files;
}

function sbt_assets_import_prepare_extract( &$job ) {
	$zip = new ZipArchive();
	if ( true !== $zip->open( $job['zip_path'] ) ) {
		return new WP_Error( 'sbt_zip_open_failed', __( 'The downloaded assets.zip could not be opened.', 'syncbooking-hospitality' ) );
	}

	$job['stage'] = 'extract';
	$job['extract_index'] = 0;
	$job['total_entries'] = absint( $zip->numFiles );
	$zip->close();

	return true;
}

function sbt_assets_import_extract_zip_entry( ZipArchive $zip, $index, $target_base ) {
	$name = (string) $zip->getNameIndex( $index );
	$name = str_replace( '\\', '/', $name );
	$name = ltrim( $name, '/' );

	if ( '' === $name || false !== strpos( $name, '../' ) || '..' === basename( $name ) || preg_match( '/^[A-Za-z]:/', $name ) ) {
		return 'failed';
	}

	if ( '/' === substr( $name, -1 ) ) {
		wp_mkdir_p( trailingslashit( $target_base ) . $name );
		return 'ignored';
	}

	$target = trailingslashit( $target_base ) . $name;
	if ( ! sbt_assets_import_uploads_path_allowed( $target ) ) {
		return 'failed';
	}

	wp_mkdir_p( dirname( $target ) );
	$source = $zip->getStream( $name );
	if ( ! $source ) {
		return 'failed';
	}

	$destination = @fopen( $target, 'wb' );
	if ( ! $destination ) {
		fclose( $source );
		return 'failed';
	}

	stream_copy_to_stream( $source, $destination );
	fclose( $source );
	fclose( $destination );

	return 'extracted';
}

function sbt_assets_import_download_step( &$job ) {
	$start = absint( $job['bytes_downloaded'] ?? 0 );
	$chunk = max( 262144, absint( apply_filters( 'sbt_assets_import_download_chunk', SBT_ASSETS_IMPORT_DOWNLOAD_CHUNK ) ) );
	$end = $start + $chunk - 1;
	$response = wp_remote_get( $job['url'], array(
		'timeout'     => 25,
		'redirection' => 3,
		'headers'     => array(
			'Range' => 'bytes=' . $start . '-' . $end,
		),
	) );

	if ( is_wp_error( $response ) ) {
		return $response;
	}

	$code = absint( wp_remote_retrieve_response_code( $response ) );
	if ( 206 !== $code ) {
		return new WP_Error( 'sbt_range_not_supported', __( 'The online assets.zip server must support HTTP byte ranges for the progressive importer.', 'syncbooking-hospitality' ) );
	}

	$body = wp_remote_retrieve_body( $response );
	if ( '' === $body ) {
		return new WP_Error( 'sbt_empty_range', __( 'The online assets.zip returned an empty chunk.', 'syncbooking-hospitality' ) );
	}

	if ( false === file_put_contents( $job['zip_path'], $body, FILE_APPEND | LOCK_EX ) ) {
		return new WP_Error( 'sbt_zip_write_failed', __( 'The assets.zip chunk could not be written to uploads.', 'syncbooking-hospitality' ) );
	}

	$content_range = wp_remote_retrieve_header( $response, 'content-range' );
	if ( $content_range && preg_match( '/bytes\s+(\d+)-(\d+)\/(\d+)/i', $content_range, $matches ) ) {
		$job['bytes_downloaded'] = absint( $matches[2] ) + 1;
		$job['total_bytes'] = absint( $matches[3] );
	} else {
		$job['bytes_downloaded'] = $start + strlen( $body );
	}

	if ( ! empty( $job['total_bytes'] ) && absint( $job['bytes_downloaded'] ) >= absint( $job['total_bytes'] ) ) {
		$prepared = sbt_assets_import_prepare_extract( $job );
		if ( is_wp_error( $prepared ) ) {
			return $prepared;
		}
	}

	return true;
}

function sbt_assets_import_extract_step( &$job ) {
	$zip = new ZipArchive();
	if ( true !== $zip->open( $job['zip_path'] ) ) {
		return new WP_Error( 'sbt_zip_open_failed', __( 'The downloaded assets.zip could not be opened.', 'syncbooking-hospitality' ) );
	}

	$batch = max( 1, absint( apply_filters( 'sbt_assets_import_extract_batch', SBT_ASSETS_IMPORT_EXTRACT_BATCH ) ) );
	$index = absint( $job['extract_index'] ?? 0 );
	$total = absint( $job['total_entries'] ?? $zip->numFiles );
	$limit = min( $total, $index + $batch );

	for ( ; $index < $limit; $index++ ) {
		$result = sbt_assets_import_extract_zip_entry( $zip, $index, $job['target_base'] );
		if ( 'extracted' === $result ) {
			$job['extracted'] = absint( $job['extracted'] ?? 0 ) + 1;
		} elseif ( 'failed' === $result ) {
			$job['failed'][] = $zip->getNameIndex( $index );
		}
	}

	$job['extract_index'] = $index;
	$zip->close();

	if ( $index >= $total ) {
		$files = sbt_assets_import_collect_files( $job['target_base'] );
		$job['stage'] = 'register';
		$job['register_files'] = $files;
		$job['register_total'] = count( $files );
		$job['register_index'] = 0;
	}

	return true;
}

function sbt_assets_import_register_step( &$job ) {
	$files = isset( $job['register_files'] ) && is_array( $job['register_files'] ) ? $job['register_files'] : array();
	$total = count( $files );
	$index = absint( $job['register_index'] ?? 0 );
	$batch = max( 1, absint( apply_filters( 'sbt_assets_import_register_batch', SBT_ASSETS_IMPORT_REGISTER_BATCH ) ) );
	$limit = min( $total, $index + $batch );

	for ( ; $index < $limit; $index++ ) {
		$path = trailingslashit( $job['target_base'] ) . $files[ $index ];
		$result = sbt_register_upload_asset_file( $path, $job['target_base'], $job['subtheme'] );
		if ( 'registered' === $result ) {
			$job['registered'] = absint( $job['registered'] ?? 0 ) + 1;
		} elseif ( 'skipped' === $result ) {
			$job['skipped'] = absint( $job['skipped'] ?? 0 ) + 1;
		} elseif ( 'failed' === $result ) {
			$job['failed'][] = $files[ $index ];
		}
	}

	$job['register_index'] = $index;

	if ( $index >= $total ) {
		$job['stage'] = 'complete';
	}

	return true;
}

function sbt_assets_import_finish( $job ) {
	if ( ! empty( $job['zip_path'] ) && sbt_assets_import_uploads_path_allowed( $job['zip_path'] ) && file_exists( $job['zip_path'] ) ) {
		@unlink( $job['zip_path'] );
	}

	$imports = get_option( SBT_MEDIA_OPTION, array() );
	$imports[ $job['subtheme'] ] = array(
		'downloaded'  => absint( $job['extracted'] ?? 0 ),
		'registered'  => absint( $job['registered'] ?? 0 ),
		'skipped'     => absint( $job['skipped'] ?? 0 ),
		'failed'      => count( $job['failed'] ?? array() ),
		'updated_at'  => current_time( 'mysql' ),
		'source'      => $job['url'],
		'method'      => 'progressive',
		'total_bytes' => absint( $job['total_bytes'] ?? 0 ),
	);
	update_option( SBT_MEDIA_OPTION, $imports );
	delete_option( sbt_assets_import_job_option( $job['subtheme'] ) );
}

function sbt_ajax_start_assets_import() {
	check_ajax_referer( 'sbt_assets_import', 'nonce' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		sbt_assets_import_error_response( __( 'You are not allowed to import assets.', 'syncbooking-hospitality' ) );
	}

	if ( ! class_exists( 'ZipArchive' ) ) {
		sbt_assets_import_error_response( __( 'The PHP ZipArchive extension is required to import assets.zip.', 'syncbooking-hospitality' ) );
	}

	$key = isset( $_POST['subtheme'] ) ? sanitize_key( wp_unslash( $_POST['subtheme'] ) ) : sbt_active_subtheme_key();
	$url = sbt_remote_assets_zip_url( $key );
	if ( ! $url ) {
		sbt_assets_import_error_response( __( 'No remote assets.zip is configured for this subtheme.', 'syncbooking-hospitality' ) );
	}

	$uploads = wp_get_upload_dir();
	if ( ! empty( $uploads['error'] ) ) {
		sbt_assets_import_error_response( $uploads['error'] );
	}

	$target_base = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $key . '/';
	$tmp_base = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/tmp/';
	wp_mkdir_p( $target_base );
	wp_mkdir_p( $tmp_base );

	$old_job = get_option( sbt_assets_import_job_option( $key ), array() );
	if ( ! empty( $old_job['zip_path'] ) && sbt_assets_import_uploads_path_allowed( $old_job['zip_path'] ) && file_exists( $old_job['zip_path'] ) ) {
		@unlink( $old_job['zip_path'] );
	}

	$job_id = wp_generate_password( 16, false, false );
	$zip_path = $tmp_base . $key . '-' . $job_id . '.zip';
	@unlink( $zip_path );

	$head = wp_remote_head( $url, array(
		'timeout'     => 15,
		'redirection' => 3,
	) );
	$total_bytes = is_wp_error( $head ) ? 0 : absint( wp_remote_retrieve_header( $head, 'content-length' ) );

	$job = array(
		'id'               => $job_id,
		'subtheme'         => $key,
		'url'              => $url,
		'stage'            => 'download',
		'zip_path'         => $zip_path,
		'target_base'      => $target_base,
		'bytes_downloaded' => 0,
		'total_bytes'      => $total_bytes,
		'extract_index'    => 0,
		'total_entries'    => 0,
		'register_index'   => 0,
		'register_total'   => 0,
		'extracted'        => 0,
		'registered'       => 0,
		'skipped'          => 0,
		'failed'           => array(),
		'started_at'       => current_time( 'mysql' ),
		'updated_at'       => current_time( 'mysql' ),
	);
	update_option( sbt_assets_import_job_option( $key ), $job, false );

	wp_send_json_success( sbt_assets_import_response_data( $job, __( 'Download assets.zip avviato a blocchi.', 'syncbooking-hospitality' ) ) );
}
add_action( 'wp_ajax_sbt_start_assets_import', 'sbt_ajax_start_assets_import' );

function sbt_ajax_step_assets_import() {
	check_ajax_referer( 'sbt_assets_import', 'nonce' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		sbt_assets_import_error_response( __( 'You are not allowed to import assets.', 'syncbooking-hospitality' ) );
	}

	$key = isset( $_POST['subtheme'] ) ? sanitize_key( wp_unslash( $_POST['subtheme'] ) ) : sbt_active_subtheme_key();
	$job = get_option( sbt_assets_import_job_option( $key ), array() );
	$job_id = isset( $_POST['job_id'] ) ? sanitize_text_field( wp_unslash( $_POST['job_id'] ) ) : '';
	if ( empty( $job ) || empty( $job['id'] ) || $job['id'] !== $job_id ) {
		sbt_assets_import_error_response( __( 'Import job not found. Please start again.', 'syncbooking-hospitality' ) );
	}

	if ( 'download' === $job['stage'] ) {
		$result = sbt_assets_import_download_step( $job );
		$message = __( 'Download assets.zip in corso...', 'syncbooking-hospitality' );
	} elseif ( 'extract' === $job['stage'] ) {
		$result = sbt_assets_import_extract_step( $job );
		$message = __( 'Estrazione assets in corso...', 'syncbooking-hospitality' );
	} elseif ( 'register' === $job['stage'] ) {
		$result = sbt_assets_import_register_step( $job );
		$message = __( 'Registrazione immagini nella Media Library...', 'syncbooking-hospitality' );
	} else {
		$result = true;
		$message = __( 'Import assets completato.', 'syncbooking-hospitality' );
	}

	if ( is_wp_error( $result ) ) {
		sbt_assets_import_error_response( $result->get_error_message() );
	}

	$job['updated_at'] = current_time( 'mysql' );
	if ( 'complete' === $job['stage'] ) {
		sbt_assets_import_finish( $job );
		wp_send_json_success( sbt_assets_import_response_data( $job, __( 'Import assets completato.', 'syncbooking-hospitality' ), true ) );
	}

	update_option( sbt_assets_import_job_option( $key ), $job, false );
	wp_send_json_success( sbt_assets_import_response_data( $job, $message ) );
}
add_action( 'wp_ajax_sbt_step_assets_import', 'sbt_ajax_step_assets_import' );

function sbt_media_import_status( $subtheme_key = '' ) {
	$key = $subtheme_key ? sanitize_key( $subtheme_key ) : sbt_active_subtheme_key();
	$imports = get_option( SBT_MEDIA_OPTION, array() );
	return isset( $imports[ $key ] ) && is_array( $imports[ $key ] ) ? $imports[ $key ] : array();
}

function sbt_download_demo_media( $subtheme_key = '' ) {
	$key = $subtheme_key ? sanitize_key( $subtheme_key ) : sbt_active_subtheme_key();
	return sbt_download_remote_assets_zip( $key );
}

function sbt_install_upload_assets() {
	return sbt_download_demo_media();
}

function sbt_legacy_language_page_slug( $base_slug, $language ) {
	$base_slug = sanitize_title( $base_slug );
	$language = sanitize_key( $language );
	if ( 'houses' === $base_slug ) {
		$base_slug = sbt_unit_listing_slug();
	}

	return 'en' === $language ? $base_slug : $language . '-' . $base_slug;
}

function sbt_language_page_post_name( $base_slug, $language ) {
	$base_slug = sanitize_title( $base_slug );
	$language = sanitize_key( $language );
	if ( 'houses' === $base_slug ) {
		$base_slug = sbt_unit_listing_slug();
	}

	if ( 'home' === $base_slug ) {
		return $language === sbt_default_language() ? 'home' : $language;
	}

	return $base_slug;
}

function sbt_language_parent_page_id( $language ) {
	$language = sanitize_key( $language );
	if ( $language === sbt_default_language() ) {
		return 0;
	}

	$pages = get_posts( array(
		'post_type'      => 'page',
		'post_status'    => 'any',
		'posts_per_page' => 1,
		'fields'         => 'ids',
		'meta_query'     => array(
			array(
				'key'   => '_sbt_base_slug',
				'value' => 'home',
			),
			array(
				'key'   => '_sbt_language',
				'value' => $language,
			),
		),
	) );

	return $pages ? (int) $pages[0] : 0;
}

function sbt_theme_slug_is_claimed_by_other_page( $page_slug, $base_slug, $language, $existing_id = 0 ) {
	$claimed = get_page_by_path( $page_slug, OBJECT, 'page' );
	if ( ! $claimed ) {
		return false;
	}

	if ( $existing_id && (int) $claimed->ID === (int) $existing_id ) {
		return false;
	}

	return sbt_page_base_slug_for_post( $claimed->ID ) !== sanitize_title( $base_slug ) || sbt_page_language_for_post( $claimed->ID ) !== sanitize_key( $language );
}

function sbt_note_language_slug_conflict( $language, $page_slug ) {
	$conflicts = get_option( 'sbt_language_slug_conflicts', array() );
	$conflicts = is_array( $conflicts ) ? $conflicts : array();
	$conflicts[ sanitize_key( $language ) ] = sanitize_title( $page_slug );
	update_option( 'sbt_language_slug_conflicts', $conflicts, false );
}

function sbt_clear_language_slug_conflict( $language ) {
	$conflicts = get_option( 'sbt_language_slug_conflicts', array() );
	if ( ! is_array( $conflicts ) ) {
		return;
	}

	unset( $conflicts[ sanitize_key( $language ) ] );
	if ( $conflicts ) {
		update_option( 'sbt_language_slug_conflicts', $conflicts, false );
	} else {
		delete_option( 'sbt_language_slug_conflicts' );
	}
}

function sbt_resolved_theme_page_slug( $base_slug, $language, $existing_id = 0 ) {
	$page_slug = sbt_language_page_slug( $base_slug, $language );
	if ( 'home' === sanitize_title( $base_slug ) && sanitize_key( $language ) !== sbt_default_language() ) {
		if ( sbt_theme_slug_is_claimed_by_other_page( $page_slug, $base_slug, $language, $existing_id ) ) {
			sbt_note_language_slug_conflict( $language, $page_slug );
			return sbt_legacy_language_page_slug( $base_slug, $language );
		}

		sbt_clear_language_slug_conflict( $language );
	}

	return $page_slug;
}

function sbt_language_slug_conflict_notice() {
	$conflicts = get_option( 'sbt_language_slug_conflicts', array() );
	if ( ! is_array( $conflicts ) || ! $conflicts || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	foreach ( $conflicts as $language => $slug ) {
		printf(
			'<div class="notice notice-warning"><p>%s</p></div>',
			esc_html( sprintf( 'SyncBooking Theme: lo slug /%1$s/ e gia occupato da una pagina non gestita dal tema. Libera quello slug per usare la Home %2$s su /%1$s/.', $slug, strtoupper( $language ) ) )
		);
	}
}
add_action( 'admin_notices', 'sbt_language_slug_conflict_notice' );

function sbt_create_theme_pages() {
	foreach ( sbt_enabled_languages() as $language ) {
		foreach ( sbt_page_templates() as $slug => $page ) {
			if ( sbt_is_theme_page_disabled( $slug ) ) {
				continue;
			}

			$existing = get_posts( array(
				'post_type'      => 'page',
				'post_status'    => 'any',
				'posts_per_page' => 1,
				'meta_key'       => '_sbt_base_slug',
				'meta_value'     => $slug,
				'fields'         => 'ids',
				'meta_query'     => array(
					array(
						'key'   => '_sbt_language',
						'value' => $language,
					),
				),
			) );
			$page_slug = sbt_resolved_theme_page_slug( $slug, $language, $existing ? (int) $existing[0] : 0 );
			$post_parent = ( $language !== sbt_default_language() && 'home' !== sanitize_title( $slug ) && false !== strpos( $page_slug, '/' ) ) ? sbt_language_parent_page_id( $language ) : 0;
			$post_name = false !== strpos( $page_slug, '/' ) ? basename( $page_slug ) : $page_slug;
			$page_title = 'en' === $language ? $page['title'] : $page['title'] . ' (' . strtoupper( $language ) . ')';

			if ( $existing ) {
				wp_update_post( array(
					'ID'         => $existing[0],
					'post_title' => $page_title,
					'post_name'  => $post_name,
					'post_parent'=> $post_parent,
					'post_status'=> 'publish',
				) );
				continue;
			}

			$page_id = wp_insert_post( array(
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_title'   => $page_title,
				'post_name'    => $post_name,
				'post_parent'  => $post_parent,
				'post_content' => '',
			) );

			if ( $page_id && ! is_wp_error( $page_id ) ) {
				update_post_meta( $page_id, '_sbt_base_slug', $slug );
				update_post_meta( $page_id, '_sbt_language', $language );
			}
		}
	}
}
add_action( 'after_switch_theme', 'sbt_create_theme_pages' );
add_action( 'after_switch_theme', 'sbt_sync_custom_house_pages' );
add_action( 'after_switch_theme', 'sbt_create_seed_posts' );

function sbt_maybe_sync_theme_pages() {
	if ( ! is_admin() || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	if ( get_option( 'sbt_theme_pages_synced_version' ) === SBT_VERSION ) {
		return;
	}

	sbt_create_theme_pages();
	update_option( 'sbt_theme_pages_synced_version', SBT_VERSION, false );
}
add_action( 'admin_init', 'sbt_maybe_sync_theme_pages' );

function sbt_trash_theme_page_posts( $slug ) {
	$slug = sanitize_title( $slug );
	foreach ( sbt_enabled_languages() as $language ) {
		$page = sbt_theme_page_post( $slug, $language );
		if ( $page && 'trash' !== get_post_status( $page->ID ) ) {
			wp_trash_post( $page->ID );
		}
	}
}

function sbt_disable_theme_page( $slug, $subtheme = '' ) {
	$slug = sanitize_title( $slug );
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : sanitize_key( $subtheme );
	if ( '' === $slug || 'home' === $slug ) {
		return false;
	}

	$pages = sbt_page_templates();
	if ( ! isset( $pages[ $slug ] ) ) {
		return false;
	}

	$options = sbt_get_options();
	if ( ! isset( $options['disabled_theme_pages'] ) || ! is_array( $options['disabled_theme_pages'] ) ) {
		$options['disabled_theme_pages'] = array();
	}
	if ( ! isset( $options['disabled_theme_pages'][ $subtheme ] ) || ! is_array( $options['disabled_theme_pages'][ $subtheme ] ) ) {
		$options['disabled_theme_pages'][ $subtheme ] = array();
	}

	$options['disabled_theme_pages'][ $subtheme ][] = $slug;
	$options['disabled_theme_pages'][ $subtheme ] = array_values( array_unique( array_map( 'sanitize_title', $options['disabled_theme_pages'][ $subtheme ] ) ) );
	update_option( SBT_OPTION, $options );

	sbt_trash_theme_page_posts( $slug );
	return true;
}

function sbt_restore_theme_page( $slug, $subtheme = '' ) {
	$slug = sanitize_title( $slug );
	$subtheme = '' === $subtheme ? sbt_active_subtheme_key() : sanitize_key( $subtheme );
	if ( '' === $slug ) {
		return false;
	}

	$options = sbt_get_options();
	if ( isset( $options['disabled_theme_pages'][ $subtheme ] ) && is_array( $options['disabled_theme_pages'][ $subtheme ] ) ) {
		$options['disabled_theme_pages'][ $subtheme ] = array_values( array_diff( array_map( 'sanitize_title', $options['disabled_theme_pages'][ $subtheme ] ), array( $slug ) ) );
	}
	update_option( SBT_OPTION, $options );

	sbt_create_theme_pages();
	return true;
}

function sbt_theme01_seed_articles() {
	$asset_base = trailingslashit( sbt_remote_assets_base_url( 'theme01' ) ) . 'assets/images/';
	$contact_url = home_url( '/contacts/' );

	return array(
		array(
			'slug'          => 'conversano',
			'title'         => 'Conversano, the noble heart of Puglia',
			'over'          => '2 min walk',
			'hero'          => $asset_base . 'conversano-town.jpg',
			'category'      => 'Surroundings',
			'category_slug' => 'surroundings',
			'group'         => 'theme01_surroundings',
			'excerpt'       => 'A graceful old town of stone lanes, noble palaces and quiet squares, just a short walk from Villa Rosa Resort.',
			'content'       => '<p>Conversano is the first discovery waiting beyond the gates of Villa Rosa Resort. Elegant, walkable and deeply authentic, the town keeps the rhythm of Puglia without the rush of the coast.</p><p>Its Norman-Swabian Castle dominates the historic centre, while churches, monasteries and aristocratic palaces reveal the layered history of a place that has always known how to welcome travellers.</p><h2>What to see</h2><p>Start with the castle and the cathedral, then let the small streets guide you toward hidden courtyards, local bakeries and sunset aperitifs in the old town.</p><blockquote>Conversano is close enough to become part of your daily ritual: morning coffee, evening stroll, one more gelato before returning home.</blockquote><h3>Perfect for</h3><ul><li>A slow walk after breakfast.</li><li>An easy dinner without taking the car.</li><li>Guests who want culture, shops and local life within reach.</li></ul>',
		),
		array(
			'slug'          => 'polignano-a-mare',
			'title'         => 'Polignano a Mare and the Adriatic cliffs',
			'over'          => '25 min',
			'hero'          => $asset_base . 'exterior-090.jpg',
			'category'      => 'Surroundings',
			'category_slug' => 'surroundings',
			'group'         => 'theme01_surroundings',
			'excerpt'       => 'White balconies, sea caves and dramatic cliffs make Polignano a Mare one of the essential coastal stops near Conversano.',
			'content'       => '<p>Polignano a Mare is one of the most iconic views of the Adriatic coast: houses rising above the cliffs, narrow lanes opening suddenly to blue water, and terraces where the sea feels close enough to touch.</p><p>It is a place to explore without hurry. Wander through the old centre, pause at the viewpoints, then follow the sound of the waves toward Lama Monachile, the town beach framed by stone walls.</p><h2>How to enjoy it</h2><p>Visit early in the morning for quiet streets, or arrive in the late afternoon for golden light and dinner by the sea.</p><blockquote>The best moments in Polignano are often the simplest: a balcony, the wind, and the colour of the Adriatic below.</blockquote><h3>Perfect for</h3><ul><li>Sea views and photography.</li><li>A half-day coastal trip.</li><li>Romantic dinners and aperitifs by the water.</li></ul>',
		),
		array(
			'slug'          => 'alberobello-itria-valley',
			'title'         => 'Alberobello and the Itria Valley',
			'over'          => '35 min',
			'hero'          => $asset_base . 'exterior-072.jpg',
			'category'      => 'Surroundings',
			'category_slug' => 'surroundings',
			'group'         => 'theme01_surroundings',
			'excerpt'       => 'Trulli, dry-stone walls, olive groves and whitewashed villages define one of the most recognisable landscapes in Puglia.',
			'content'       => '<p>The Itria Valley is the postcard image of inland Puglia: rolling countryside, ancient olive trees, white villages and the unmistakable silhouettes of the trulli.</p><p>Alberobello is the most famous stop, protected by UNESCO and loved for its cone-roofed houses. Around it, towns like Locorotondo, Cisternino and Martina Franca offer a quieter, equally beautiful rhythm.</p><h2>A day among villages</h2><p>Plan a relaxed itinerary with one main town and one smaller stop. The distances are short, but the pleasure is in slowing down, tasting local food and letting the landscape do the rest.</p><blockquote>The Itria Valley is not only a place to visit. It is a landscape to move through slowly.</blockquote><h3>Perfect for</h3><ul><li>Architecture and countryside drives.</li><li>Lunch in a whitewashed village.</li><li>Guests who want the classic trulli experience.</li></ul>',
		),
		array(
			'slug'          => 'bari',
			'title'         => 'Bari, between old town and seafront',
			'over'          => '40 min',
			'hero'          => $asset_base . 'exterior-085.jpg',
			'category'      => 'Surroundings',
			'category_slug' => 'surroundings',
			'group'         => 'theme01_surroundings',
			'excerpt'       => 'The regional capital mixes the charm of Bari Vecchia with elegant shopping streets, churches, theatres and a long seafront promenade.',
			'content'       => '<p>Bari is the lively capital of Puglia and a rewarding contrast to the quiet rhythm of Conversano. Its old town, Bari Vecchia, is a maze of stone alleys, shrines, laundry lines and the scent of fresh pasta.</p><p>Beyond the old centre, the city opens into broad shopping streets, historic theatres and one of the most pleasant seafront promenades in southern Italy.</p><h2>What not to miss</h2><p>Visit the Basilica di San Nicola, walk through Bari Vecchia, then continue toward the Murat district for shopping, cafes and a different side of the city.</p><blockquote>Bari is generous and direct: a city of voices, sea air, street food and daily life.</blockquote><h3>Perfect for</h3><ul><li>A full day of culture and shopping.</li><li>Street food and local markets.</li><li>Travellers arriving or departing from Bari airport.</li></ul>',
		),
		array(
			'slug'          => 'book-early-save-more',
			'title'         => 'Book Early, Save More',
			'over'          => 'Early booking',
			'hero'          => $asset_base . 'exterior-072.jpg',
			'category'      => 'Offers',
			'category_slug' => 'offers',
			'group'         => 'theme01_offers',
			'excerpt'       => 'Reserve in advance and access a dedicated early-booking rate for your favourite house at Villa Rosa Resort.',
			'content'       => '<p>Planning ahead is the easiest way to secure the house you prefer and enjoy a more convenient rate. The Book Early, Save More offer is designed for guests who already know their travel period and want to reserve Villa Rosa Resort with calm, clarity and the best available conditions.</p><p>The offer can be adapted to the selected dates, house type and length of stay. It is ideal for summer holidays, family trips and special occasions that deserve to be organised without last-minute pressure.</p><h2>What the offer includes</h2><ul><li>Priority choice among available houses.</li><li>Dedicated early-booking conditions.</li><li>Personal assistance before arrival.</li></ul><p>For updated availability, conditions and a personalised quotation, <a href="' . esc_url( $contact_url ) . '">contact us for more information</a>. We will be happy to prepare the best proposal for your stay.</p>',
		),
		array(
			'slug'          => 'seven-nights-six',
			'title'         => '7 Nights = 6',
			'over'          => 'Long stay',
			'hero'          => $asset_base . 'exterior-081.jpg',
			'category'      => 'Offers',
			'category_slug' => 'offers',
			'group'         => 'theme01_offers',
			'excerpt'       => 'Stay a full week in Puglia and enjoy one night offered, subject to availability and selected periods.',
			'content'       => '<p>A week at Villa Rosa Resort gives you time to truly settle into Puglia: slow breakfasts, days by the pool, evenings in Conversano and relaxed trips to the coast. With the 7 Nights = 6 offer, longer stays become even more inviting.</p><p>This promotion is perfect for guests who want to experience the region without rushing from one place to the next. Choose your house, plan your rhythm and let every day feel different.</p><h2>Why choose a long stay</h2><ul><li>More time to enjoy the resort and its spaces.</li><li>Enough days for sea, villages, food and rest.</li><li>A better value for weekly holidays.</li></ul><p>The offer is subject to dates, house availability and booking conditions. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will send you the best available solution.</p>',
		),
		array(
			'slug'          => 'spa-escape',
			'title'         => 'SPA Escape',
			'over'          => 'Wellness',
			'hero'          => $asset_base . 'jacuzzi.png',
			'category'      => 'Offers',
			'category_slug' => 'offers',
			'group'         => 'theme01_offers',
			'excerpt'       => 'A romantic wellness escape for two, with a private stay and dedicated moments in the SPA.',
			'content'       => '<p>The SPA Escape offer is created for couples and guests who want to add a deeper sense of wellbeing to their stay. Between the privacy of your house and the quiet atmosphere of the wellness area, Villa Rosa Resort becomes a place to pause and recharge.</p><p>Depending on the selected period, the experience can include dedicated access to wellness spaces, romantic details and suggestions for a slow itinerary around Conversano and the coast.</p><h2>Ideal for</h2><ul><li>Romantic weekends and anniversaries.</li><li>Short wellness breaks in Puglia.</li><li>Guests looking for privacy, comfort and calm.</li></ul><p>Every wellness stay can be shaped around your dates and preferences. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and tell us how you would like to experience your escape.</p>',
		),
		array(
			'slug'          => 'spring-autumn',
			'title'         => 'Spring & Autumn',
			'over'          => 'Season',
			'hero'          => $asset_base . 'exterior-090.jpg',
			'category'      => 'Offers',
			'category_slug' => 'offers',
			'group'         => 'theme01_offers',
			'excerpt'       => 'Discover Puglia in its gentlest seasons with reduced shoulder-season rates and a slower local rhythm.',
			'content'       => '<p>Spring and autumn are among the most beautiful moments to discover Puglia. The light is softer, the towns are quieter and the countryside around Conversano reveals colours and scents that are easy to miss in the busiest months.</p><p>This seasonal offer is made for travellers who love mild temperatures, authentic local life and a more peaceful way to explore the region. It is a smart choice for couples, small groups and remote workers who want space and comfort.</p><h2>What makes it special</h2><ul><li>Reduced rates in selected shoulder-season periods.</li><li>Excellent conditions for day trips and outdoor experiences.</li><li>A calmer version of Puglia, close to the sea and inland villages.</li></ul><p>Availability changes by date and house type. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will recommend the best period for your stay.</p>',
		),
		array(
			'slug'          => 'cooking-classes',
			'title'         => 'Cooking Classes in the heart of Puglia',
			'over'          => 'Taste',
			'hero'          => $asset_base . 'apulian-breakfast.jpg',
			'category'      => 'Experiences',
			'category_slug' => 'experiences',
			'group'         => 'theme01_experiences',
			'excerpt'       => 'A hands-on Apulian cooking class shaped around local ingredients, family recipes and the pleasure of sharing a table.',
			'content'       => '<p>Live Puglia, your way: we craft bespoke experiences for every guest, shaped around your tastes and curiosities. A cooking class is one of the warmest ways to enter the region, through flour, olive oil, vegetables, herbs and the stories that turn simple ingredients into memories.</p><p>Depending on the season, the experience can focus on fresh pasta, traditional focaccia, vegetables from the local market or a full Apulian menu to prepare and enjoy together.</p><h2>What to expect</h2><ul><li>A relaxed, hands-on lesson with local flavours.</li><li>Seasonal ingredients and traditional techniques.</li><li>A shared meal or tasting moment at the end of the class.</li></ul><p>Each class can be adapted to guests, timing and preferences. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will help you design the right culinary experience.</p>',
		),
		array(
			'slug'          => 'wine-tastings',
			'title'         => 'Wine Tastings',
			'over'          => 'Cellar',
			'hero'          => $asset_base . 'exterior-072.jpg',
			'category'      => 'Experiences',
			'category_slug' => 'experiences',
			'group'         => 'theme01_experiences',
			'excerpt'       => 'Discover local labels, native grapes and the generous character of Apulian wine through a tailored tasting experience.',
			'content'       => '<p>Puglia is a land of generous wines, sunlit vineyards and native grapes with a strong personality. A private tasting is the perfect way to discover this side of the region without rushing, guided by stories, pairings and the pleasure of comparison.</p><p>We can arrange an intimate tasting at the resort or suggest nearby wineries according to the style of experience you prefer: relaxed, educational, romantic or convivial.</p><h2>Designed around you</h2><ul><li>Local red, white and rose wines from selected producers.</li><li>Suggested pairings with Apulian flavours.</li><li>Options for couples, families, small groups and special occasions.</li></ul><p>Tell us your dates and what you love to drink. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will prepare a tasting proposal for your stay.</p>',
		),
		array(
			'slug'          => 'private-tours',
			'title'         => 'Private Tours',
			'over'          => 'Discover',
			'hero'          => $asset_base . 'exterior-078.jpg',
			'category'      => 'Experiences',
			'category_slug' => 'experiences',
			'group'         => 'theme01_experiences',
			'excerpt'       => 'Tailor-made tours from Conversano to the villages, landscapes and hidden corners that make Puglia unforgettable.',
			'content'       => '<p>From the flavours of the Apulian table to the wonders just beyond our gates, let us design moments you will remember long after you leave. Private tours are ideal for guests who want to discover Puglia with freedom, comfort and a route shaped around personal interests.</p><p>Starting from Villa Rosa Resort, you can explore whitewashed villages, countryside roads, historic centres, artisan workshops, coastal towns and places that are easier to love with the right local guidance.</p><h2>Possible itineraries</h2><ul><li>Conversano, Polignano a Mare and the Adriatic coast.</li><li>Alberobello, Locorotondo and the Itria Valley.</li><li>Bari old town, local markets and cultural stops.</li></ul><p>Every tour can be adjusted by duration, pace and theme. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will help you create your private itinerary.</p>',
		),
		array(
			'slug'          => 'coast-beaches',
			'title'         => 'Coast & Beaches',
			'over'          => 'Sea',
			'hero'          => $asset_base . 'exterior-090.jpg',
			'category'      => 'Experiences',
			'category_slug' => 'experiences',
			'group'         => 'theme01_experiences',
			'excerpt'       => 'Reach the Adriatic coast from Conversano and discover beaches, cliffs, sea caves and relaxed seaside days.',
			'content'       => '<p>The coast is one of the great pleasures of staying in Conversano. In a short drive you can reach cliffs, coves, beach clubs, fishing towns and panoramic terraces where the Adriatic becomes part of the day.</p><p>We can help you choose the right seaside experience: a quiet beach morning, a scenic stop in Polignano a Mare, a boat excursion, a long lunch by the water or a full coastal itinerary with time to swim and wander.</p><h2>Perfect for</h2><ul><li>Guests who want sea views and easy beach days.</li><li>Families looking for comfortable seaside options.</li><li>Couples planning a romantic coastal afternoon.</li></ul><p>The best beach depends on season, weather and the type of day you imagine. <a href="' . esc_url( $contact_url ) . '">Contact us for more information</a> and we will suggest the best coast and beach options for your stay.</p>',
		),
	);
}

function sbt_italian_seed_article_translations() {
	return array(
		'conversano' => array( 'title' => 'Conversano, il cuore nobile della Puglia', 'excerpt' => 'Un centro storico elegante, fatto di pietra, palazzi nobiliari e piazze tranquille, a pochi passi da Villa Rosa Resort.', 'content' => '<p>Conversano e la prima scoperta fuori dai cancelli di Villa Rosa Resort. Elegante, autentica e facile da vivere a piedi, custodisce il ritmo della Puglia piu vera.</p><p>Il castello normanno-svevo domina il centro storico, mentre chiese, monasteri e palazzi raccontano una storia stratificata e accogliente.</p><h2>Cosa vedere</h2><p>Inizia dal castello e dalla cattedrale, poi lasciati guidare dalle stradine verso cortili nascosti, forni locali e aperitivi al tramonto.</p><h3>Perfetto per</h3><ul><li>Una passeggiata lenta dopo colazione.</li><li>Una cena senza prendere l auto.</li><li>Chi cerca cultura e vita locale a portata di mano.</li></ul>' ),
		'polignano-a-mare' => array( 'title' => 'Polignano a Mare e le scogliere adriatiche', 'excerpt' => 'Balconi bianchi, grotte marine e scogliere spettacolari rendono Polignano una tappa essenziale vicino Conversano.', 'content' => '<p>Polignano a Mare e una delle immagini piu iconiche della costa adriatica: case sospese sulle scogliere, vicoli chiari e terrazze aperte sul blu.</p><p>Visitala senza fretta, attraversando il centro storico fino a Lama Monachile, la celebre spiaggia incastonata nella pietra.</p><h2>Come viverla</h2><p>Arriva al mattino per le strade piu tranquille, oppure nel tardo pomeriggio per la luce dorata e una cena vista mare.</p><h3>Perfetto per</h3><ul><li>Panorami e fotografie.</li><li>Una mezza giornata sulla costa.</li><li>Cene romantiche e aperitivi sul mare.</li></ul>' ),
		'alberobello-itria-valley' => array( 'title' => 'Alberobello e la Valle d Itria', 'excerpt' => 'Trulli, muretti a secco, ulivi e borghi bianchi: uno dei paesaggi piu riconoscibili della Puglia.', 'content' => '<p>La Valle d Itria e la Puglia dell immaginario: campagne morbide, ulivi antichi, borghi bianchi e il profilo inconfondibile dei trulli.</p><p>Alberobello e la tappa piu famosa, protetta dall UNESCO; intorno, Locorotondo, Cisternino e Martina Franca offrono un ritmo piu quieto e altrettanto affascinante.</p><h2>Una giornata tra i borghi</h2><p>Scegli un itinerario lento, con una tappa principale e una secondaria. Il piacere e nel fermarsi, assaggiare e guardare il paesaggio.</p><h3>Perfetto per</h3><ul><li>Architettura e strade di campagna.</li><li>Pranzi nei borghi bianchi.</li><li>Chi vuole vivere l esperienza dei trulli.</li></ul>' ),
		'bari' => array( 'title' => 'Bari, tra citta vecchia e lungomare', 'excerpt' => 'Il capoluogo regionale unisce Bari Vecchia, vie dello shopping, chiese, teatri e un grande lungomare.', 'content' => '<p>Bari e il capoluogo vivace della Puglia e un bel contrasto con la quiete di Conversano. Bari Vecchia e un labirinto di vicoli, edicole votive e profumo di pasta fresca.</p><p>Oltre il centro antico, la citta si apre in strade eleganti, teatri storici e un lungomare tra i piu piacevoli del Sud.</p><h2>Da non perdere</h2><p>Visita la Basilica di San Nicola, attraversa Bari Vecchia e continua verso il quartiere Murat per shopping e caffe.</p><h3>Perfetto per</h3><ul><li>Una giornata di cultura e shopping.</li><li>Street food e mercati locali.</li><li>Arrivi o partenze dall aeroporto di Bari.</li></ul>' ),
		'book-early-save-more' => array( 'title' => 'Prenota prima, risparmia di piu', 'excerpt' => 'Prenota in anticipo e accedi a condizioni dedicate per il tuo soggiorno preferito.', 'content' => '<p>Organizzarsi in anticipo e il modo migliore per scegliere la soluzione piu adatta e ottenere condizioni piu convenienti.</p><p>L offerta e pensata per chi conosce gia il periodo di viaggio e vuole prenotare con serenita.</p><h2>Cosa include</h2><ul><li>Scelta prioritaria tra le disponibilita.</li><li>Condizioni dedicate early booking.</li><li>Assistenza personalizzata prima dell arrivo.</li></ul><p>Contattaci per disponibilita aggiornate e un preventivo su misura.</p>' ),
		'seven-nights-six' => array( 'title' => '7 notti = 6', 'excerpt' => 'Resta una settimana in Puglia e approfitta di una notte offerta in periodi selezionati.', 'content' => '<p>Una settimana permette di entrare davvero nel ritmo della Puglia: colazioni lente, piscina, mare, borghi e serate a Conversano.</p><p>Con l offerta 7 notti = 6, i soggiorni lunghi diventano ancora piu invitanti.</p><h2>Perche sceglierla</h2><ul><li>Piu tempo per vivere la struttura.</li><li>Giorni sufficienti per mare, borghi e relax.</li><li>Maggiore valore per le vacanze settimanali.</li></ul><p>L offerta dipende da date, disponibilita e condizioni di prenotazione.</p>' ),
		'spa-escape' => array( 'title' => 'Fuga SPA', 'excerpt' => 'Un soggiorno romantico per due con momenti dedicati al benessere.', 'content' => '<p>La Fuga SPA e pensata per coppie e ospiti che desiderano aggiungere un tempo di benessere al soggiorno.</p><p>Tra privacy, quiete e atmosfere rilassanti, la struttura diventa un luogo dove fermarsi e ricaricarsi.</p><h2>Ideale per</h2><ul><li>Weekend romantici e anniversari.</li><li>Brevi pause wellness in Puglia.</li><li>Chi cerca privacy, comfort e calma.</li></ul><p>Ogni proposta puo essere modellata sulle tue date e preferenze.</p>' ),
		'spring-autumn' => array( 'title' => 'Primavera e autunno', 'excerpt' => 'Scopri la Puglia nelle stagioni piu dolci, con tariffe dedicate e un ritmo piu lento.', 'content' => '<p>Primavera e autunno sono momenti splendidi per scoprire la Puglia: luce morbida, borghi piu tranquilli e campagna ricca di colori.</p><p>Questa offerta e pensata per chi ama temperature miti, vita locale autentica e un modo piu quieto di esplorare.</p><h2>Cosa la rende speciale</h2><ul><li>Tariffe ridotte in periodi selezionati.</li><li>Ottime condizioni per escursioni e attivita all aperto.</li><li>Una Puglia piu calma, tra mare e borghi interni.</li></ul><p>Contattaci e ti consiglieremo il periodo migliore.</p>' ),
		'cooking-classes' => array( 'title' => 'Cooking class nel cuore della Puglia', 'excerpt' => 'Una lezione di cucina pugliese con ingredienti locali, ricette di famiglia e piacere della condivisione.', 'content' => '<p>Vivi la Puglia a modo tuo: una cooking class e uno dei modi piu caldi per entrare nel territorio, tra farina, olio, verdure, erbe e racconti.</p><p>In base alla stagione, l esperienza puo concentrarsi su pasta fresca, focaccia tradizionale, mercato locale o un menu pugliese completo.</p><h2>Cosa aspettarsi</h2><ul><li>Una lezione rilassata e pratica.</li><li>Ingredienti stagionali e tecniche tradizionali.</li><li>Un momento finale di assaggio o pranzo condiviso.</li></ul><p>Ogni classe puo essere adattata a ospiti, tempi e preferenze.</p>' ),
		'wine-tastings' => array( 'title' => 'Degustazioni di vino', 'excerpt' => 'Scopri etichette locali, vitigni autoctoni e il carattere generoso del vino pugliese.', 'content' => '<p>La Puglia e terra di vini generosi, vigne al sole e vitigni autoctoni dal carattere deciso.</p><p>Una degustazione privata e il modo ideale per conoscere questo lato del territorio con calma, racconti e abbinamenti.</p><h2>Su misura per te</h2><ul><li>Vini rossi, bianchi e rosati di produttori selezionati.</li><li>Abbinamenti con sapori pugliesi.</li><li>Proposte per coppie, famiglie e piccoli gruppi.</li></ul><p>Raccontaci le tue date e le tue preferenze.</p>' ),
		'private-tours' => array( 'title' => 'Tour privati', 'excerpt' => 'Itinerari su misura da Conversano verso borghi, paesaggi e angoli nascosti della Puglia.', 'content' => '<p>Dai sapori della tavola pugliese alle meraviglie oltre i nostri cancelli, possiamo disegnare momenti da ricordare.</p><p>I tour privati sono ideali per chi vuole scoprire la Puglia con liberta, comfort e un percorso costruito sui propri interessi.</p><h2>Possibili itinerari</h2><ul><li>Conversano, Polignano a Mare e costa adriatica.</li><li>Alberobello, Locorotondo e Valle d Itria.</li><li>Bari vecchia, mercati e tappe culturali.</li></ul><p>Ogni tour puo essere adattato per durata, ritmo e tema.</p>' ),
		'coast-beaches' => array( 'title' => 'Costa e spiagge', 'excerpt' => 'Raggiungi la costa adriatica e scopri spiagge, scogliere, grotte marine e giornate di mare.', 'content' => '<p>La costa e uno dei grandi piaceri di un soggiorno a Conversano. In poco tempo puoi raggiungere scogliere, calette, lidi e borghi marinari.</p><p>Possiamo aiutarti a scegliere l esperienza giusta: mattina in spiaggia, tappa panoramica a Polignano, escursione in barca o pranzo sul mare.</p><h2>Perfetto per</h2><ul><li>Chi cerca mare e panorami.</li><li>Famiglie che vogliono opzioni comode.</li><li>Coppie che immaginano un pomeriggio romantico sulla costa.</li></ul><p>La spiaggia migliore dipende da stagione, meteo e dal tipo di giornata che desideri.</p>' ),
	);
}

function sbt_seed_article_for_language( $article, $language ) {
	$language = sanitize_key( $language );
	if ( 'it' !== $language ) {
		return $article;
	}

	$translations = sbt_italian_seed_article_translations();
	$slug = isset( $article['slug'] ) ? sanitize_title( $article['slug'] ) : '';
	if ( isset( $translations[ $slug ] ) ) {
		$article = array_merge( $article, $translations[ $slug ] );
	}

	$category_map = array(
		'experiences'  => 'Esperienze',
		'surroundings' => 'Dintorni',
		'offers'       => 'Offerte',
	);
	if ( isset( $article['category_slug'], $category_map[ $article['category_slug'] ] ) ) {
		$article['category'] = $category_map[ $article['category_slug'] ];
	}

	return $article;
}

function sbt_create_seed_posts() {
	if ( ! in_array( sbt_active_subtheme_key(), array( 'theme01', 'theme02' ), true ) ) {
		return;
	}

	$category_cache = array();

	foreach ( sbt_enabled_languages() as $language ) {
	foreach ( sbt_theme01_seed_articles() as $base_article ) {
		$article = sbt_seed_article_for_language( $base_article, $language );
		$category_name = isset( $article['category'] ) ? $article['category'] : 'Articles';
		$category_slug = isset( $article['category_slug'] ) ? sanitize_title( $article['category_slug'] ) : sanitize_title( $category_name );
		if ( $language !== sbt_default_language() ) {
			$category_slug = $language . '-' . $category_slug;
		}

		if ( ! isset( $category_cache[ $category_slug ] ) ) {
			$term = term_exists( $category_slug, 'category' );
			if ( ! $term ) {
				$term = wp_insert_term( $category_name, 'category', array( 'slug' => $category_slug ) );
			}

			if ( is_wp_error( $term ) && isset( $term->error_data['term_exists'] ) ) {
				$category_cache[ $category_slug ] = (int) $term->error_data['term_exists'];
			} elseif ( is_array( $term ) && ! is_wp_error( $term ) ) {
				$category_cache[ $category_slug ] = (int) $term['term_id'];
			} elseif ( is_numeric( $term ) ) {
				$category_cache[ $category_slug ] = (int) $term;
			} else {
				$category_cache[ $category_slug ] = 0;
			}
		}

		$category_id = $category_cache[ $category_slug ];
		$post_slug = $language === sbt_default_language() ? $article['slug'] : $language . '-' . $article['slug'];
		$post_id = sbt_seed_post_id( $article['slug'], $language );
		if ( $post_id ) {
			wp_update_post( array(
				'ID'           => $post_id,
				'post_title'   => $article['title'],
				'post_name'    => $post_slug,
				'post_excerpt' => $article['excerpt'],
				'post_content' => $article['content'],
			) );
			update_post_meta( $post_id, '_sbt_seed_slug', $post_slug );
			update_post_meta( $post_id, '_sbt_seed_base_slug', $article['slug'] );
			update_post_meta( $post_id, '_sbt_language', $language );
			update_post_meta( $post_id, '_sbt_seed_article', isset( $article['group'] ) ? str_replace( 'theme01_', sbt_active_subtheme_key() . '_', $article['group'] ) : sbt_active_subtheme_key() . '_article' );
			update_post_meta( $post_id, '_sbt_article_hero', esc_url_raw( $article['hero'] ) );
			if ( $category_id ) {
				wp_set_post_terms( $post_id, array( $category_id ), 'category', false );
			}
			continue;
		}

		$post_id = wp_insert_post( array(
			'post_type'    => 'post',
			'post_status'  => 'publish',
			'post_title'   => $article['title'],
			'post_name'    => $post_slug,
			'post_excerpt' => $article['excerpt'],
			'post_content' => $article['content'],
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_sbt_seed_slug', $post_slug );
			update_post_meta( $post_id, '_sbt_seed_base_slug', $article['slug'] );
			update_post_meta( $post_id, '_sbt_language', $language );
			update_post_meta( $post_id, '_sbt_seed_article', isset( $article['group'] ) ? str_replace( 'theme01_', sbt_active_subtheme_key() . '_', $article['group'] ) : sbt_active_subtheme_key() . '_article' );
			update_post_meta( $post_id, '_sbt_article_hero', esc_url_raw( $article['hero'] ) );
			if ( $category_id ) {
				wp_set_post_terms( $post_id, array( $category_id ), 'category', false );
			}
		}
	}
	}
}

function sbt_maybe_create_seed_posts() {
	if ( is_admin() && current_user_can( 'edit_theme_options' ) ) {
		sbt_create_seed_posts();
	}
}
add_action( 'admin_init', 'sbt_maybe_create_seed_posts' );

function sbt_language_page_slug( $base_slug, $language ) {
	$base_slug = sanitize_title( $base_slug );
	$language = sanitize_key( $language );
	$post_name = sbt_language_page_post_name( $base_slug, $language );

	if ( 'home' === $base_slug ) {
		return $post_name;
	}

	return $language === sbt_default_language() ? $post_name : $language . '/' . $post_name;
}

function sbt_route_page_template( $template ) {
	if ( is_front_page() || is_home() ) {
		$front = locate_template( 'front-page.php' );
		return $front ? $front : $template;
	}

	if ( is_page() ) {
		$slug = sbt_page_base_slug_for_post( get_queried_object_id() );
		$pages = sbt_page_templates();
		if ( isset( $pages[ $slug ] ) ) {
			$template_file = isset( $pages[ $slug ]['template_file'] ) ? $pages[ $slug ]['template_file'] : $pages[ $slug ]['file'];
			$file = sbt_subtheme_path( $template_file );
			return file_exists( $file ) ? $file : $template;
		}
	}

	return $template;
}
add_filter( 'template_include', 'sbt_route_page_template', 99 );

function sbt_disable_standard_page_editor( $use_block_editor, $post ) {
	if ( $post && sbt_is_theme_page_post( $post->ID ) ) {
		return false;
	}

	return $use_block_editor;
}
add_filter( 'use_block_editor_for_post', 'sbt_disable_standard_page_editor', 10, 2 );

function sbt_is_scalar_list( $value ) {
	return is_array( $value ) && array_values( $value ) === $value && 0 < count( $value ) && ! array_filter( $value, 'is_array' );
}

function sbt_apply_flat_overrides( &$value, $path, $overrides ) {
	if ( isset( $overrides[ $path ] ) ) {
		if ( is_array( $value ) && sbt_is_scalar_list( $value ) ) {
			$lines = preg_split( '/\r\n|\r|\n/', (string) $overrides[ $path ] );
			$value = array_values( array_filter( array_map( 'trim', $lines ), 'strlen' ) );
		} else {
			$value = $overrides[ $path ];
		}
	}

	if ( is_array( $value ) && ! sbt_is_scalar_list( $value ) ) {
		foreach ( $value as $key => &$child ) {
			sbt_apply_flat_overrides( $child, '' === $path ? (string) $key : $path . '.' . $key, $overrides );
		}
	}
}

function sbt_active_overrides( $language = '' ) {
	$options = sbt_get_options();
	$key = sbt_active_subtheme_key();
	$overrides = isset( $options['overrides'] ) && is_array( $options['overrides'] ) ? $options['overrides'] : array();
	$subtheme_overrides = isset( $overrides[ $key ] ) && is_array( $overrides[ $key ] ) ? $overrides[ $key ] : array();
	$language = '' === $language ? sbt_current_content_language() : sanitize_key( $language );
	$legacy = array_filter( $subtheme_overrides, 'is_string' );
	$language_overrides = isset( $subtheme_overrides['_languages'][ $language ] ) && is_array( $subtheme_overrides['_languages'][ $language ] ) ? $subtheme_overrides['_languages'][ $language ] : array();

	return array_merge( $legacy, $language_overrides );
}

function sbt_custom_house_default_content( $title, $base = array() ) {
	$content = is_array( $base ) && $base ? $base : array(
		'title'    => $title,
		'key'      => $title,
		'over'     => 'The Houses',
		'h1'       => $title,
		'lead'     => 'A private house designed for comfort and quiet days in Puglia.',
		'p'        => 'Edit this text from the SyncBooking page editor.',
		'intro_over' => 'Intimate & refined',
		'intro_h2' => 'A private retreat',
		'intro_p' => 'Edit this text from the SyncBooking page editor.',
		'banner'   => '',
		'main'     => '',
		'overview_gallery' => array(),
		'specs'    => array( array( 'Surface', '40-50 m2' ), array( 'Occupancy', '2 guests' ), array( 'Bed', 'King-size' ) ),
		'gallery'  => array(),
		'gallery_over' => 'A look inside',
		'gallery_h2' => 'The room, in detail',
		'included_over' => "What's included",
		'included_h2' => 'Comfort in every corner',
		'included' => array(),
		'cta_over' => 'Ready when you are',
		'cta_h2' => 'Book your house',
		'cta_btn' => 'Request availability',
		'cta_url' => 'syncbooking:booking',
		'cta_bg' => '',
	);

	$content['title'] = $title;
	$content['key'] = $title;
	$content['h1'] = $title;
	$content['crumb_label'] = $title;

	return $content;
}

function sbt_apply_unit_structure( &$SITE, &$NAV, &$C, &$HOUSE_CARDS, &$TEXT ) {
	$subtheme = sbt_active_subtheme_key();
	if ( ! in_array( $subtheme, array( 'theme01', 'theme02' ), true ) ) {
		return;
	}

	$entire_label = sbt_entire_label( $subtheme );
	$entire_url = sbt_entire_nav_url( $subtheme );
	$listing_url = 'theme02' === $subtheme ? 'house.php' : 'houses.php';
	$is_it = 'it' === sbt_current_content_language();
	$accommodation_menu_label = $is_it ? 'Alloggi' : 'Accomodation';
	$rooms_menu_label = $is_it ? 'Camere' : 'Rooms';
	$whole_menu_label = $is_it ? ( 'theme02' === $subtheme ? 'Tutta la Masseria' : 'Tutta la Villa' ) : ( 'theme02' === $subtheme ? 'The whole Masseria' : 'The whole Villa' );
	$price_menu_label = $is_it ? 'Prezzi e condizioni' : 'Price & Condition';
	$book_menu_label = $is_it ? 'Prenota ora' : 'Book Now';
	if ( sbt_is_entire_rental_mode( $subtheme ) ) {
		$TEXT['houses'] = $whole_menu_label;
		$HOUSE_CARDS = array();
		foreach ( $NAV as &$item ) {
			if ( isset( $item['key'] ) && in_array( $item['key'], array( 'houses', 'house', 'rooms', 'hospitality' ), true ) ) {
				$item['key'] = 'theme02' === $subtheme ? 'rooms' : 'houses';
				$item['label'] = $accommodation_menu_label;
				$item['url'] = $entire_url;
				$item['sub'] = array(
					array(
						'url'   => $entire_url,
						'label' => $whole_menu_label,
						'desc'  => 'Exclusive rental',
					),
					array(
						'url'    => 'price-and-condition.php',
						'label'  => $price_menu_label,
						'desc'   => 'Rates, check-in & terms',
						'divide' => true,
					),
					array(
						'url'   => 'syncbooking:booking',
						'label' => $book_menu_label,
						'desc'  => 'Online booking',
					),
				);
			}
		}
		unset( $item );
		return;
	}

	$unit_label = sbt_unit_label( array( 'SITE.unit_label' => $SITE['unit_label'] ?? sbt_structural_override_value( $subtheme, 'SITE.unit_label', 'theme02' === $subtheme ? 'Room' : 'House' ) ) );
	$plural_label = sbt_unit_plural_label( $unit_label );
	$detail_pages = sbt_custom_house_pages( $subtheme );
	$TEXT['houses'] = $rooms_menu_label;

	if ( isset( $C['houses'] ) && is_array( $C['houses'] ) ) {
		$C['houses']['title'] = $plural_label . ' - ' . ( $SITE['name'] ?? 'SyncBooking' );
		$C['houses']['h1'] = $plural_label;
		if ( isset( $C['houses']['intro_over'] ) ) {
			$C['houses']['intro_over'] = 'Your ' . strtolower( $plural_label );
		}
	}
	if ( isset( $C['house'] ) && is_array( $C['house'] ) ) {
		$C['house']['title'] = $plural_label . ' - ' . ( $SITE['name'] ?? 'SyncBooking' );
		$C['house']['h1'] = $plural_label;
	}

	$cards = array();
	foreach ( $detail_pages as $index => $house_page ) {
		$number = $index + 1;
		$content_key = $house_page['content_key'] ?? '';
		$content = $content_key && isset( $C[ $content_key ] ) && is_array( $C[ $content_key ] ) ? $C[ $content_key ] : array();
		$display_title = ! empty( $house_page['title'] ) ? $house_page['title'] : ( $content['h1'] ?? sbt_unit_default_title( $unit_label, $number ) );
		if ( $content_key && isset( $C[ $content_key ] ) && is_array( $C[ $content_key ] ) ) {
			$C[ $content_key ]['title'] = $display_title . ' - ' . ( $SITE['name'] ?? 'SyncBooking' );
			$C[ $content_key ]['h1'] = $display_title;
			$C[ $content_key ]['crumb_label'] = $display_title;
			if ( isset( $C[ $content_key ]['cta_h2'] ) ) {
				$C[ $content_key ]['cta_h2'] = 'Book ' . strtolower( $display_title );
			}
		}
		$card_image = $content['main'] ?? ( $content['overview_gallery'][0] ?? ( $content['banner'] ?? '' ) );
		$card_gallery = isset( $content['card_gallery'] ) && is_array( $content['card_gallery'] ) ? $content['card_gallery'] : ( isset( $content['overview_gallery'] ) && is_array( $content['overview_gallery'] ) ? $content['overview_gallery'] : array() );
		if ( ! $card_gallery && $card_image ) {
			$card_gallery = array( $card_image );
		}
		$cards[] = array(
			'tag'   => sbt_unit_default_title( $unit_label, $number ),
			'title' => $display_title,
			'listing_title' => $display_title,
			'img'   => $card_image,
			'gallery' => $card_gallery,
			'url'   => $house_page['slug'] . '.php',
			'specs' => isset( $content['listing_specs'] ) && is_array( $content['listing_specs'] ) ? $content['listing_specs'] : ( isset( $content['specs'] ) && is_array( $content['specs'] ) ? $content['specs'] : array() ),
		);
	}
	if ( $cards ) {
		$HOUSE_CARDS = $cards;
	}

	foreach ( $NAV as &$item ) {
		if ( isset( $item['key'] ) && in_array( $item['key'], array( 'houses', 'house', 'rooms', 'hospitality' ), true ) ) {
			$item['label'] = $accommodation_menu_label;
			$item['url'] = $listing_url;
			$item['sub'] = array();
			$item['sub'][] = array(
				'url'   => $listing_url,
				'label' => $rooms_menu_label,
				'desc'  => 'Rooms only',
			);
			$item['sub'][] = array(
				'url'   => $entire_url,
				'label' => $whole_menu_label,
				'desc'  => 'Exclusive rental',
			);
			$item['sub'][] = array(
				'url'    => 'price-and-condition.php',
				'label'  => $price_menu_label,
				'desc'   => 'Rates, check-in & terms',
				'divide' => true,
			);
			$item['sub'][] = array(
				'url'   => 'syncbooking:booking',
				'label' => $book_menu_label,
				'desc'  => 'Online booking',
			);
		}
	}
	unset( $item );
}

function sbt_theme01_seed_article_card_map() {
	return array(
		'surroundings' => array( 'conversano', 'polignano-a-mare', 'alberobello-itria-valley', 'bari' ),
		'experiences'  => array( 'cooking-classes', 'wine-tastings', 'private-tours', 'coast-beaches' ),
		'offers'       => array( 'book-early-save-more', 'seven-nights-six', 'spa-escape', 'spring-autumn' ),
	);
}

function sbt_is_legacy_article_target( $url ) {
	$url = trim( (string) $url );
	if ( '' === $url ) {
		return false;
	}

	$file = strtok( $url, '#' );
	if ( in_array( trim( $file, '/' ), array( 'article', 'article.php' ), true ) ) {
		return true;
	}

	$path = wp_parse_url( $file, PHP_URL_PATH );
	return is_string( $path ) && (bool) preg_match( '#/(?:[^/]+/)?article(?:\.php)?/?$#i', $path );
}

function sbt_normalize_theme01_seed_article_card_urls( &$C ) {
	if ( 'theme01' !== sbt_active_subtheme_key() || ! is_array( $C ) ) {
		return;
	}

	foreach ( sbt_theme01_seed_article_card_map() as $section => $slugs ) {
		if ( empty( $C[ $section ]['cards'] ) || ! is_array( $C[ $section ]['cards'] ) ) {
			continue;
		}

		foreach ( $slugs as $index => $slug ) {
			if ( isset( $C[ $section ]['cards'][ $index ]['url'] ) && sbt_is_legacy_article_target( $C[ $section ]['cards'][ $index ]['url'] ) ) {
				$C[ $section ]['cards'][ $index ]['url'] = 'post:' . $slug;
			}
		}
	}
}

function sbt_filter_disabled_nav_items( &$NAV ) {
	if ( ! is_array( $NAV ) ) {
		return;
	}

	$filtered = array();
	foreach ( $NAV as $item ) {
		if ( ! is_array( $item ) ) {
			continue;
		}

		if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) {
			$sub_items = array();
			foreach ( $item['sub'] as $sub_item ) {
				$sub_slug = isset( $sub_item['url'] ) ? sbt_page_slug_for_url_value( $sub_item['url'] ) : '';
				if ( $sub_slug && sbt_is_theme_page_disabled( $sub_slug ) ) {
					continue;
				}
				$sub_items[] = $sub_item;
			}
			$item['sub'] = $sub_items;
		}

		$item_slug = isset( $item['url'] ) ? sbt_page_slug_for_url_value( $item['url'] ) : '';
		if ( $item_slug && sbt_is_theme_page_disabled( $item_slug ) ) {
			if ( empty( $item['sub'] ) ) {
				continue;
			}
			$item['url'] = $item['sub'][0]['url'];
		}

		$filtered[] = $item;
	}

	$NAV = $filtered;
}

function sbt_migrate_theme01_seed_article_card_overrides() {
	if ( ! is_admin() || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$options = sbt_get_options();
	if ( empty( $options['overrides']['theme01'] ) || ! is_array( $options['overrides']['theme01'] ) ) {
		return;
	}

	$changed = false;
	foreach ( sbt_theme01_seed_article_card_map() as $section => $slugs ) {
		foreach ( $slugs as $index => $slug ) {
			$path = 'C.' . $section . '.cards.' . $index . '.url';
			if ( isset( $options['overrides']['theme01'][ $path ] ) && sbt_is_legacy_article_target( $options['overrides']['theme01'][ $path ] ) ) {
				$options['overrides']['theme01'][ $path ] = 'post:' . $slug;
				$changed = true;
			}

			if ( empty( $options['overrides']['theme01']['_languages'] ) || ! is_array( $options['overrides']['theme01']['_languages'] ) ) {
				continue;
			}

			foreach ( $options['overrides']['theme01']['_languages'] as &$language_overrides ) {
				if ( is_array( $language_overrides ) && isset( $language_overrides[ $path ] ) && sbt_is_legacy_article_target( $language_overrides[ $path ] ) ) {
					$language_overrides[ $path ] = 'post:' . $slug;
					$changed = true;
				}
			}
			unset( $language_overrides );
		}
	}

	if ( $changed ) {
		update_option( SBT_OPTION, $options );
	}
}
add_action( 'admin_init', 'sbt_migrate_theme01_seed_article_card_overrides' );

function sbt_apply_default_language_pack( &$SITE, &$NAV, &$C, &$TEXT ) {
	if ( 'it' !== sbt_current_content_language() ) {
		return;
	}

	$text_it = array(
		'home' => 'Home',
		'houses' => 'Camere',
		'view_house' => 'Vedi camera',
		'discover' => 'Scopri',
		'discover_villa' => 'Scopri la Villa',
		'discover_spa' => 'Scopri la SPA',
		'explore_experiences' => 'Esplora le esperienze',
		'show_all_photos' => 'Mostra tutte le foto',
		'request_availability' => 'Richiedi disponibilita',
		'price_condition' => 'Prezzi e condizioni',
		'contact_us' => 'Contattaci',
		'contacts' => 'Contatti',
		'stay_in_touch' => 'Resta in contatto',
		'privacy_policy' => 'Privacy Policy',
		'all_rights_reserved' => 'Tutti i diritti riservati',
		'address' => 'Indirizzo',
		'phone' => 'Telefono',
		'email' => 'Email',
		'open_maps' => 'Apri in Google Maps ->',
		'chat_whatsapp' => 'Scrivici su WhatsApp',
		'form_name' => 'Nome',
		'form_email' => 'Email',
		'form_phone' => 'Telefono',
		'form_message' => 'Messaggio',
		'form_name_placeholder' => 'Il tuo nome',
		'form_email_placeholder' => 'tu@email.com',
		'form_phone_placeholder' => '+39 ...',
		'form_message_placeholder' => 'Raccontaci date, ospiti e tipo di soggiorno...',
		'form_send' => 'Invia messaggio',
		'form_result' => 'Grazie, la richiesta e stata inviata. Ti contatteremo a breve.',
	);
	$TEXT = array_replace_recursive( $TEXT, $text_it );

	foreach ( $NAV as &$item ) {
		if ( empty( $item['key'] ) ) {
			continue;
		}

		$labels = array(
			'home' => 'Home',
			'villa' => 'Villa',
			'houses' => 'Alloggi',
			'house' => 'Alloggi',
			'rooms' => 'Alloggi',
			'hospitality' => 'Alloggi',
			'spa' => 'SPA & Wellness',
			'experiences' => 'Esperienze',
			'weddings' => 'Matrimoni',
			'surroundings' => 'Dintorni',
			'offers' => 'Offerte',
			'contacts' => 'Contatti',
		);
		if ( isset( $labels[ $item['key'] ] ) ) {
			$item['label'] = $labels[ $item['key'] ];
		}
	}
	unset( $item );

	$theme01 = array(
		'home' => array(
			'title' => 'Villa Rosa Resort - Una villa in Puglia',
			'hero_over' => 'Villa Rosa Resort & SPA - Conversano',
			'hero_h1' => 'La tua casa nel<br/>cuore della Puglia',
			'hero_sub' => 'Un oasi di benessere in un parco secolare, a pochi passi dal Castello normanno-svevo.',
			'scroll_label' => 'Scorri',
			'welcome_over' => 'Benvenuti',
			'welcome_h2' => 'Una villa eclettica anni Trenta,<br/>rinata come retreat',
			'welcome_p1' => 'Villa Rosa e la tua oasi di benessere. Immersa in un grande parco con alberi secolari, a pochi passi dal Castello normanno-svevo di Conversano, accoglie residenze eleganti e una storica villa eclettica degli anni Trenta.',
			'welcome_p2' => 'Ogni dettaglio e pensato per il comfort: privacy degli alloggi, cucina attrezzata, pergola esterna, piscina, palestra e una SPA elegante.',
			'entire_over' => 'Uso esclusivo',
			'entire_h2' => 'Prenota<br/>tutta la villa',
			'entire_p' => 'Un unica prenotazione, l intera proprieta: alloggi, parco secolare, piscina e pergole riservati solo a te e ai tuoi ospiti.',
			'entire_btn' => 'Scopri tutta la villa',
			'houses_over' => 'Le camere',
			'houses_h2' => 'Il tuo rifugio privato',
			'houses_p' => 'La nuova idea di lusso in vacanza e avere piu liberta: spazi riservati, design raffinato e ogni comfort per vivere la Puglia con calma.',
			'services_over' => 'Comfort & cura',
			'services_h2' => 'Servizi',
			'band_over' => 'Il modo pugliese di vivere',
			'band_h2' => 'Giornate lente, tavole lunghe<br/>e profumo di mare',
			'band_p' => 'Dai vicoli bianchi di Conversano ai trulli della Valle d Itria e alla costa turchese: la Puglia inizia dalla tua porta.',
			'spa_teaser_h3' => 'SPA & Wellness',
			'spa_teaser_p' => 'Risveglia mente e corpo. Il nostro centro wellness offre idromassaggio, bagno turco, sauna, docce emozionali, area relax, palestra e massaggi.',
			'experience_h3' => 'Esperienze pugliesi',
			'experience_p' => 'Costruiamo esperienze su misura: cooking class, degustazioni, tour privati e meraviglie del territorio.',
			'cta_over' => 'Il tuo rifugio ti aspetta',
			'cta_h2' => 'Scegli la tua camera<br/>a Villa Rosa',
			'cta_btn' => 'Esplora gli alloggi',
		),
		'villa' => array(
			'title' => 'Villa - Villa Rosa Resort',
			'over' => 'Villa Rosa Resort & SPA',
			'h1' => 'La Villa',
			'intro_over' => 'Il lusso di sentirsi a casa',
			'intro_h2' => 'In vacanza,<br/>come a casa',
			'intro_p' => 'Privacy, riservatezza, serenita e comfort a cinque stelle. Nel cuore di Conversano, avere una casa a disposizione e la soluzione ideale per chi cerca un soggiorno indipendente ed esclusivo.',
			'amenities_over' => 'Benessere, comfort e indipendenza',
			'amenities_h2' => 'Ogni dettaglio pensato per te',
			'amenities_p' => 'Una gamma di servizi per comfort e relax, progettata per garantire un esperienza unica.',
		),
		'houses' => array(
			'title' => 'Camere - Villa Rosa Resort',
			'over' => 'Villa Rosa Resort',
			'h1' => 'Camere',
			'intro_over' => 'Il tuo rifugio privato in Puglia',
			'intro_h2' => 'Spazi riservati,<br/>tutti per te',
			'intro_p' => 'Comfort, design raffinato e liberta: scegli l alloggio piu adatto al tuo soggiorno e vivi Villa Rosa con il ritmo che preferisci.',
			'gallery_over' => 'Uno sguardo dentro',
			'gallery_h2' => 'Camere e spazi',
			'gallery_p' => 'Camere, living, cucine e bagni: un assaggio degli interni che rendono ogni alloggio una casa privata.',
			'cta_over' => 'Tariffe e prenotazioni',
			'cta_h2' => 'Prezzi e condizioni',
			'cta_p' => 'Tariffe trasparenti, condizioni chiare e una calda accoglienza.',
			'cta_btn' => 'Vedi prezzi e condizioni',
		),
		'entire' => array(
			'title' => 'Tutta la Villa - Villa Rosa Resort',
			'over' => 'Uso esclusivo',
			'h1' => 'Tutta la Villa',
			'intro_over' => 'Tutta la proprieta, solo per te',
			'intro_h2' => 'Prenota<br/>Villa Rosa in esclusiva',
			'intro_p' => 'Alloggi, parco, piscina, pergole e aree comuni riservati a un unico gruppo, per vivere la liberta di una casa privata con l anima di una villa storica.',
			'cta_h2' => 'Richiedi disponibilita per tutta la villa',
		),
		'price' => array(
			'title' => 'Prezzi e condizioni - Villa Rosa Resort',
			'over' => 'Tariffe e termini',
			'h1' => 'Prezzi e condizioni',
			'intro_over' => 'Pianifica con chiarezza',
			'intro_h2' => 'Tariffe, check-in<br/>e condizioni',
			'intro_p' => 'Le tariffe variano in base a stagione, durata e tipologia di prenotazione. Contattaci per una proposta aggiornata.',
		),
		'spa' => array(
			'title' => 'SPA & Wellness - Villa Rosa Resort',
			'over' => 'Benessere',
			'h1' => 'SPA & Wellness',
			'intro_over' => 'Corpo e mente',
			'intro_h2' => 'Un tempo lento<br/>per rigenerarsi',
			'intro_p' => 'Bagno turco, sauna, idromassaggio, area relax, palestra e massaggi per una pausa di puro benessere.',
		),
		'experiences' => array(
			'title' => 'Esperienze - Villa Rosa Resort',
			'over' => 'Villa Rosa Resort & SPA',
			'h1' => 'Esperienze',
			'intro_over' => 'Su misura per te',
			'intro_h2' => 'Vivi la Puglia,<br/>a modo tuo',
			'intro_p' => 'Creiamo esperienze personalizzate per ogni ospite: sapori, tour, mare e momenti da ricordare.',
		),
		'surroundings' => array(
			'title' => 'Dintorni - Villa Rosa Resort',
			'over' => 'Conversano e oltre',
			'h1' => 'Dintorni',
			'intro_over' => 'Nel cuore della Puglia',
			'intro_h2' => 'Luoghi da scoprire<br/>giorno dopo giorno',
			'intro_p' => 'Conversano, Polignano, la Valle d Itria, Alberobello e Bari sono tutti a portata di mano.',
		),
		'offers' => array(
			'title' => 'Offerte - Villa Rosa Resort',
			'over' => 'Offerte',
			'h1' => 'Offerte',
			'intro_over' => 'Proposte speciali',
			'intro_h2' => 'Soggiorni pensati<br/>per ogni stagione',
			'intro_p' => 'Scopri promozioni, formule long stay e proposte wellness in periodi selezionati.',
		),
		'contacts' => array(
			'title' => 'Contatti - Villa Rosa Resort',
			'over' => 'Siamo qui per te',
			'h1' => 'Contatti',
			'intro_over' => 'Scrivici',
			'intro_h2' => 'Pianifica il tuo soggiorno',
			'intro_p' => 'Per disponibilita, preventivi o richieste speciali, il nostro team sara felice di aiutarti.',
		),
	);

	$theme02 = array(
		'home' => array(
			'title' => 'Masseria Le Cerase - Masseria del XVII secolo in Puglia',
			'hero_over' => 'Masseria Le Cerase - Conversano - Puglia',
			'hero_h1' => 'Una masseria<br/>del XVII secolo, solo tua',
			'hero_sub' => 'Una casa di campagna fortificata tra ulivi, ciliegi e vigneti: da vivere in esclusiva, fino a dieci ospiti.',
			'welcome_over' => 'Benvenuti',
			'welcome_h2' => 'Secoli di pietra,<br/>circondati dalla campagna',
			'welcome_p1' => 'Masseria Le Cerase e una masseria fortificata del Seicento nella campagna di Conversano, nel cuore della Puglia.',
			'welcome_p2' => 'Restaurata nel rispetto della sua storia, accoglie un solo gruppo alla volta: sale voltate, letti in ferro battuto, piscina tra gli ulivi e il silenzio della campagna.',
			'whole_h2' => 'Oppure scegli<br/>tutta la masseria',
			'whole_p' => 'Un unica prenotazione, l intera proprieta riservata al tuo gruppo.',
			'whole_btn' => 'Scopri tutta la masseria',
			'houses_over' => 'Le camere',
			'houses_h2' => 'Dormire sotto le volte',
			'houses_p' => 'Camere matrimoniali sotto antiche volte in pietra, con lino caldo, dettagli d epoca e quiete di campagna.',
		),
		'villa' => array( 'title' => 'Masseria - Masseria Le Cerase', 'h1' => 'La Masseria', 'intro_over' => 'L anima della proprieta', 'intro_h2' => 'Secoli di pietra,<br/>restaurati con cura', 'intro_p' => 'Una casa di campagna fortificata nella campagna di Conversano, circondata da ulivi, ciliegi e vigneti.' ),
		'house' => array( 'title' => 'Camere - Masseria Le Cerase', 'h1' => 'Camere', 'intro_over' => 'Dormire sotto le volte', 'intro_h2' => 'Una camera quieta<br/>nella masseria', 'intro_p' => 'Camere matrimoniali sotto antiche volte in pietra, arredate con lino caldo e dettagli d epoca.' ),
		'whole' => array( 'title' => 'Tutta la Masseria - Masseria Le Cerase', 'h1' => 'Tutta la Masseria', 'intro_over' => 'Tutta la proprieta, solo tua', 'intro_h2' => 'Affitta tutta<br/>Masseria Le Cerase', 'intro_p' => 'Camere, sale voltate, cucina, piscina e giardini riservati esclusivamente al tuo gruppo.' ),
		'price' => array( 'title' => 'Prezzi e condizioni - Masseria Le Cerase', 'h1' => 'Prezzi e condizioni', 'intro_over' => 'Condizioni chiare', 'intro_h2' => 'Pianifica il soggiorno<br/>con chiarezza', 'intro_p' => 'Tariffe e condizioni variano per stagione, durata e tipologia di prenotazione.' ),
		'spa' => array( 'title' => 'SPA & Wellness - Masseria Le Cerase', 'h1' => 'SPA & Wellness', 'intro_over' => 'Benessere lento', 'intro_h2' => 'Rituali quieti<br/>in campagna', 'intro_p' => 'Momenti wellness e massaggi possono essere organizzati intorno al tuo soggiorno.' ),
		'experiences' => array( 'title' => 'Esperienze - Masseria Le Cerase', 'h1' => 'Esperienze', 'intro_over' => 'Vivi la Puglia a modo tuo', 'intro_h2' => 'Momenti costruiti<br/>intorno a te', 'intro_p' => 'Cooking class, degustazioni, tour privati e giornate al mare possono essere organizzati su misura.' ),
		'surroundings' => array( 'title' => 'Dintorni - Masseria Le Cerase', 'h1' => 'Dintorni', 'intro_over' => 'Nel cuore della Puglia', 'intro_h2' => 'Una regione<br/>di cui innamorarsi', 'intro_p' => 'Conversano, Polignano, Alberobello, la Valle d Itria e Bari sono facilmente raggiungibili.' ),
		'offers' => array( 'title' => 'Offerte - Masseria Le Cerase', 'h1' => 'Offerte', 'intro_over' => 'Proposte stagionali', 'intro_h2' => 'Soggiorni speciali<br/>in campagna', 'intro_p' => 'Le offerte possono essere adattate al periodo, alla durata e al tipo di prenotazione.' ),
		'contacts' => array( 'title' => 'Contatti - Masseria Le Cerase', 'h1' => 'Contatti', 'intro_over' => 'Scrivici', 'intro_h2' => 'Pianifica soggiorno o evento', 'intro_p' => 'Per disponibilita, preventivi o richieste speciali, saremo felici di aiutarti.' ),
	);

	$pack = 'theme02' === sbt_active_subtheme_key() ? $theme02 : $theme01;
	$C = array_replace_recursive( $C, $pack );
}

function sbt_bootstrap_content( &$IMG, &$SITE, &$NAV, &$C, &$HOUSE_CARDS = array(), &$SERVICES = array(), &$TEXT = array(), &$GALLERY = array(), &$WEDDING_GALLERY = array(), &$EXPERIENCES = array() ) {
	$overrides = sbt_active_overrides();

	if ( in_array( sbt_active_subtheme_key(), array( 'theme01', 'theme02' ), true ) ) {
		$active_subtheme = sbt_active_subtheme_key();
		foreach ( sbt_custom_house_pages( $active_subtheme ) as $index => $house_page ) {
			if ( empty( $house_page['content_key'] ) ) {
				continue;
			}

			if ( ! isset( $C[ $house_page['content_key'] ] ) ) {
				$template_key = sbt_unit_content_key( $index + 1 );
				$fallback = 'theme02' === $active_subtheme ? ( $C['house'] ?? array() ) : ( $C['house4'] ?? array() );
				$C[ $house_page['content_key'] ] = sbt_custom_house_default_content( $house_page['title'], $C[ $template_key ] ?? $fallback );
			}
		}
	}

	sbt_apply_default_language_pack( $SITE, $NAV, $C, $TEXT );

	sbt_apply_flat_overrides( $IMG, 'IMG', $overrides );
	sbt_apply_flat_overrides( $SITE, 'SITE', $overrides );
	sbt_apply_flat_overrides( $NAV, 'NAV', $overrides );
	sbt_apply_flat_overrides( $C, 'C', $overrides );
	sbt_apply_flat_overrides( $HOUSE_CARDS, 'HOUSE_CARDS', $overrides );
	sbt_apply_flat_overrides( $SERVICES, 'SERVICES', $overrides );
	sbt_apply_flat_overrides( $TEXT, 'TEXT', $overrides );
	sbt_apply_flat_overrides( $GALLERY, 'GALLERY', $overrides );
	sbt_apply_flat_overrides( $WEDDING_GALLERY, 'WEDDING_GALLERY', $overrides );
	sbt_apply_flat_overrides( $EXPERIENCES, 'EXPERIENCES', $overrides );
	sbt_normalize_theme01_seed_article_card_urls( $C );

	sbt_apply_unit_structure( $SITE, $NAV, $C, $HOUSE_CARDS, $TEXT );
	sbt_filter_disabled_nav_items( $NAV );
	sbt_rewrite_content_urls( $NAV );
	sbt_rewrite_content_urls( $C );
	sbt_rewrite_content_urls( $HOUSE_CARDS );
	sbt_rewrite_content_urls( $EXPERIENCES );
}

function sbt_rewrite_content_urls( &$value ) {
	if ( ! is_array( $value ) ) {
		return;
	}

	foreach ( $value as $key => &$child ) {
		if ( is_string( $child ) && preg_match( '/(^|_)url$/', (string) $key ) ) {
			$child = sbt_url( sbt_editable_url_value( $child ) );
		} else {
			sbt_rewrite_content_urls( $child );
		}
	}
}

function sbt_visual_meta_editor_enabled() {
	return 'visual' === sbt_edit_mode() && is_user_logged_in() && current_user_can( 'edit_theme_options' ) && ! is_admin();
}

function sbt_visual_meta_editor_enqueue_media() {
	if ( sbt_visual_meta_editor_enabled() && function_exists( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
}
add_action( 'wp_enqueue_scripts', 'sbt_visual_meta_editor_enqueue_media' );

function sbt_visual_meta_editor_allowed_roots() {
	return array( 'C', 'TEXT', 'SITE', 'NAV', 'HOUSE_CARDS', 'SERVICES', 'EXPERIENCES' );
}

function sbt_visual_meta_editor_allowed_path( $path ) {
	$path = (string) $path;
	if ( ! preg_match( '/^[A-Za-z0-9_.-]+$/', $path ) ) {
		return false;
	}

	$root = strtok( $path, '.' );
	return in_array( $root, sbt_visual_meta_editor_allowed_roots(), true );
}

function sbt_vfe( $path, $value, $args = array() ) {
	if ( ! sbt_visual_meta_editor_enabled() || ! sbt_visual_meta_editor_allowed_path( $path ) ) {
		return $value;
	}

	$defaults = array(
		'multiline' => false,
		'context'   => '',
		'type'      => 'text',
	);
	$args = wp_parse_args( $args, $defaults );
	$tag = $args['multiline'] ? 'span' : 'span';

	return '<' . $tag . ' class="sbt-vfe-field" data-sbt-vfe-path="' . esc_attr( $path ) . '" data-sbt-vfe-multiline="' . ( $args['multiline'] ? '1' : '0' ) . '" data-sbt-vfe-type="' . esc_attr( $args['type'] ) . '" data-sbt-vfe-value="' . esc_attr( $value ) . '" data-sbt-vfe-context="' . esc_attr( $args['context'] ) . '">' . $value . '<button type="button" class="sbt-vfe-edit" aria-label="Edit field">&#9998;</button></' . $tag . '>';
}

function sbt_vfe_control( $path, $value, $label = 'Edit', $type = 'text' ) {
	if ( ! sbt_visual_meta_editor_enabled() || ! sbt_visual_meta_editor_allowed_path( $path ) ) {
		return '';
	}

	if ( 'url' === $type ) {
		$value = sbt_editable_url_value( $value );
	}

	return '<span class="sbt-vfe-field sbt-vfe-control" data-sbt-vfe-path="' . esc_attr( $path ) . '" data-sbt-vfe-multiline="0" data-sbt-vfe-type="' . esc_attr( $type ) . '" data-sbt-vfe-value="' . esc_attr( $value ) . '"><span class="sbt-vfe-control-label">' . esc_html( $label ) . '</span><button type="button" class="sbt-vfe-edit" aria-label="' . esc_attr( $label ) . '">&#9998;</button></span>';
}

function sbt_vfe_is_gallery_item_path( $path ) {
	return (bool) preg_match( '/(?:^|\.)(?:gallery|[A-Za-z0-9_]*_gallery)\.\d+$/', (string) $path );
}

function sbt_vfe_image( $path, $src, $attrs = array() ) {
	$attr_string = '';
	foreach ( $attrs as $name => $value ) {
		$attr_string .= ' ' . esc_attr( $name ) . '="' . esc_attr( $value ) . '"';
	}

	if ( ! sbt_visual_meta_editor_enabled() || ! sbt_visual_meta_editor_allowed_path( $path ) ) {
		return '<img src="' . esc_url( $src ) . '"' . $attr_string . ' />';
	}

	if ( sbt_vfe_is_gallery_item_path( $path ) ) {
		$parent_path = preg_replace( '/\.\d+$/', '', (string) $path );
		return '<img src="' . esc_url( $src ) . '"' . $attr_string . ' data-sbt-vfe-gallery-item="1" data-sbt-vfe-path="' . esc_attr( $path ) . '" data-sbt-vfe-gallery-path="' . esc_attr( $parent_path ) . '" />';
	}

	$image = '<img src="' . esc_url( $src ) . '"' . $attr_string . ' />';
	return '<span class="sbt-vfe-image-wrap">' . $image . sbt_vfe_control( $path, $src, 'Immagine', 'image' ) . '</span>';
}

function sbt_vfe_background_style( $path, $url ) {
	$style = "background-image:url('" . esc_url( $url ) . "');";
	if ( ! sbt_visual_meta_editor_enabled() || ! sbt_visual_meta_editor_allowed_path( $path ) ) {
		return $style;
	}

	return $style . ' position:relative;';
}

function sbt_visual_meta_editor_assets() {
	if ( ! sbt_visual_meta_editor_enabled() ) {
		return;
	}

	?>
	<style>
		.sbt-vfe-field { outline:1px dashed transparent; outline-offset:4px; position:relative; transition:outline-color .15s ease; }
		.sbt-vfe-field:hover { outline-color:rgba(34,113,177,.75); }
		.sbt-vfe-edit { align-items:center; background:#2271b1; border:0; border-radius:999px; color:#fff; cursor:pointer; display:inline-flex; font-size:12px; height:24px; justify-content:center; line-height:1; margin-left:8px; padding:0; vertical-align:middle; width:24px; }
		.sbt-vfe-control { align-items:center; background:rgba(34,113,177,.94); border-radius:999px; color:#fff; display:inline-flex; font:600 11px/1 system-ui,sans-serif; gap:6px; margin:8px 0; outline-color:rgba(34,113,177,.75); padding:3px 4px 3px 10px; text-transform:none; }
		.sbt-vfe-control .sbt-vfe-edit { background:#fff; color:#2271b1; margin-left:0; }
		.sbt-vfe-image-wrap { display:block; position:relative; }
		.sbt-vfe-image-wrap > .sbt-vfe-control { left:10px; position:absolute; top:10px; z-index:5; }
		.sbt-vfe-gallery-scope { position:relative; }
		.sbt-vfe-gallery-edit { align-items:center; background:rgba(34,113,177,.96); border:0; border-radius:999px; color:#fff; cursor:pointer; display:inline-flex; font:600 12px/1 system-ui,sans-serif; gap:6px; padding:8px 11px; position:absolute; right:10px; top:10px; z-index:8; }
		.sbt-vfe-modal { align-items:center; background:rgba(0,0,0,.45); bottom:0; display:none; justify-content:center; left:0; padding:24px; position:fixed; right:0; top:0; z-index:999999; }
		.sbt-vfe-modal.is-open { display:flex; }
		.sbt-vfe-dialog { background:#fff; border-radius:8px; box-shadow:0 18px 60px rgba(0,0,0,.25); color:#1d2327; max-width:620px; padding:18px; width:min(620px,100%); }
		.sbt-vfe-dialog h3 { color:#1d2327; font:600 18px/1.25 system-ui,sans-serif; margin:0 0 12px; }
		.sbt-vfe-dialog textarea, .sbt-vfe-dialog input, .sbt-vfe-dialog select { border:1px solid #8c8f94; border-radius:4px; box-sizing:border-box; color:#1d2327; font:400 15px/1.45 system-ui,sans-serif; min-height:44px; padding:10px; width:100%; }
		.sbt-vfe-dialog textarea { min-height:150px; resize:vertical; }
		.sbt-vfe-url-hint { color:#646970; font:400 12px/1.45 system-ui,sans-serif; margin:8px 0 0; }
		.sbt-vfe-preview { display:grid; gap:8px; margin:0 0 10px; }
		.sbt-vfe-preview img { border:1px solid #dcdcde; border-radius:6px; height:120px; object-fit:cover; width:180px; }
		.sbt-vfe-media-actions { display:flex; flex-wrap:wrap; gap:8px; margin:10px 0; }
		.sbt-vfe-media-actions button { border:1px solid #8c8f94; border-radius:4px; cursor:pointer; font:600 13px/1 system-ui,sans-serif; padding:8px 11px; }
		.sbt-vfe-actions { display:flex; gap:8px; justify-content:flex-end; margin-top:14px; }
		.sbt-vfe-actions button { border:1px solid #8c8f94; border-radius:4px; cursor:pointer; font:600 14px/1 system-ui,sans-serif; padding:9px 13px; }
		.sbt-vfe-save { background:#2271b1; border-color:#2271b1!important; color:#fff; }
	</style>
	<script>
	(function(){
		var config = {
			ajaxUrl: <?php echo wp_json_encode( admin_url( 'admin-ajax.php' ) ); ?>,
			nonce: <?php echo wp_json_encode( wp_create_nonce( 'sbt_vfe_save' ) ); ?>,
			postId: <?php echo wp_json_encode( get_queried_object_id() ); ?>,
			language: <?php echo wp_json_encode( sbt_current_content_language() ); ?>,
			linkTargets: <?php echo wp_json_encode( sbt_link_target_options() ); ?>
		};
		var activeField = null;
		var modal = document.createElement('div');
		modal.className = 'sbt-vfe-modal';
		modal.innerHTML = '<div class="sbt-vfe-dialog" role="dialog" aria-modal="true"><h3>Edit content</h3><div class="sbt-vfe-input"></div><div class="sbt-vfe-actions"><button type="button" class="sbt-vfe-cancel">Cancel</button><button type="button" class="sbt-vfe-save">Save</button></div></div>';
		document.body.appendChild(modal);

		function fieldHtml(field){
			if (field.hasAttribute('data-sbt-vfe-value')) {
				return field.getAttribute('data-sbt-vfe-value') || '';
			}
			var clone = field.cloneNode(true);
			var button = clone.querySelector('.sbt-vfe-edit');
			if (button) button.remove();
			var label = clone.querySelector('.sbt-vfe-control-label');
			if (label) label.remove();
			return clone.innerHTML.trim();
		}

		function galleryParentPath(path){
			return /\.\d+$/.test(path || '') ? path.replace(/\.\d+$/, '') : '';
		}

		function galleryPathFromElement(element){
			return element.getAttribute('data-sbt-vfe-gallery-path') || galleryParentPath(element.getAttribute('data-sbt-vfe-path'));
		}

		function closestGalleryUrls(field){
			var scope = field.closest('.sbtw-media-carousel,.media-carousel,.sbtw-mosaic,.mosaic,.sbtw-gallery,.gallery,.sbtw-house,.house,.sbtw-feature,.feature,.sbtw-page-hero,.page-hero') || document;
			var urls = [];
			scope.querySelectorAll('img').forEach(function(img){
				var src = img.getAttribute('src');
				if (src && urls.indexOf(src) === -1) urls.push(src);
			});
			return urls;
		}

		function renderImageInput(wrap, value, galleryPath){
			wrap.innerHTML = '<div class="sbt-vfe-preview"></div><input type="url"><div class="sbt-vfe-media-actions"><button type="button" class="sbt-vfe-pick-image">Choose / upload image</button></div>';
			wrap.querySelector('input').value = value;
			updateImagePreview(wrap, value);
		}

		function renderUrlInput(wrap, value){
			var options = '<option value="">Direct / external link</option>';
			Object.keys(config.linkTargets || {}).forEach(function(url){
				options += '<option value="' + url.replace(/"/g, '&quot;') + '"' + (url === value ? ' selected' : '') + '>' + config.linkTargets[url] + ' - ' + url + '</option>';
			});
			var isKnown = !!(config.linkTargets && config.linkTargets[value]);
			wrap.innerHTML = '<select class="sbt-vfe-url-select">' + options + '</select><input type="url" class="sbt-vfe-url-input" placeholder="https://example.com/page/"><p class="sbt-vfe-url-hint">Choose a page/post or enter a direct https:// URL.</p>';
			wrap.querySelector('.sbt-vfe-url-input').value = isKnown ? '' : value;
		}

		function updateImagePreview(wrap, value){
			var preview = wrap.querySelector('.sbt-vfe-preview');
			if (!preview) return;
			preview.innerHTML = value ? '<img alt="" src="' + value.replace(/"/g, '&quot;') + '">' : '<p>No image selected.</p>';
		}

		function openImageFrame(wrap){
			if (!window.wp || !wp.media) return;
			var frame = wp.media({ title: 'Select image', multiple: false, library: { type: 'image' } });
			frame.on('select', function(){
				var item = frame.state().get('selection').first().toJSON();
				var input = wrap.querySelector('input');
				input.value = item.url;
				updateImagePreview(wrap, item.url);
			});
			frame.open();
		}

		function addGalleryEditors(){
			document.querySelectorAll('.sbtw-gallery,.gallery,.sbtw-mosaic,.mosaic,.sbtw-media-carousel,.media-carousel').forEach(function(scope){
				if (scope.querySelector('.sbt-vfe-gallery-edit')) return;
				var firstField = scope.querySelector('img[data-sbt-vfe-gallery-item][data-sbt-vfe-gallery-path]');
				if (!firstField) return;
				scope.classList.add('sbt-vfe-gallery-scope');
				var button = document.createElement('button');
				button.type = 'button';
				button.className = 'sbt-vfe-gallery-edit';
				button.innerHTML = '&#9998; Gallery';
				button.setAttribute('aria-label', 'Edit full gallery');
				button.addEventListener('click', function(event){
					event.preventDefault();
					event.stopPropagation();
					openGalleryFrame(firstField);
				});
				scope.appendChild(button);
			});
		}

		function preloadGallerySelection(frame, urls){
			if (!urls.length) return;
			var data = new FormData();
			data.append('action', 'sbt_vfe_gallery_attachment_ids');
			data.append('nonce', config.nonce);
			urls.forEach(function(url){
				data.append('urls[]', url);
			});
			fetch(config.ajaxUrl, { method:'POST', credentials:'same-origin', body:data })
				.then(function(response){ return response.json(); })
				.then(function(json){
					if (!json || !json.success || !json.data || !json.data.ids) return;
					var selection = frame.state().get('selection');
					json.data.ids.forEach(function(id){
						var attachment = wp.media.attachment(id);
						attachment.fetch();
						selection.add(attachment);
					});
				});
		}

		function openGalleryFrame(field){
			if (!window.wp || !wp.media) return;
			var parentPath = galleryPathFromElement(field);
			if (!parentPath) return;
			var galleryUrls = closestGalleryUrls(field);
			var frame = wp.media({
				title: 'Edit full gallery',
				button: { text: 'Use these images' },
				multiple: true,
				library: { type: 'image' }
			});
			frame.on('open', function(){
				preloadGallerySelection(frame, galleryUrls);
			});
			frame.on('select', function(){
				var urls = [];
				frame.state().get('selection').each(function(attachment){
					var item = attachment.toJSON();
					if (item.url) urls.push(item.url);
				});
				saveVisualField(field, parentPath, urls.join("\n"), 'gallery', true);
			});
			frame.open();
		}

		function refreshVisualField(field, value, saveType, reloadAfterSave){
			if (field.classList.contains('sbt-vfe-control')) {
				field.setAttribute('data-sbt-vfe-value', value);
				if (saveType === 'image') {
					var img = field.closest('.sbt-vfe-image-wrap') ? field.closest('.sbt-vfe-image-wrap').querySelector('img') : null;
					if (img) img.setAttribute('src', value);
				}
			} else {
				field.setAttribute('data-sbt-vfe-value', value);
				field.innerHTML = value + '<button type="button" class="sbt-vfe-edit" aria-label="Edit field">&#9998;</button>';
			}
			modal.classList.remove('is-open');
			activeField = null;
			if (reloadAfterSave) {
				window.location.reload();
			}
		}

		function saveVisualField(field, path, value, saveType, reloadAfterSave){
			var data = new FormData();
			data.append('action', 'sbt_vfe_save');
			data.append('nonce', config.nonce);
			data.append('post_id', config.postId || 0);
			data.append('language', config.language || 'en');
			data.append('path', path || field.getAttribute('data-sbt-vfe-path'));
			data.append('value', value);
			data.append('type', saveType || field.getAttribute('data-sbt-vfe-type') || 'text');
			fetch(config.ajaxUrl, { method:'POST', credentials:'same-origin', body:data })
				.then(function(response){ return response.json(); })
				.then(function(json){
					if (!json || !json.success) throw new Error(json && json.data ? json.data : 'Save error');
					refreshVisualField(field, json.data.value, saveType, reloadAfterSave);
				})
				.catch(function(error){ alert(error.message); });
		}

		document.addEventListener('click', function(event){
			var button = event.target.closest('.sbt-vfe-edit');
			if (!button) return;
			event.preventDefault();
			event.stopPropagation();
			activeField = button.closest('.sbt-vfe-field');
			var multiline = activeField.getAttribute('data-sbt-vfe-multiline') === '1';
			var type = activeField.getAttribute('data-sbt-vfe-type') || 'text';
			var wrap = modal.querySelector('.sbt-vfe-input');
			var value = fieldHtml(activeField);
			var parentGallery = type === 'image' ? galleryParentPath(activeField.getAttribute('data-sbt-vfe-path')) : '';
			if (type === 'image') {
				renderImageInput(wrap, value, parentGallery);
			} else if (type === 'url') {
				renderUrlInput(wrap, value);
			} else {
				wrap.innerHTML = multiline ? '<textarea></textarea>' : '<input type="text">';
				wrap.firstElementChild.value = value;
			}
			modal.classList.add('is-open');
			(wrap.querySelector('textarea,input') || wrap.firstElementChild).focus();
		}, true);

		modal.addEventListener('click', function(event){
			if (event.target.closest('.sbt-vfe-pick-image')) {
				event.preventDefault();
				openImageFrame(modal.querySelector('.sbt-vfe-input'));
			}
		});

		modal.addEventListener('change', function(event){
			if (!event.target.closest('.sbt-vfe-url-select')) return;
			var wrap = modal.querySelector('.sbt-vfe-input');
			var input = wrap.querySelector('.sbt-vfe-url-input');
			if (event.target.value && input) input.value = '';
		});

		modal.addEventListener('input', function(event){
			if (!event.target.closest('.sbt-vfe-url-input')) return;
			var select = modal.querySelector('.sbt-vfe-url-select');
			if (select) select.value = '';
		});

		modal.querySelector('.sbt-vfe-cancel').addEventListener('click', function(){
			modal.classList.remove('is-open');
			activeField = null;
		});

		modal.querySelector('.sbt-vfe-save').addEventListener('click', function(){
			if (!activeField) return;
			var type = activeField.getAttribute('data-sbt-vfe-type') || 'text';
			var value = '';
			if (type === 'url') {
				var selected = modal.querySelector('.sbt-vfe-url-select');
				var direct = modal.querySelector('.sbt-vfe-url-input');
				value = selected && selected.value ? selected.value : (direct ? direct.value : '');
			} else {
				var input = modal.querySelector('textarea,input');
				value = input ? input.value : '';
			}
			saveVisualField(activeField, activeField.getAttribute('data-sbt-vfe-path'), value, type, false);
		});

		addGalleryEditors();
	})();
	</script>
	<?php
}
add_action( 'wp_footer', 'sbt_visual_meta_editor_assets', 30 );

function sbt_visual_meta_editor_save() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_send_json_error( 'Permessi insufficienti.' );
	}

	check_ajax_referer( 'sbt_vfe_save', 'nonce' );

	$path = isset( $_POST['path'] ) ? sanitize_text_field( wp_unslash( $_POST['path'] ) ) : '';
	if ( ! sbt_visual_meta_editor_allowed_path( $path ) ) {
		wp_send_json_error( 'Campo non autorizzato.' );
	}

	$post_id = isset( $_POST['post_id'] ) ? absint( $_POST['post_id'] ) : 0;
	$type = isset( $_POST['type'] ) ? sanitize_key( wp_unslash( $_POST['type'] ) ) : 'text';
	$raw_value = isset( $_POST['value'] ) ? wp_unslash( $_POST['value'] ) : '';
	if ( 'url' === $type ) {
		$value = sbt_sanitize_editable_url( $raw_value );
	} elseif ( 'image' === $type ) {
		$value = esc_url_raw( $raw_value );
	} elseif ( 'gallery' === $type ) {
		$urls = preg_split( '/\r\n|\r|\n/', (string) $raw_value );
		$urls = array_filter( array_map( 'esc_url_raw', array_map( 'trim', $urls ) ) );
		$value = implode( "\n", $urls );
	} else {
		$value = wp_kses_post( $raw_value );
	}
	$options = sbt_get_options();
	$key = sbt_active_subtheme_key();
	$language = isset( $_POST['language'] ) ? sanitize_key( wp_unslash( $_POST['language'] ) ) : sbt_current_content_language();
	$language = in_array( $language, sbt_enabled_languages(), true ) ? $language : 'en';
	if ( $post_id ) {
		update_post_meta( $post_id, '_sbt_visual_meta_' . sanitize_key( str_replace( '.', '_', $path ) ), $value );
	}

	if ( ! isset( $options['overrides'][ $key ] ) || ! is_array( $options['overrides'][ $key ] ) ) {
		$options['overrides'][ $key ] = array();
	}
	if ( ! isset( $options['overrides'][ $key ]['_languages'] ) || ! is_array( $options['overrides'][ $key ]['_languages'] ) ) {
		$options['overrides'][ $key ]['_languages'] = array();
	}
	if ( ! isset( $options['overrides'][ $key ]['_languages'][ $language ] ) || ! is_array( $options['overrides'][ $key ]['_languages'][ $language ] ) ) {
		$options['overrides'][ $key ]['_languages'][ $language ] = array();
	}

	$options['overrides'][ $key ]['_languages'][ $language ][ $path ] = $value;
	update_option( SBT_OPTION, $options );

	wp_send_json_success( array( 'value' => $value ) );
}
add_action( 'wp_ajax_sbt_vfe_save', 'sbt_visual_meta_editor_save' );

function sbt_visual_meta_editor_gallery_attachment_ids() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_send_json_error( 'Permessi insufficienti.' );
	}

	check_ajax_referer( 'sbt_vfe_save', 'nonce' );

	$raw_urls = isset( $_POST['urls'] ) && is_array( $_POST['urls'] ) ? wp_unslash( $_POST['urls'] ) : array();
	$ids = array();

	foreach ( $raw_urls as $raw_url ) {
		$url = esc_url_raw( $raw_url );
		if ( '' === $url ) {
			continue;
		}

		$id = attachment_url_to_postid( $url );
		if ( ! $id ) {
			$path = wp_parse_url( $url, PHP_URL_PATH );
			$marker = '/syncbooking-theme/';
			if ( is_string( $path ) && false !== strpos( $path, $marker ) ) {
				$relative = ltrim( substr( $path, strpos( $path, $marker ) + strlen( $marker ) ), '/' );
				$matches = get_posts(
					array(
						'post_type'      => 'attachment',
						'post_status'    => 'inherit',
						'posts_per_page' => 1,
						'fields'         => 'ids',
						'meta_key'       => '_sbt_bundled_media_path',
						'meta_value'     => wp_normalize_path( $relative ),
					)
				);
				$id = $matches ? absint( $matches[0] ) : 0;
			}
		}

		if ( $id ) {
			$ids[] = $id;
		}
	}

	wp_send_json_success( array( 'ids' => array_values( array_unique( array_map( 'absint', $ids ) ) ) ) );
}
add_action( 'wp_ajax_sbt_vfe_gallery_attachment_ids', 'sbt_visual_meta_editor_gallery_attachment_ids' );

function sbt_admin_menu() {
	add_theme_page( 'SyncBooking Theme', 'SyncBooking Theme', 'edit_theme_options', 'syncbooking-theme', 'sbt_render_admin_page' );
}
add_action( 'admin_menu', 'sbt_admin_menu' );

function sbt_admin_shared_styles() {
	?>
	<style>
		.sbt-page-editor-layout { display:grid; gap:18px; }
		.sbt-preview-section { border:1px solid #dcdcde; border-radius:8px; margin:0 0 18px; padding:16px; }
		.sbt-preview-section.is-active { border-color:#2271b1; box-shadow:0 0 0 1px #2271b1; }
		.sbt-preview-section.is-active .sbt-section-title { color:#2271b1; }
		.sbt-preview-section__editor { min-width:0; }
		.sbt-editor-block { background:#fff; border:1px solid #dcdcde; border-radius:8px; margin:12px 0 18px; padding:14px 16px; }
		.sbt-editor-block details { background:#f6f7f7; border:1px solid #dcdcde; border-radius:8px; margin:10px 0; padding:10px 12px; }
		.sbt-editor-block summary { cursor:pointer; }
		.sbt-section-title { align-items:baseline; display:flex; flex-wrap:wrap; gap:8px; justify-content:space-between; }
		.sbt-section-title code, .sbt-field-path { color:#646970; font-size:12px; font-weight:400; }
		.sbt-section-tabs { display:flex; gap:6px; justify-content:flex-end; margin:0 0 -6px; position:relative; z-index:1; }
		.sbt-section-tabs .button { min-height:28px; padding:2px 10px; }
		.sbt-editor-field { margin:12px 0; }
		.sbt-editor-field label { display:block; font-weight:600; margin-bottom:5px; }
		.sbt-editor-field code { color:#646970; font-weight:400; }
		.sbt-editor-field input, .sbt-editor-field textarea { width:100%; }
		.sbt-media-control { display:grid; gap:8px; }
		.sbt-media-preview img { background:#f6f7f7; border:1px solid #dcdcde; border-radius:6px; height:96px; object-fit:cover; width:140px; }
		.sbt-media-hint { color:#646970; font-size:12px; margin:0; }
		.sbt-gallery-list { display:grid; gap:10px; grid-template-columns:repeat(auto-fill,minmax(120px,1fr)); margin:10px 0; }
		.sbt-gallery-item { background:#fff; border:1px solid #dcdcde; border-radius:8px; cursor:move; overflow:hidden; position:relative; }
		.sbt-gallery-item img { aspect-ratio:4/3; display:block; object-fit:cover; width:100%; }
		.sbt-gallery-remove { position:absolute; right:6px; top:6px; }
		.sbt-gallery-empty { border:1px dashed #c3c4c7; border-radius:8px; color:#646970; padding:14px; text-align:center; }
		.sbt-gallery-actions, .sbt-media-actions { display:flex; flex-wrap:wrap; gap:8px; }
		.sbt-link-control { display:grid; gap:8px; }
		.sbt-link-hint { color:#646970; font-size:12px; }
		.sbt-assets-progress { background:#f0f0f1; border-radius:999px; height:10px; margin:12px 0 6px; overflow:hidden; }
		.sbt-assets-progress__bar { background:#2271b1; height:100%; transition:width .2s ease; width:0; }
		.sbt-assets-import-message { min-height:20px; }
		@media (max-width: 1180px) { .sbt-page-editor-layout { display:block; } }
	</style>
	<?php
}
add_action( 'admin_head', 'sbt_admin_shared_styles' );

function sbt_hide_standard_page_editor() {
	$screen = get_current_screen();
	if ( ! $screen || 'page' !== $screen->post_type || 'post' !== $screen->base ) {
		return;
	}

	$post_id = isset( $_GET['post'] ) ? absint( $_GET['post'] ) : 0;
	if ( ! sbt_is_theme_page_post( $post_id ) ) {
		return;
	}
	?>
	<style>
		#postdivrich { display:none; }
	</style>
	<?php
}
add_action( 'admin_head-post.php', 'sbt_hide_standard_page_editor' );

function sbt_enqueue_admin_assets( $hook ) {
	if ( 'appearance_page_syncbooking-theme' !== $hook && 'post.php' !== $hook && 'post-new.php' !== $hook ) {
		return;
	}

	wp_enqueue_media();
	wp_enqueue_script( 'jquery-ui-sortable' );
}
add_action( 'admin_enqueue_scripts', 'sbt_enqueue_admin_assets' );

function sbt_admin_footer_scripts() {
	?>
	<script>
	(function($){
		function syncGallery($control){
			var urls = [];
			$control.find('.sbt-gallery-item').each(function(){
				urls.push($(this).data('url'));
			});
			$control.find('.sbt-gallery-value').val(urls.join("\n"));
			$control.find('.sbt-gallery-empty').toggle(urls.length === 0);
		}

		function renderGalleryItem(url){
			return $('<div class="sbt-gallery-item" />')
				.attr('data-url', url)
				.append($('<button type="button" class="button-link-delete sbt-gallery-remove">x</button>'))
				.append($('<img alt="">').attr('src', url));
		}

		$(function(){
			$('.sbt-gallery-list').sortable({
				update: function(){ syncGallery($(this).closest('.sbt-gallery-control')); }
			});

			$(document).on('mouseenter focusin click', '.sbt-preview-section', function(){
				$('.sbt-preview-section').removeClass('is-active');
				$(this).addClass('is-active');
			});

			$(document).on('click', '.sbt-media-pick', function(e){
				e.preventDefault();
				var $control = $(this).closest('.sbt-media-control');
				var frame = wp.media({ title: 'Select image', multiple: false, library: { type: 'image' } });
				frame.on('select', function(){
					var item = frame.state().get('selection').first().toJSON();
					var url = item.url;
					$control.find('.sbt-media-value').val(url);
					$control.find('.sbt-media-preview').html($('<img alt="">').attr('src', url));
					$control.find('.sbt-media-hint').text('Image selected.');
					$control.find('.sbt-media-pick').text('Replace image');
				});
				frame.open();
			});

			$(document).on('click', '.sbt-media-clear', function(e){
				e.preventDefault();
				var $control = $(this).closest('.sbt-media-control');
				$control.find('.sbt-media-value').val('');
				$control.find('.sbt-media-preview').empty();
				$control.find('.sbt-media-hint').text('No image selected.');
				$control.find('.sbt-media-pick').text('Choose image');
			});

			$(document).on('click', '.sbt-gallery-pick', function(e){
				e.preventDefault();
				var $control = $(this).closest('.sbt-gallery-control');
				var frame = wp.media({ title: 'Seleziona immagini', multiple: true, library: { type: 'image' } });
				frame.on('select', function(){
					frame.state().get('selection').each(function(attachment){
						var item = attachment.toJSON();
						$control.find('.sbt-gallery-list').append(renderGalleryItem(item.url));
					});
					syncGallery($control);
				});
				frame.open();
			});

			$(document).on('click', '.sbt-gallery-remove', function(e){
				e.preventDefault();
				var $control = $(this).closest('.sbt-gallery-control');
				$(this).closest('.sbt-gallery-item').remove();
				syncGallery($control);
			});

			$(document).on('change', '.sbt-link-select', function(){
				var $control = $(this).closest('.sbt-link-control');
				var value = $(this).val();
				if (value) {
					$control.find('.sbt-link-direct').val('');
					$control.find('.sbt-link-value').val(value);
				} else {
					$control.find('.sbt-link-value').val($control.find('.sbt-link-direct').val());
				}
			});

			$(document).on('input', '.sbt-link-direct', function(){
				var $control = $(this).closest('.sbt-link-control');
				$control.find('.sbt-link-select').val('');
				$control.find('.sbt-link-value').val($(this).val());
			});

			$(document).on('click', '.sbt-assets-import-button', function(e){
				e.preventDefault();
				var $button = $(this);
				var $wrap = $button.closest('.sbt-assets-import');
				var $message = $wrap.find('.sbt-assets-import-message');
				var $progress = $wrap.find('.sbt-assets-progress');
				var $bar = $wrap.find('.sbt-assets-progress__bar');
				var nonce = $wrap.data('nonce');
				var subtheme = $wrap.data('subtheme');

				function setStatus(data){
					var progress = data && typeof data.progress !== 'undefined' ? parseInt(data.progress, 10) : 0;
					$progress.show();
					$bar.css('width', Math.max(0, Math.min(100, progress)) + '%');
					if (data && data.message) {
						$message.text(data.message);
					}
				}

				function fail(xhr){
					var response = xhr && xhr.responseJSON && xhr.responseJSON.data ? xhr.responseJSON.data : {};
					$message.text(response.message || 'Import interrotto. Riprova quando il server online risponde correttamente.');
					$button.prop('disabled', false);
				}

				function step(jobId){
					$.post(ajaxurl, {
						action: 'sbt_step_assets_import',
						nonce: nonce,
						subtheme: subtheme,
						job_id: jobId
					}).done(function(response){
						if (!response || !response.success) {
							fail({ responseJSON: response });
							return;
						}
						setStatus(response.data);
						if (response.data.done) {
							$button.prop('disabled', false);
							return;
						}
						window.setTimeout(function(){ step(jobId); }, 250);
					}).fail(fail);
				}

				$button.prop('disabled', true);
				$message.text('Avvio import assets online...');
				$progress.show();
				$bar.css('width', '0%');

				$.post(ajaxurl, {
					action: 'sbt_start_assets_import',
					nonce: nonce,
					subtheme: subtheme
				}).done(function(response){
					if (!response || !response.success) {
						fail({ responseJSON: response });
						return;
					}
					setStatus(response.data);
					step(response.data.job_id);
				}).fail(fail);
			});
		});
	})(jQuery);
	</script>
	<?php
}
add_action( 'admin_footer', 'sbt_admin_footer_scripts' );

function sbt_page_content_key( $slug ) {
	$pages = sbt_page_templates();
	if ( isset( $pages[ $slug ] ) ) {
		return isset( $pages[ $slug ]['content_key'] ) ? $pages[ $slug ]['content_key'] : $slug;
	}

	return '';
}

function sbt_load_active_data() {
	$IMG = $SITE = $NAV = $C = $HOUSE_CARDS = $SERVICES = $TEXT = $GALLERY = $WEDDING_GALLERY = $EXPERIENCES = array();
	require sbt_subtheme_path( 'data_general.php' );

	return compact( 'IMG', 'SITE', 'NAV', 'C', 'HOUSE_CARDS', 'SERVICES', 'TEXT', 'GALLERY', 'WEDDING_GALLERY', 'EXPERIENCES' );
}

function sbt_page_editor_sections( $slug, $data ) {
	$content_key = sbt_page_content_key( $slug );
	$sections = array();

	if ( $content_key && isset( $data['C'][ $content_key ] ) ) {
		$sections = array_merge( $sections, sbt_content_editor_sections( $content_key, $data['C'][ $content_key ] ) );
	}

	$theme = sbt_active_subtheme_key();
	if ( 'home' === $slug ) {
		$home_image_keys = 'theme01' === $theme
			? array( 'welcome', 'a1', 'a5', 'room', 'room2', 'garden', 'villa', 'apulian_table', 'jacuzzi_detail', 'room_detail' )
			: array( 'welcome', 'band', 'teaser_hospitality', 'teaser_wedding', 'teaser_events', 'exp_massage', 'exp_boat', 'exp_cooking', 'exp_dinner' );
		$home_images = array();
		foreach ( $home_image_keys as $image_key ) {
			if ( isset( $data['IMG'][ $image_key ] ) ) {
				$home_images[ $image_key ] = $data['IMG'][ $image_key ];
			}
		}
		if ( $home_images ) {
			$sections['IMG'] = array( 'title' => 'Immagini Home', 'value' => $home_images );
		}

		$video_key = 'theme01' === $theme ? 'vimeo' : 'youtube';
		if ( isset( $data['SITE'][ $video_key ] ) ) {
			$sections['SITE'] = array( 'title' => 'Video Home', 'value' => array( $video_key => $data['SITE'][ $video_key ] ) );
		}
	}

	if ( 'theme02' === $theme && 'home' !== $slug ) {
		$page_image_keys = array(
			'hospitality'         => array( 'hosp_hero', 'teaser_hospitality', 'exp_massage', 'exp_boat', 'exp_cooking', 'exp_dinner' ),
			'events-weddings'     => array( 'events_hero', 'teaser_wedding', 'partys_hero', 'band' ),
			'wedding-in-masseria' => array( 'wedding_hero', 'events_hero' ),
			'partys-meeting'      => array( 'partys_hero', 'band' ),
			'surroundings'        => array( 'surr_hero', 'band' ),
			'contacts'            => array( 'contacts_hero' ),
		);
		if ( isset( $page_image_keys[ $slug ] ) ) {
			$page_images = array();
			foreach ( $page_image_keys[ $slug ] as $image_key ) {
				if ( isset( $data['IMG'][ $image_key ] ) ) {
					$page_images[ $image_key ] = $data['IMG'][ $image_key ];
				}
			}
			if ( $page_images ) {
				$sections['IMG'] = array( 'title' => 'Immagini pagina', 'value' => $page_images );
			}
		}
	}

	if ( 'theme01' === $theme ) {
		if ( in_array( $slug, array( 'home', 'houses' ), true ) && ! empty( $data['HOUSE_CARDS'] ) ) {
			$sections['HOUSE_CARDS'] = array( 'title' => 'Card case', 'value' => $data['HOUSE_CARDS'] );
		}
		if ( 'home' === $slug && ! empty( $data['SERVICES'] ) ) {
			$sections['SERVICES'] = array( 'title' => 'Servizi', 'value' => $data['SERVICES'] );
		}
		$pages = sbt_page_templates();
		$is_house_detail = isset( $pages[ $slug ]['content_key'] ) && 0 === strpos( $pages[ $slug ]['content_key'], 'house' ) && 'houses' !== $slug;
		if ( ( $is_house_detail || in_array( $slug, array( 'home', 'price-and-condition' ), true ) ) && ! empty( $data['TEXT'] ) ) {
			$sections['TEXT'] = array( 'title' => 'Testi fissi usati nella pagina', 'value' => $data['TEXT'] );
		}
		if ( 'contacts' === $slug ) {
			if ( ! empty( $data['TEXT'] ) ) {
				$form_text = array_intersect_key( $data['TEXT'], array_flip( array( 'form_name', 'form_email', 'form_dates', 'form_dates_placeholder', 'form_message', 'form_send', 'form_result', 'chat_whatsapp', 'address', 'phone', 'email' ) ) );
				if ( $form_text ) {
					$sections['TEXT.form'] = array( 'path' => 'TEXT', 'title' => 'Form contatti', 'value' => $form_text );
				}
			}
			if ( ! empty( $data['SITE'] ) ) {
				$contact_site = array_intersect_key( $data['SITE'], array_flip( array( 'address', 'map', 'map_embed', 'phone1', 'phone1_t', 'phone2', 'phone2_t', 'email', 'wa' ) ) );
				if ( $contact_site ) {
					$sections['SITE.contacts'] = array( 'path' => 'SITE', 'title' => 'Contatti e mappa', 'value' => $contact_site );
				}
			}
		}
	}

	if ( 'theme02' === $theme ) {
		if ( 'home' === $slug && ! empty( $data['EXPERIENCES'] ) ) {
			$sections['EXPERIENCES'] = array( 'title' => 'Esperienze home', 'value' => $data['EXPERIENCES'] );
		}
		if ( 'hospitality' === $slug ) {
			if ( ! empty( $data['SERVICES'] ) ) $sections['SERVICES'] = array( 'title' => 'Servizi hospitality', 'value' => $data['SERVICES'] );
			if ( ! empty( $data['GALLERY'] ) ) $sections['GALLERY'] = array( 'title' => 'Gallery hospitality', 'value' => $data['GALLERY'] );
		}
		if ( 'wedding-in-masseria' === $slug && ! empty( $data['WEDDING_GALLERY'] ) ) {
			$sections['WEDDING_GALLERY'] = array( 'title' => 'Gallery wedding', 'value' => $data['WEDDING_GALLERY'] );
		}
	}

	return $sections;
}

function sbt_content_editor_sections( $content_key, $content ) {
	$path = 'C.' . $content_key;
	$sections = array();
	$groups = array(
		'hero'      => array( 'title' => 'Hero / banner', 'keys' => array( 'title', 'over', 'h1', 'hero_over', 'hero_h1', 'hero_sub', 'banner' ) ),
		'intro'     => array( 'title' => 'Sezione introduttiva', 'keys' => array( 'welcome_over', 'welcome_h2', 'welcome_p1', 'welcome_p2', 'intro_over', 'intro_h2', 'intro_p', 'lead', 'p' ) ),
		'houses'    => array( 'title' => 'Sezione Houses', 'keys' => array( 'houses_over', 'houses_h2', 'houses_p' ) ),
		'services'  => array( 'title' => 'Sezione servizi', 'keys' => array( 'services_over', 'services_h2' ) ),
		'gallery'   => array( 'title' => 'Gallery', 'keys' => array( 'gallery_over', 'gallery_h2', 'gallery', 'welcome_gallery', 'overview_gallery', 'wellness_gallery', 'spa_gallery', 'experience_gallery' ) ),
		'cards'     => array( 'title' => 'Card / liste', 'keys' => array( 'cards', 'offers', 'feat_rows', 'amenities', 'included', 'specs' ) ),
		'band'      => array( 'title' => 'Sezione band', 'keys' => array( 'band_over', 'band_h2', 'band_p', 'band_bg' ) ),
		'offers'    => array( 'title' => 'Sezione offerte', 'keys' => array( 'offers_over', 'offers_h2', 'offers_p' ) ),
		'form'      => array( 'title' => 'Note form', 'keys' => array( 'form_note' ) ),
		'cta'       => array( 'title' => 'Call to action', 'keys' => array( 'cta_over', 'cta_h2', 'cta_p', 'cta_btn', 'cta_url', 'cta_bg' ) ),
	);
	$used = array();

	foreach ( $groups as $group_key => $group ) {
		$value = array();
		foreach ( $group['keys'] as $key ) {
			if ( array_key_exists( $key, $content ) ) {
				$value[ $key ] = $content[ $key ];
				$used[ $key ] = true;
			}
		}

		if ( $value ) {
			$sections[ $path . '.' . $group_key ] = array(
				'path'  => $path,
				'title' => $group['title'],
				'value' => $value,
			);
		}
	}

	$remaining = array_diff_key( $content, $used );
	if ( $remaining ) {
		$sections[ $path . '.other' ] = array(
			'path'  => $path,
			'title' => 'Altri contenuti',
			'value' => $remaining,
		);
	}

	return $sections;
}

function sbt_add_page_editor_metabox() {
	add_meta_box(
		'sbt-page-content',
		'SyncBooking - contenuti pagina',
		'sbt_render_page_editor_metabox',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'sbt_add_page_editor_metabox' );

function sbt_theme_page_public_url( $slug, $language = '' ) {
	$language = '' === $language ? sbt_current_content_language() : sanitize_key( $language );
	$page_slug = sbt_language_page_slug( $slug, $language );
	if ( 'home' === $slug && sbt_default_language() === $language ) {
		return home_url( '/' );
	}

	$page = sbt_theme_page_post( $slug, $language );
	return $page ? get_permalink( $page ) : home_url( '/' . $page_slug . '/' );
}

function sbt_theme_page_post( $slug, $language = 'en' ) {
	$slug = sanitize_title( $slug );
	$language = sanitize_key( $language );
	$posts = get_posts( array(
		'post_type'      => 'page',
		'post_status'    => 'any',
		'posts_per_page' => 1,
		'meta_query'     => array(
			array(
				'key'   => '_sbt_base_slug',
				'value' => $slug,
			),
			array(
				'key'   => '_sbt_language',
				'value' => $language,
			),
		),
	) );

	if ( $posts ) {
		return $posts[0];
	}

	return get_page_by_path( sbt_language_page_slug( $slug, $language ) );
}

function sbt_page_editor_language_tabs( $post_id, $slug, $active_language ) {
	$languages = sbt_enabled_languages();
	if ( count( $languages ) < 2 ) {
		return;
	}

	echo '<div class="sbt-actions" style="margin:12px 0 18px;">';
	foreach ( $languages as $language ) {
		$url = add_query_arg( 'edit_lang', $language, get_edit_post_link( $post_id, '' ) );
		echo '<a class="button ' . ( $active_language === $language ? 'button-primary' : '' ) . '" href="' . esc_url( $url ) . '">' . esc_html( strtoupper( $language ) ) . '</a>';
	}
	echo '</div>';
}

function sbt_render_page_editor_metabox( $post ) {
	wp_nonce_field( 'sbt_page_save', 'sbt_page_nonce' );

	$slug = sbt_page_base_slug_for_post( $post->ID );
	$edit_language = sbt_current_content_language();
	$pages = sbt_page_templates();
	if ( ! isset( $pages[ $slug ] ) ) {
		echo '<p>This page does not belong to the active subtheme. Choose a subtheme from <strong>Appearance > SyncBooking Theme</strong> or use a theme page slug.</p>';
		return;
	}

	$data = sbt_load_active_data();
	$sections = sbt_page_editor_sections( $slug, $data );
	$overrides = sbt_active_overrides( $edit_language );

	echo '<p>Unified editor for page <strong>' . esc_html( $pages[ $slug ]['title'] ) . '</strong> of subtheme <strong>' . esc_html( sbt_active_subtheme()['label'] ) . '</strong> - language <strong>' . esc_html( strtoupper( $edit_language ) ) . '</strong>.</p>';
	sbt_page_editor_language_tabs( $post->ID, $slug, $edit_language );
	echo '<input type="hidden" name="sbt_page_slug" value="' . esc_attr( $slug ) . '">';
	echo '<input type="hidden" name="sbt_edit_language" value="' . esc_attr( $edit_language ) . '">';

	echo '<div class="sbt-page-editor-layout">';
	foreach ( $sections as $path => $section ) {
		echo '<div class="sbt-preview-section">';
		echo '<div class="sbt-preview-section__editor">';
		sbt_render_admin_fields( $section['path'] ?? $path, $section['value'], $overrides, $section['title'] );
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
}

function sbt_save_page_editor_metabox( $post_id ) {
	if ( ! isset( $_POST['sbt_page_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sbt_page_nonce'] ) ), 'sbt_page_save' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}

	if ( ! isset( $_POST['sbt_page_slug'], $_POST[ SBT_OPTION ]['overrides'] ) || ! is_array( $_POST[ SBT_OPTION ]['overrides'] ) ) {
		return;
	}

	$slug = sanitize_title( wp_unslash( $_POST['sbt_page_slug'] ) );
	$edit_language = isset( $_POST['sbt_edit_language'] ) ? sanitize_key( wp_unslash( $_POST['sbt_edit_language'] ) ) : 'en';
	$edit_language = in_array( $edit_language, sbt_enabled_languages(), true ) ? $edit_language : 'en';
	$pages = sbt_page_templates();
	if ( ! isset( $pages[ $slug ] ) ) {
		return;
	}

	$options = sbt_get_options();
	$key = sbt_active_subtheme_key();
	if ( ! isset( $options['overrides'] ) || ! is_array( $options['overrides'] ) ) {
		$options['overrides'] = array();
	}
	if ( ! isset( $options['overrides'][ $key ] ) || ! is_array( $options['overrides'][ $key ] ) ) {
		$options['overrides'][ $key ] = array();
	}
	if ( ! isset( $options['overrides'][ $key ]['_languages'] ) || ! is_array( $options['overrides'][ $key ]['_languages'] ) ) {
		$options['overrides'][ $key ]['_languages'] = array();
	}
	if ( ! isset( $options['overrides'][ $key ]['_languages'][ $edit_language ] ) || ! is_array( $options['overrides'][ $key ]['_languages'][ $edit_language ] ) ) {
		$options['overrides'][ $key ]['_languages'][ $edit_language ] = array();
	}

	$data = sbt_load_active_data();
	$allowed_sections = sbt_page_editor_sections( $slug, $data );
	$allowed_prefixes = array();
	foreach ( $allowed_sections as $section_key => $section ) {
		$allowed_prefixes[] = $section['path'] ?? $section_key;
	}
	$allowed_prefixes = array_unique( $allowed_prefixes );

	foreach ( $_POST[ SBT_OPTION ]['overrides'] as $path => $value ) {
		$path = sanitize_text_field( wp_unslash( $path ) );
		$allowed = false;
		foreach ( $allowed_prefixes as $prefix ) {
			if ( $path === $prefix || 0 === strpos( $path, $prefix . '.' ) ) {
				$allowed = true;
				break;
			}
		}

		if ( $allowed && is_string( $value ) ) {
			$options['overrides'][ $key ]['_languages'][ $edit_language ][ $path ] = sbt_sanitize_editable_override( $path, $value );
		}
	}

	update_option( SBT_OPTION, $options );
	sbt_sync_custom_house_pages();
}
add_action( 'save_post_page', 'sbt_save_page_editor_metabox' );

function sbt_sanitize_options( $raw ) {
	$options = sbt_default_options();
	$subthemes = sbt_subthemes();
	$subtheme = isset( $raw['subtheme'] ) ? sanitize_key( wp_unslash( $raw['subtheme'] ) ) : 'theme01';
	$options['subtheme'] = isset( $subthemes[ $subtheme ] ) ? $subtheme : 'theme01';

	$existing = sbt_get_options();
	$options['overrides'] = isset( $existing['overrides'] ) && is_array( $existing['overrides'] ) ? $existing['overrides'] : array();
	$options['custom_house_pages'] = isset( $existing['custom_house_pages'] ) && is_array( $existing['custom_house_pages'] ) ? $existing['custom_house_pages'] : array();
	$options['disabled_theme_pages'] = isset( $existing['disabled_theme_pages'] ) && is_array( $existing['disabled_theme_pages'] ) ? $existing['disabled_theme_pages'] : array();
	$options['admin_language'] = isset( $raw['admin_language'] ) && in_array( sanitize_key( wp_unslash( $raw['admin_language'] ) ), array( 'it', 'en' ), true ) ? sanitize_key( wp_unslash( $raw['admin_language'] ) ) : sbt_admin_language();
	$options['edit_mode'] = isset( $raw['edit_mode'] ) && in_array( sanitize_key( wp_unslash( $raw['edit_mode'] ) ), array( 'standard', 'visual' ), true ) ? sanitize_key( wp_unslash( $raw['edit_mode'] ) ) : sbt_edit_mode();
	$available_languages = sbt_available_languages();
	$default_language = isset( $raw['default_language'] ) ? sanitize_key( wp_unslash( $raw['default_language'] ) ) : sbt_default_language();
	$options['default_language'] = isset( $available_languages[ $default_language ] ) ? $default_language : 'en';
	$languages = isset( $raw['languages'] ) && is_array( $raw['languages'] ) ? array_map( 'sanitize_key', wp_unslash( $raw['languages'] ) ) : sbt_enabled_languages();
	$languages[] = 'en';
	$languages[] = $options['default_language'];
	$options['languages'] = array_values( array_unique( array_filter( $languages, function( $language ) use ( $available_languages ) {
		return isset( $available_languages[ $language ] );
	} ) ) );
	if ( ! isset( $options['overrides'][ $options['subtheme'] ] ) || ! is_array( $options['overrides'][ $options['subtheme'] ] ) ) {
		$options['overrides'][ $options['subtheme'] ] = array();
	}

	if ( isset( $raw['overrides'] ) && is_array( $raw['overrides'] ) ) {
		$edit_language = isset( $raw['edit_language'] ) ? sanitize_key( wp_unslash( $raw['edit_language'] ) ) : 'en';
		$edit_language = in_array( $edit_language, $options['languages'], true ) ? $edit_language : 'en';
		if ( ! isset( $options['overrides'][ $options['subtheme'] ]['_languages'] ) || ! is_array( $options['overrides'][ $options['subtheme'] ]['_languages'] ) ) {
			$options['overrides'][ $options['subtheme'] ]['_languages'] = array();
		}
		if ( ! isset( $options['overrides'][ $options['subtheme'] ]['_languages'][ $edit_language ] ) || ! is_array( $options['overrides'][ $options['subtheme'] ]['_languages'][ $edit_language ] ) ) {
			$options['overrides'][ $options['subtheme'] ]['_languages'][ $edit_language ] = array();
		}
		foreach ( $raw['overrides'] as $key => $value ) {
			$key = sanitize_text_field( wp_unslash( $key ) );
			if ( is_string( $value ) ) {
				$options['overrides'][ $options['subtheme'] ]['_languages'][ $edit_language ][ $key ] = sbt_sanitize_editable_override( $key, $value );
				if ( in_array( $key, array( 'SITE.rental_mode', 'SITE.entire_label', 'SITE.unit_label', 'SITE.unit_count' ), true ) ) {
					$options['overrides'][ $options['subtheme'] ]['_languages']['en'][ $key ] = sbt_sanitize_editable_override( $key, $value );
				}
			}
		}
	}

	if ( in_array( $options['subtheme'], array( 'theme01', 'theme02' ), true ) && isset( $raw['unit_names'] ) && is_array( $raw['unit_names'] ) ) {
		$subtheme = $options['subtheme'];
		$theme_overrides = $options['overrides'][ $subtheme ]['_languages']['en'] ?? array();
		$unit_label = isset( $theme_overrides['SITE.unit_label'] ) && '' !== $theme_overrides['SITE.unit_label'] ? $theme_overrides['SITE.unit_label'] : sbt_structural_override_value( $subtheme, 'SITE.unit_label', 'theme02' === $subtheme ? 'Room' : 'House' );
		$unit_count = isset( $theme_overrides['SITE.unit_count'] ) ? absint( $theme_overrides['SITE.unit_count'] ) : sbt_desired_unit_count( $subtheme );
		$unit_count = max( 1, min( 20, $unit_count ) );
		$current = isset( $options['custom_house_pages'][ $subtheme ] ) && is_array( $options['custom_house_pages'][ $subtheme ] ) ? array_values( $options['custom_house_pages'][ $subtheme ] ) : array();
		$raw_names = wp_unslash( $raw['unit_names'] );

		if ( 'entire' !== ( $theme_overrides['SITE.rental_mode'] ?? sbt_rental_mode( $subtheme ) ) ) {
			for ( $number = 1; $number <= $unit_count; $number++ ) {
				$default_title = sbt_unit_default_title( $unit_label, $number );
				$name = isset( $raw_names[ $number ] ) ? trim( sanitize_text_field( $raw_names[ $number ] ) ) : '';
				$title = '' !== $name ? $name : $default_title;
				if ( ! isset( $current[ $number - 1 ] ) || ! is_array( $current[ $number - 1 ] ) ) {
					$current[ $number - 1 ] = array();
				}
				$current[ $number - 1 ]['title'] = $title;
				$current[ $number - 1 ]['custom_title'] = $title !== $default_title;
				if ( empty( $current[ $number - 1 ]['content_key'] ) ) {
					$current[ $number - 1 ]['content_key'] = sbt_unit_content_key( $number );
				}
			}
		}

		$options['custom_house_pages'][ $subtheme ] = $current;
	}

	return $options;
}

function sbt_reset_subtheme_template( $subtheme ) {
	$subthemes = sbt_subthemes();
	if ( ! isset( $subthemes[ $subtheme ] ) ) {
		return false;
	}

	$options = sbt_get_options();
	$options['subtheme'] = $subtheme;
	if ( ! isset( $options['overrides'] ) || ! is_array( $options['overrides'] ) ) {
		$options['overrides'] = array();
	}

	foreach ( sbt_custom_house_pages( $subtheme ) as $house_page ) {
		if ( ! empty( $house_page['slug'] ) ) {
			$page = get_page_by_path( $house_page['slug'] );
			if ( $page ) {
				wp_trash_post( $page->ID );
			}
		}
	}

	$options['overrides'][ $subtheme ] = array();
	if ( isset( $options['custom_house_pages'][ $subtheme ] ) ) {
		$options['custom_house_pages'][ $subtheme ] = array();
	}
	if ( isset( $options['disabled_theme_pages'][ $subtheme ] ) ) {
		$options['disabled_theme_pages'][ $subtheme ] = array();
	}
	update_option( SBT_OPTION, $options );
	sbt_sync_custom_house_pages();
	sbt_create_theme_pages();
	return true;
}

function sbt_unique_page_slug( $base_slug ) {
	$base_slug = sanitize_title( $base_slug );
	$base_slug = $base_slug ? $base_slug : 'house-custom';
	$pages = sbt_page_templates();
	$slug = $base_slug;
	$index = 2;

	while ( isset( $pages[ $slug ] ) || get_page_by_path( $slug ) ) {
		$slug = $base_slug . '-' . $index;
		$index++;
	}

	return $slug;
}

function sbt_add_custom_house_page( $title ) {
	if ( 'theme01' !== sbt_active_subtheme_key() ) {
		return false;
	}

	$title = trim( wp_strip_all_tags( (string) $title ) );
	if ( '' === $title ) {
		$title = 'New House';
	}

	$slug = sbt_unique_page_slug( $title );
	$content_key = 'house_' . str_replace( '-', '_', $slug );
	$options = sbt_get_options();
	if ( ! isset( $options['custom_house_pages']['theme01'] ) || ! is_array( $options['custom_house_pages']['theme01'] ) ) {
		$options['custom_house_pages']['theme01'] = array();
	}

	$options['custom_house_pages']['theme01'][] = array(
		'title'       => $title,
		'slug'        => $slug,
		'content_key' => $content_key,
	);

	update_option( SBT_OPTION, $options );
	sbt_create_theme_pages();

	return true;
}

function sbt_update_generated_unit_page_slugs( $old_slug, $new_slug, $content_key ) {
	foreach ( sbt_enabled_languages() as $language ) {
		$old_page_slug = sbt_language_page_slug( $old_slug, $language );
		$new_page_slug = sbt_language_page_slug( $new_slug, $language );
		$page = get_page_by_path( $old_page_slug );

		if ( ! $page && $content_key ) {
			$posts = get_posts( array(
				'post_type'      => 'page',
				'post_status'    => 'any',
				'posts_per_page' => 1,
				'meta_query'     => array(
					array(
						'key'   => '_sbt_base_slug',
						'value' => $old_slug,
					),
					array(
						'key'   => '_sbt_language',
						'value' => $language,
					),
				),
			) );
			$page = $posts ? $posts[0] : null;
		}

		if ( $page ) {
			wp_update_post( array(
				'ID'        => $page->ID,
				'post_name' => $new_page_slug,
			) );
			update_post_meta( $page->ID, '_sbt_base_slug', $new_slug );
			update_post_meta( $page->ID, '_sbt_language', $language );
		}
	}
}

function sbt_sync_custom_house_pages() {
	$subtheme = sbt_active_subtheme_key();
	if ( ! in_array( $subtheme, array( 'theme01', 'theme02' ), true ) ) {
		return;
	}

	$options = sbt_get_options();
	$current = isset( $options['custom_house_pages'][ $subtheme ] ) && is_array( $options['custom_house_pages'][ $subtheme ] ) ? array_values( $options['custom_house_pages'][ $subtheme ] ) : array();

	if ( sbt_is_entire_rental_mode( $subtheme ) ) {
		foreach ( $current as $removed ) {
			if ( ! empty( $removed['slug'] ) ) {
				foreach ( sbt_enabled_languages() as $language ) {
					$page = get_page_by_path( sbt_language_page_slug( $removed['slug'], $language ) );
					if ( $page ) {
						wp_trash_post( $page->ID );
					}
				}
			}
		}
		foreach ( array( 'houses', 'house' ) as $listing_slug ) {
			foreach ( sbt_enabled_languages() as $language ) {
				$page = get_page_by_path( sbt_language_page_slug( $listing_slug, $language ) );
				if ( $page ) {
					wp_trash_post( $page->ID );
				}
			}
		}
		$options['custom_house_pages'][ $subtheme ] = array();
		update_option( SBT_OPTION, $options );
		sbt_create_theme_pages();
		return;
	}

	$unit_label = sbt_unit_label( array( 'SITE.unit_label' => sbt_structural_override_value( $subtheme, 'SITE.unit_label', 'theme02' === $subtheme ? 'Room' : 'House' ) ) );
	$desired_count = sbt_desired_unit_count( $subtheme );

	while ( count( $current ) < $desired_count ) {
		$number = count( $current ) + 1;
		$title = sbt_unit_default_title( $unit_label, $number );
		$slug = sbt_unit_detail_slug( $unit_label, $number );
		$current[] = array(
			'title'       => $title,
			'slug'        => $slug,
			'content_key' => sbt_unit_content_key( $number ),
			'custom_title' => false,
		);
	}

	while ( count( $current ) > $desired_count ) {
		$removed = array_pop( $current );
		if ( ! empty( $removed['slug'] ) ) {
			foreach ( sbt_enabled_languages() as $language ) {
				$page = get_page_by_path( sbt_language_page_slug( $removed['slug'], $language ) );
				if ( $page ) {
					wp_trash_post( $page->ID );
				}
			}
		}
	}

	$used_slugs = array();
	foreach ( $current as $index => &$house_page ) {
		$number = $index + 1;
		$old_slug = isset( $house_page['slug'] ) ? sanitize_title( $house_page['slug'] ) : '';
		$default_title = sbt_unit_default_title( $unit_label, $number );
		$title = ! empty( $house_page['custom_title'] ) && ! empty( $house_page['title'] ) ? wp_strip_all_tags( $house_page['title'] ) : $default_title;
		$new_slug = sbt_unit_slug_from_title( $title, $number, $used_slugs );
		$house_page['title'] = $title;
		$house_page['slug'] = $new_slug;
		$house_page['content_key'] = sbt_unit_content_key( $number );
		$house_page['custom_title'] = $title !== $default_title;

		if ( $old_slug && $old_slug !== $new_slug ) {
			sbt_update_generated_unit_page_slugs( $old_slug, $new_slug, $house_page['content_key'] );
		}
	}
	unset( $house_page );

	$options['custom_house_pages'][ $subtheme ] = $current;
	update_option( SBT_OPTION, $options );
	sbt_create_theme_pages();
}

function sbt_delete_custom_house_page( $slug ) {
	if ( 'theme01' !== sbt_active_subtheme_key() ) {
		return false;
	}

	$slug = sanitize_title( $slug );
	$options = sbt_get_options();
	$pages = isset( $options['custom_house_pages']['theme01'] ) && is_array( $options['custom_house_pages']['theme01'] ) ? $options['custom_house_pages']['theme01'] : array();
	$removed = false;
	$content_key = '';

	foreach ( $pages as $index => $page ) {
		if ( isset( $page['slug'] ) && $slug === $page['slug'] ) {
			$content_key = $page['content_key'] ?? '';
			unset( $pages[ $index ] );
			$removed = true;
			break;
		}
	}

	if ( ! $removed ) {
		return false;
	}

	$options['custom_house_pages']['theme01'] = array_values( $pages );
	if ( $content_key && isset( $options['overrides']['theme01'] ) && is_array( $options['overrides']['theme01'] ) ) {
		foreach ( array_keys( $options['overrides']['theme01'] ) as $override_path ) {
			$prefix = 'C.' . $content_key;
			if ( $prefix === $override_path || 0 === strpos( $override_path, $prefix . '.' ) ) {
				unset( $options['overrides']['theme01'][ $override_path ] );
			}
		}
	}

	update_option( SBT_OPTION, $options );

	$page = get_page_by_path( $slug );
	if ( $page ) {
		wp_trash_post( $page->ID );
	}

	return true;
}

function sbt_admin_current_tab() {
	$tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'themes';
	if ( 'home' === $tab ) {
		return 'pages';
	}

	return in_array( $tab, array( 'themes', 'general', 'header', 'pages' ), true ) ? $tab : 'themes';
}

function sbt_admin_tab_url( $tab ) {
	return add_query_arg(
		array(
			'page' => 'syncbooking-theme',
			'tab'  => $tab,
		),
		admin_url( 'themes.php' )
	);
}

function sbt_redirect_legacy_home_tab() {
	if ( ! is_admin() || ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$page = isset( $_GET['page'] ) ? sanitize_key( wp_unslash( $_GET['page'] ) ) : '';
	$tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : '';
	if ( 'syncbooking-theme' === $page && 'home' === $tab ) {
		wp_safe_redirect( sbt_admin_tab_url( 'pages' ) );
		exit;
	}
}
add_action( 'admin_init', 'sbt_redirect_legacy_home_tab' );

function sbt_theme_page_edit_url( $slug ) {
	$page = get_page_by_path( $slug );
	if ( ! $page ) {
		return '';
	}

	return get_edit_post_link( $page->ID, '' );
}

function sbt_page_file_options() {
	$options = array();
	foreach ( sbt_page_templates() as $slug => $page ) {
		$page_slug = sbt_language_page_slug( $slug, 'en' );
		$options[ $page['file'] ] = $page['title'] . ' (/' . ( 'home' === $slug ? '' : $page_slug . '/' ) . ')';
	}
	return $options;
}

function sbt_syncbooking_plugin_status() {
	if ( ! function_exists( 'get_plugins' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

	$plugins = function_exists( 'get_plugins' ) ? get_plugins() : array();
	$status = array(
		'installed' => false,
		'active'    => false,
		'file'      => '',
		'name'      => 'SyncBooking',
		'action_url'=> admin_url( 'plugin-install.php?s=' . SBT_REQUIRED_PLUGIN_SLUG . '&tab=search&type=term' ),
	);

	if ( isset( $plugins[ SBT_REQUIRED_PLUGIN_FILE ] ) ) {
		$plugin = $plugins[ SBT_REQUIRED_PLUGIN_FILE ];
		$status['installed'] = true;
		$status['file'] = SBT_REQUIRED_PLUGIN_FILE;
		$status['name'] = isset( $plugin['Name'] ) && $plugin['Name'] ? $plugin['Name'] : 'SyncBooking';
		$status['active'] = function_exists( 'is_plugin_active' ) && is_plugin_active( SBT_REQUIRED_PLUGIN_FILE );
		$status['action_url'] = $status['active'] ? admin_url( 'plugins.php' ) : wp_nonce_url( admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( SBT_REQUIRED_PLUGIN_FILE ) ), 'activate-plugin_' . SBT_REQUIRED_PLUGIN_FILE );
		return $status;
	}

	return $status;
}

function sbt_required_plugin_admin_notice() {
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}

	$status = sbt_syncbooking_plugin_status();
	if ( $status['active'] ) {
		return;
	}

	$message = $status['installed']
		? 'Il tema SyncBooking richiede il plugin SyncBooking: il plugin risulta installato ma non attivo.'
		: 'Il tema SyncBooking richiede il plugin SyncBooking: installalo e attivalo per usare tutte le funzioni di prenotazione.';
	echo '<div class="notice notice-warning"><p>' . esc_html( $message ) . '</p></div>';
}
add_action( 'admin_notices', 'sbt_required_plugin_admin_notice' );

function sbt_render_admin_shell_start( $active_tab ) {
	$tabs = array(
		'themes'   => 'Themes',
		'general'  => 'General Settings',
		'header'   => 'Header & Menu',
		'pages'    => 'Pages',
	);
	?>
	<style>
		.sbt-wrap { max-width: 1320px; }
		.sbt-tabs { display:flex; gap:8px; margin:22px 0 18px; border-bottom:1px solid #dcdcde; }
		.sbt-tab { border:1px solid transparent; border-bottom:0; color:#1d2327; display:inline-flex; font-weight:600; padding:12px 16px; text-decoration:none; }
		.sbt-tab.is-active { background:#fff; border-color:#dcdcde; border-radius:6px 6px 0 0; margin-bottom:-1px; }
		.sbt-panel { background:#fff; border:1px solid #dcdcde; border-radius:8px; padding:22px; }
		.sbt-grid { display:grid; gap:16px; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); }
		.sbt-theme-grid { display:grid; gap:16px; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); margin:18px 0; }
		.sbt-card { border:1px solid #dcdcde; border-radius:8px; padding:18px; position:relative; }
		.sbt-theme-card { align-items:flex-start; cursor:pointer; display:grid; gap:12px; grid-template-columns:auto 1fr; min-height:118px; }
		.sbt-theme-card input { margin-top:4px; }
		.sbt-theme-card__body { min-width:0; }
		.sbt-theme-card__body h3 { font-size:18px; line-height:1.25; margin:0 0 6px; }
		.sbt-theme-card__meta { color:#646970; display:block; font-size:13px; }
		.sbt-card.is-selected { border-color:#2271b1; box-shadow:0 0 0 1px #2271b1; }
		.sbt-card h3 { margin:0 0 8px; }
		.sbt-muted { color:#646970; }
		.sbt-status { align-items:flex-start; border-radius:8px; display:flex; gap:12px; margin:16px 0; padding:14px 16px; }
		.sbt-status strong { display:block; margin-bottom:3px; }
		.sbt-status.is-ok { background:#edfaef; border:1px solid #68de7c; }
		.sbt-status.is-warning { background:#fcf9e8; border:1px solid #dba617; }
		.sbt-status__dot { border-radius:999px; flex:0 0 10px; height:10px; margin-top:5px; width:10px; }
		.sbt-status.is-ok .sbt-status__dot { background:#00a32a; }
		.sbt-status.is-warning .sbt-status__dot { background:#dba617; }
		.sbt-theme-footer { align-items:center; border-top:1px solid #dcdcde; display:flex; flex-wrap:wrap; gap:10px; justify-content:space-between; margin-top:22px; padding-top:18px; }
		.sbt-reset-box { background:#fcf0f1; border:1px solid #f1aeb5; border-radius:8px; margin-top:18px; padding:16px; }
		.sbt-reset-box h3 { margin:0 0 6px; }
		.sbt-reset-box .button-link-delete { background:#fff; border:1px solid #d63638; border-radius:4px; color:#b32d2e; cursor:pointer; display:inline-flex; font-weight:600; min-height:32px; padding:5px 12px; text-decoration:none; }
		.sbt-reset-box .button-link-delete:hover { background:#d63638; color:#fff; }
		.sbt-field-grid { display:grid; gap:14px; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); }
		.sbt-field label { display:block; font-weight:600; margin-bottom:6px; }
		.sbt-field input, .sbt-field select, .sbt-field textarea { width:100%; }
		.sbt-table { border-collapse:collapse; width:100%; }
		.sbt-table th, .sbt-table td { border-bottom:1px solid #dcdcde; padding:12px; text-align:left; vertical-align:top; }
		.sbt-menu-item { background:#f6f7f7; border:1px solid #dcdcde; border-radius:8px; margin:0 0 12px; padding:14px; }
		.sbt-submenu { border-left:3px solid #dcdcde; margin:12px 0 0 18px; padding-left:14px; }
		.sbt-actions { display:flex; flex-wrap:wrap; gap:8px; }
		.sbt-mode-grid { display:grid; gap:12px; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); margin-top:12px; }
		.sbt-mode-card { border:1px solid #dcdcde; border-radius:8px; cursor:pointer; display:block; padding:14px; }
		.sbt-mode-card:has(input:checked) { border-color:#2271b1; box-shadow:0 0 0 1px #2271b1; }
		.sbt-mode-card input { margin-right:8px; }
		.sbt-mode-title { align-items:center; display:flex; font-weight:700; gap:6px; }
		.sbt-mode-card p { margin:8px 0 0; }
		.sbt-palette-grid { display:grid; gap:12px; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); }
		.sbt-color-field input[type=color] { height:42px; padding:2px; }
		.sbt-version-badge { background:#1d2327; border-radius:999px; color:#fff; display:inline-flex; font-size:13px; font-weight:700; margin-left:8px; padding:5px 10px; vertical-align:middle; }
	</style>
	<div class="wrap sbt-wrap">
		<h1>SyncBooking Theme <span class="sbt-version-badge"><?php echo esc_html( sbt_display_version() ); ?></span></h1>
		<p class="sbt-muted">Manage subtheme, general settings, header, menu and pages from one dashboard.</p>
		<nav class="sbt-tabs" aria-label="SyncBooking Theme">
			<?php foreach ( $tabs as $key => $label ) : ?>
				<a class="sbt-tab <?php echo $active_tab === $key ? 'is-active' : ''; ?>" href="<?php echo esc_url( sbt_admin_tab_url( $key ) ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
	<?php
}

function sbt_render_theme_tab( $active, $subthemes ) {
	$enabled_languages = sbt_enabled_languages();
	$available_languages = sbt_available_languages();
	?>
	<div class="sbt-panel">
		<h2><?php echo esc_html( sbt_t( 'choose_subtheme' ) ); ?></h2>
		<p class="sbt-muted"><?php echo esc_html( sbt_t( 'theme_note' ) ); ?></p>
		<div class="sbt-theme-grid">
			<?php foreach ( $subthemes as $key => $subtheme ) : ?>
				<label class="sbt-card sbt-theme-card <?php echo $active === $key ? 'is-selected' : ''; ?>">
					<input type="radio" name="<?php echo esc_attr( SBT_OPTION ); ?>[subtheme]" value="<?php echo esc_attr( $key ); ?>" <?php checked( $active, $key ); ?>>
					<span class="sbt-theme-card__body">
						<h3><?php echo esc_html( $subtheme['label'] ); ?></h3>
						<span class="sbt-theme-card__meta"><?php echo esc_html( count( $subtheme['pages'] ) ); ?> pagine modello incluse</span>
					</span>
				</label>
			<?php endforeach; ?>
		</div>
		<div class="sbt-field-grid">
			<div class="sbt-field">
				<label><?php echo esc_html( sbt_t( 'admin_language' ) ); ?></label>
				<select name="<?php echo esc_attr( SBT_OPTION ); ?>[admin_language]">
					<option value="it" <?php selected( sbt_admin_language(), 'it' ); ?>>Italiano</option>
					<option value="en" <?php selected( sbt_admin_language(), 'en' ); ?>>English</option>
				</select>
			</div>
			<div class="sbt-field">
				<label><?php echo esc_html( sbt_t( 'default_language' ) ); ?></label>
				<select name="<?php echo esc_attr( SBT_OPTION ); ?>[default_language]">
					<?php foreach ( $available_languages as $language => $label ) : ?>
						<option value="<?php echo esc_attr( $language ); ?>" <?php selected( sbt_default_language(), $language ); ?>><?php echo esc_html( strtoupper( $language ) . ' - ' . $label ); ?></option>
					<?php endforeach; ?>
				</select>
				<span class="sbt-muted">La language base usa la homepage principale /; le altre lingue hanno una homepage dedicata.</span>
			</div>
			<div class="sbt-field">
				<label><?php echo esc_html( sbt_t( 'site_languages' ) ); ?></label>
				<div class="sbt-actions">
					<?php foreach ( $available_languages as $language => $label ) : ?>
						<label>
							<input type="checkbox" name="<?php echo esc_attr( SBT_OPTION ); ?>[languages][]" value="<?php echo esc_attr( $language ); ?>" <?php checked( in_array( $language, $enabled_languages, true ) ); ?> <?php disabled( 'en', $language ); ?>>
							<?php echo esc_html( strtoupper( $language ) . ' - ' . $label ); ?>
						</label>
						<?php if ( 'en' === $language ) : ?>
							<input type="hidden" name="<?php echo esc_attr( SBT_OPTION ); ?>[languages][]" value="en">
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="sbt-theme-footer">
			<span class="sbt-muted">The selected subtheme controls the layout, pages and content shown in the other tabs.</span>
			<?php submit_button( sbt_t( 'save_theme' ), 'primary', 'submit', false ); ?>
		</div>
		<div class="sbt-reset-box">
			<h3><?php echo esc_html( sbt_t( 'reset_template' ) ); ?></h3>
			<p class="sbt-muted"><?php echo esc_html( sbt_t( 'reset_note' ) ); ?></p>
			<button
				type="submit"
				class="button button-link-delete"
				name="sbt_action"
				value="reset_active_template"
				onclick="return confirm('Restore the selected subtheme to the original template? Saved edits for this subtheme will be deleted.');"
			>
				Reset template originale
			</button>
		</div>
	</div>
	<?php
}

function sbt_render_header_field( $path, $label, $value, $overrides, $type = 'text', $choices = array() ) {
	$current = array_key_exists( $path, $overrides ) ? $overrides[ $path ] : $value;
	if ( 'url' === $type ) {
		$current = sbt_editable_url_value( $current );
	}
	$name = SBT_OPTION . '[overrides][' . $path . ']';
	?>
	<div class="sbt-field">
		<label><?php echo esc_html( $label ); ?></label>
		<?php if ( 'select' === $type ) : ?>
			<select name="<?php echo esc_attr( $name ); ?>">
				<?php foreach ( $choices as $choice_value => $choice_label ) : ?>
					<option value="<?php echo esc_attr( $choice_value ); ?>" <?php selected( $current, $choice_value ); ?>><?php echo esc_html( $choice_label ); ?></option>
				<?php endforeach; ?>
			</select>
		<?php elseif ( 'url' === $type ) : ?>
			<?php sbt_render_link_target_control( $name, $current ); ?>
		<?php else : ?>
			<input type="<?php echo esc_attr( $type ); ?>" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>">
		<?php endif; ?>
	</div>
	<?php
}

function sbt_render_menu_row( $path, $item, $overrides, $page_options, $is_child = false ) {
	$label_path = $path . '.label';
	$url_path = $path . '.url';
	$label = array_key_exists( $label_path, $overrides ) ? $overrides[ $label_path ] : ( $item['label'] ?? '' );
	$url = array_key_exists( $url_path, $overrides ) ? $overrides[ $url_path ] : ( $item['url'] ?? '' );
	$absolute_url = sbt_editable_url_value( $url );
	?>
	<div class="sbt-menu-item <?php echo $is_child ? 'sbt-menu-child' : ''; ?>">
		<div class="sbt-field-grid">
			<div class="sbt-field">
				<label>Etichetta menu</label>
				<input type="text" name="<?php echo esc_attr( SBT_OPTION . '[overrides][' . $label_path . ']' ); ?>" value="<?php echo esc_attr( $label ); ?>">
			</div>
			<div class="sbt-field">
				<label>Linked page</label>
				<?php sbt_render_link_target_control( SBT_OPTION . '[overrides][' . $url_path . ']', $absolute_url ); ?>
			</div>
			<?php if ( isset( $item['desc'] ) ) : ?>
				<?php $desc_path = $path . '.desc'; ?>
				<div class="sbt-field">
					<label>Descrizione dropdown</label>
					<input type="text" name="<?php echo esc_attr( SBT_OPTION . '[overrides][' . $desc_path . ']' ); ?>" value="<?php echo esc_attr( array_key_exists( $desc_path, $overrides ) ? $overrides[ $desc_path ] : $item['desc'] ); ?>">
				</div>
			<?php endif; ?>
		</div>
		<?php if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) : ?>
			<div class="sbt-submenu">
				<strong>Sottomenu</strong>
				<?php foreach ( $item['sub'] as $index => $child ) : ?>
					<?php sbt_render_menu_row( $path . '.sub.' . $index, $child, $overrides, $page_options, true ); ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php
}

function sbt_render_general_settings_tab( $data, $overrides ) {
	$plugin_status = sbt_syncbooking_plugin_status();
	$edit_mode = sbt_edit_mode();
	$subtheme = sbt_active_subtheme_key();
	$default_unit_label = 'theme02' === $subtheme ? 'Room' : ( $data['SITE']['unit_label'] ?? 'House' );
	$unit_overrides = array(
		'SITE.rental_mode'  => sbt_structural_override_value( $subtheme, 'SITE.rental_mode', 'units' ),
		'SITE.entire_label' => sbt_structural_override_value( $subtheme, 'SITE.entire_label', sbt_default_entire_label( $subtheme ) ),
		'SITE.unit_label'   => sbt_structural_override_value( $subtheme, 'SITE.unit_label', $default_unit_label ),
		'SITE.unit_count'   => sbt_structural_override_value( $subtheme, 'SITE.unit_count', $data['SITE']['unit_count'] ?? '3' ),
	);
	$unit_label = sbt_unit_label( $unit_overrides );
	$plural_label = sbt_unit_plural_label( $unit_label );
	$listing_slug = 'theme02' === $subtheme ? 'rooms' : sbt_unit_listing_slug_for_label( $unit_label );
	$unit_count = max( 1, min( 20, absint( $unit_overrides['SITE.unit_count'] ) ) );
	$unit_pages = sbt_custom_house_pages( $subtheme );
	$is_entire = 'entire' === $unit_overrides['SITE.rental_mode'];
	$entire_slug = sbt_entire_page_slug( $subtheme );
	$media_status = sbt_media_import_status();
	?>
	<div class="sbt-panel">
		<h2>General Settings</h2>
		<p class="sbt-muted">General theme options, required plugin status and sellable accommodation structure.</p>

		<div class="sbt-status <?php echo $plugin_status['active'] ? 'is-ok' : 'is-warning'; ?>">
			<span class="sbt-status__dot" aria-hidden="true"></span>
			<div>
				<strong>Plugin richiesto: SyncBooking</strong>
				<?php if ( $plugin_status['active'] ) : ?>
					<span><?php echo esc_html( $plugin_status['name'] ); ?> risulta attivo.</span>
				<?php elseif ( $plugin_status['installed'] ) : ?>
					<span><?php echo esc_html( $plugin_status['name'] ); ?> risulta installato ma non attivo. Attivalo da Plugin per completare la configurazione.</span>
				<?php else : ?>
					<span>Il plugin SyncBooking ufficiale di WordPress.org (<code>syncbooking</code>) non risulta installato. Il tema lo richiede per le funzioni di booking.</span>
				<?php endif; ?>
				<p style="margin:10px 0 0;">
					<a class="button <?php echo $plugin_status['active'] ? '' : 'button-primary'; ?>" href="<?php echo esc_url( $plugin_status['action_url'] ); ?>">
						<?php echo esc_html( $plugin_status['active'] ? 'Vai ai plugin' : ( $plugin_status['installed'] ? 'Attiva SyncBooking' : 'Installa SyncBooking' ) ); ?>
					</a>
				</p>
			</div>
		</div>

		<div class="sbt-grid">
			<div class="sbt-card">
				<h3>Assets online</h3>
				<p class="sbt-muted"><strong>Gli assets non sono inclusi nel tema/plugin.</strong> Il pacchetto contiene solo il tema: immagini, CSS, JavaScript, video e brochure vengono scaricati online dall'assets.zip del subtheme attivo e copiati negli uploads di WordPress.</p>
				<p class="sbt-muted">Fonte assets: <code><?php echo esc_html( sbt_remote_assets_zip_url( sbt_active_subtheme_key() ) ); ?></code>. Non esiste fallback locale: il download e l'estrazione avvengono a piccoli blocchi AJAX per evitare timeout nginx/PHP. Se il file online non risponde, l'import mostra errore e deve essere riprovato.</p>
				<?php if ( ! empty( $media_status['updated_at'] ) ) : ?>
					<p class="sbt-muted">
						Last import: <?php echo esc_html( $media_status['updated_at'] ); ?>.
						files extracted: <?php echo esc_html( $media_status['downloaded'] ?? 0 ); ?>,
						images registered: <?php echo esc_html( $media_status['registered'] ?? 0 ); ?>,
						already registered: <?php echo esc_html( $media_status['skipped'] ?? 0 ); ?>,
						errors: <?php echo esc_html( $media_status['failed'] ?? 0 ); ?>.
					</p>
				<?php else : ?>
					<p class="sbt-muted">Gli assets non sono ancora stati importati per questo subtheme.</p>
				<?php endif; ?>
				<div class="sbt-assets-import" data-nonce="<?php echo esc_attr( wp_create_nonce( 'sbt_assets_import' ) ); ?>" data-subtheme="<?php echo esc_attr( sbt_active_subtheme_key() ); ?>">
					<button type="button" class="button button-primary sbt-assets-import-button">
						Scarica assets.zip online a blocchi
					</button>
					<div class="sbt-assets-progress" style="display:none;" aria-hidden="true"><div class="sbt-assets-progress__bar"></div></div>
					<p class="sbt-muted sbt-assets-import-message"></p>
				</div>
				<p class="sbt-muted" style="margin-top:12px;">For email debugging, we recommend optional plugins such as <a href="https://wordpress.org/plugins/wp-mail-logging/" target="_blank" rel="noopener">WP Mail Logging</a> and <a href="https://wordpress.org/plugins/post-smtp/" target="_blank" rel="noopener">Post SMTP</a>.</p>
			</div>

			<div class="sbt-card">
				<h3>Edit mode</h3>
				<p class="sbt-muted">Choose how page content is edited. Header, menu, footer, fonts and palette stay inside Header & Menu.</p>
				<div class="sbt-mode-grid">
					<label class="sbt-mode-card">
						<span class="sbt-mode-title">
							<input type="radio" name="<?php echo esc_attr( SBT_OPTION ); ?>[edit_mode]" value="standard" <?php checked( $edit_mode, 'standard' ); ?>>
							Edit
						</span>
						<p class="sbt-muted">Clean frontend. Edit text, links, buttons and images from the admin fields.</p>
					</label>
					<label class="sbt-mode-card">
						<span class="sbt-mode-title">
							<input type="radio" name="<?php echo esc_attr( SBT_OPTION ); ?>[edit_mode]" value="visual" <?php checked( $edit_mode, 'visual' ); ?>>
							Visual Edit
						</span>
						<p class="sbt-muted">Show pencil controls to logged-in admins for inline text, image and URL editing.</p>
					</label>
				</div>
			</div>
			<div class="sbt-card">
				<h3>Sellable structure</h3>
				<p class="sbt-muted">Choose Entire or Rooms/Houses. If you choose Entire, unit count and extra accommodation pages are disabled.</p>
				<?php sbt_render_admin_fields( 'SITE', array(
					'rental_mode'  => $unit_overrides['SITE.rental_mode'],
					'entire_label' => $unit_overrides['SITE.entire_label'],
					'unit_label' => $unit_overrides['SITE.unit_label'],
					'unit_count' => $unit_overrides['SITE.unit_count'],
				), $unit_overrides ); ?>
				<script>
					document.addEventListener('DOMContentLoaded', function () {
						var mode = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.rental_mode]"]');
						var entire = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.entire_label]"]');
						var unitLabel = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.unit_label]"]');
						var unitCount = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.unit_count]"]');
						function field(el) { return el ? el.closest('.sbt-editor-field') : null; }
						function syncSaleMode() {
							var isEntire = mode && mode.value === 'entire';
							[field(entire)].forEach(function (row) { if (row) row.style.display = isEntire ? '' : 'none'; });
							[field(unitLabel), field(unitCount)].forEach(function (row) { if (row) row.style.display = isEntire ? 'none' : ''; });
						}
						if (mode) mode.addEventListener('change', syncSaleMode);
						syncSaleMode();
					});
				</script>
			</div>
			<div class="sbt-card">
				<h3>Sellable page names</h3>
				<p class="sbt-muted"><?php echo $is_entire ? 'Entire mode is active: these names are hidden and not used until you switch back to Rooms/Houses.' : 'If you select 3, the theme creates 3 pages. Choose the real name and slug source for each page here.'; ?></p>
				<div class="sbt-field-grid" data-sbt-unit-names>
					<?php for ( $number = 1; $number <= 20; $number++ ) : ?>
						<?php
						$default_title = sbt_unit_default_title( $unit_label, $number );
						$current_page = isset( $unit_pages[ $number - 1 ] ) && is_array( $unit_pages[ $number - 1 ] ) ? $unit_pages[ $number - 1 ] : array();
						$current_title = ! empty( $current_page['custom_title'] ) && ! empty( $current_page['title'] ) ? $current_page['title'] : $default_title;
						?>
						<div class="sbt-editor-field" data-sbt-unit-name-row="<?php echo esc_attr( (string) $number ); ?>" <?php echo $number > $unit_count ? 'style="display:none;"' : ''; ?>>
							<label>
								<?php echo esc_html( $default_title ); ?>
								<span class="sbt-field-path"><?php echo esc_html( 'name_' . $number ); ?></span>
							</label>
							<input type="text" class="large-text" name="<?php echo esc_attr( SBT_OPTION . '[unit_names][' . $number . ']' ); ?>" value="<?php echo esc_attr( $current_title ); ?>" placeholder="<?php echo esc_attr( $default_title ); ?>">
						</div>
					<?php endfor; ?>
				</div>
				<script>
					document.addEventListener('DOMContentLoaded', function () {
						var count = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.unit_count]"]');
						var mode = document.querySelector('[name="<?php echo esc_js( SBT_OPTION ); ?>[overrides][SITE.rental_mode]"]');
						var rows = document.querySelectorAll('[data-sbt-unit-name-row]');
						function syncRows() {
							var entire = mode && mode.value === 'entire';
							var active = parseInt(count && count.value ? count.value : '<?php echo esc_js( (string) $unit_count ); ?>', 10) || 1;
							rows.forEach(function (row) {
								var rowNumber = parseInt(row.getAttribute('data-sbt-unit-name-row'), 10);
								row.style.display = !entire && rowNumber <= active ? '' : 'none';
							});
						}
						if (count) count.addEventListener('change', syncRows);
						if (mode) mode.addEventListener('change', syncRows);
						syncRows();
					});
				</script>
			</div>
			<div class="sbt-card">
				<h3>Generated pages</h3>
				<?php if ( $is_entire ) : ?>
					<p class="sbt-muted">With this setup only the Entire page is used:</p>
					<p><code>/<?php echo esc_html( $entire_slug ); ?>/</code></p>
					<p><strong>Selected type:</strong> <?php echo esc_html( sbt_entire_label( $subtheme ) ); ?></p>
				<?php else : ?>
					<p class="sbt-muted">With this setup the listing page is used:</p>
					<p><code>/<?php echo esc_html( $listing_slug ); ?>/</code></p>
					<p class="sbt-muted">Detail pages are created in the selected count and use the names chosen in "Sellable page names".</p>
					<p><strong>Selected type:</strong> <?php echo esc_html( $plural_label ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<?php submit_button( 'Save General Settings' ); ?>
	</div>
	<?php
}

function sbt_render_header_menu_tab( $data, $overrides, $edit_language = 'en' ) {
	$page_options = sbt_page_file_options();
	?>
	<div class="sbt-panel">
		<?php sbt_render_section_language_tabs( 'header', $edit_language ); ?>
		<h2>Elementi header</h2>
		<p class="sbt-muted">Edit identity, logos, quick contacts and header text for the active subtheme.</p>
		<div class="sbt-field-grid">
			<?php
			sbt_render_header_field( 'SITE.name', 'Nome struttura', $data['SITE']['name'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.tagline', 'Tagline', $data['SITE']['tagline'] ?? '', $overrides );
			sbt_render_header_field( 'IMG.logo', 'Logo header URL', $data['IMG']['logo'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'IMG.logo_foot', 'Logo footer URL', $data['IMG']['logo_foot'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.wa', 'WhatsApp URL', $data['SITE']['wa'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.whatsapp_label', 'Testo WhatsApp', $data['SITE']['whatsapp_label'] ?? 'WhatsApp', $overrides );
			sbt_render_header_field( 'SITE.phone1', 'Telefono principale', $data['SITE']['phone1'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.email', 'Email', $data['SITE']['email'] ?? '', $overrides, 'email' );
			?>
		</div>
		<h2 style="margin-top:28px;">Font e palette tema</h2>
		<p class="sbt-muted">These values control the base colors and fonts used by the active subtheme.</p>
		<div class="sbt-field-grid">
			<?php
			sbt_render_header_field( 'SITE.font_pairing', 'Font tema', $data['SITE']['font_pairing'] ?? 'classic', $overrides, 'select', array(
				'classic' => 'Classic resort - Cormorant + Jost',
				'elegant' => 'Elegant - Georgia + Jost',
				'modern' => 'Modern - Jost completo',
				'editorial' => 'Editorial - Cormorant + System',
			) );
			?>
		</div>
		<div class="sbt-palette-grid" style="margin-top:14px;">
			<?php
			sbt_render_header_field( 'SITE.color_bg', 'Sfondo pagina', $data['SITE']['color_bg'] ?? '#f6f2ea', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_surface', 'Sfondo sezioni', $data['SITE']['color_surface'] ?? '#fbf8f2', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_ink', 'Testo principale', $data['SITE']['color_ink'] ?? '#2b2723', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_muted', 'Testo secondario', $data['SITE']['color_muted'] ?? '#7d7468', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_line', 'Linee e bordi', $data['SITE']['color_line'] ?? '#e6dfd2', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_primary', 'Colore primario bottoni', $data['SITE']['color_primary'] ?? '#8a463f', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_primary_deep', 'Primario scuro', $data['SITE']['color_primary_deep'] ?? '#6f3631', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_primary_soft', 'Primario morbido', $data['SITE']['color_primary_soft'] ?? '#a8645a', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_accent', 'Accento/overline', $data['SITE']['color_accent'] ?? '#b47e6e', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_gold', 'Oro dettagli', $data['SITE']['color_gold'] ?? '#a98c5b', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_header', 'Header scroll', $data['SITE']['color_header'] ?? '#9c4733', $overrides, 'color' );
			sbt_render_header_field( 'SITE.color_header_deep', 'Header menu mobile/dropdown', $data['SITE']['color_header_deep'] ?? '#863c2b', $overrides, 'color' );
			?>
		</div>
		<h2 style="margin-top:28px;">Menu alto</h2>
		<?php sbt_render_section_language_tabs( 'header', $edit_language ); ?>
		<p class="sbt-muted">Ogni voce puo avere etichetta e link diversi per language.</p>
		<?php foreach ( $data['NAV'] as $index => $item ) : ?>
			<?php sbt_render_menu_row( 'NAV.' . $index, $item, $overrides, $page_options ); ?>
		<?php endforeach; ?>
		<h2 style="margin-top:28px;">Footer e link</h2>
		<?php sbt_render_section_language_tabs( 'header', $edit_language ); ?>
		<p class="sbt-muted">Gestisci testi footer, link social, dati legali e link specifici per language.</p>
		<div class="sbt-field-grid">
			<?php
			sbt_render_header_field( 'TEXT.contacts', 'Titolo contatti footer', $data['TEXT']['contacts'] ?? 'Contacts', $overrides );
			sbt_render_header_field( 'TEXT.stay_in_touch', 'Titolo social footer', $data['TEXT']['stay_in_touch'] ?? 'Stay in touch', $overrides );
			sbt_render_header_field( 'TEXT.privacy_policy', 'Privacy policy label', $data['TEXT']['privacy_policy'] ?? 'Privacy Policy', $overrides );
			sbt_render_header_field( 'TEXT.all_rights_reserved', 'Diritti riservati label', $data['TEXT']['all_rights_reserved'] ?? 'All rights reserved', $overrides );
			sbt_render_header_field( 'SITE.address', 'Indirizzo footer', $data['SITE']['address'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.map', 'Link Google Maps', $data['SITE']['map'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.facebook', 'Facebook URL', $data['SITE']['facebook'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.instagram', 'Instagram URL', $data['SITE']['instagram'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.vat', 'VAT / Partita IVA', $data['SITE']['vat'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.cin', 'CIN', $data['SITE']['cin'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.year', 'Anno footer', $data['SITE']['year'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.webdev.label', 'Label link webdev', $data['SITE']['webdev']['label'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.webdev.url', 'URL link webdev', $data['SITE']['webdev']['url'] ?? '', $overrides, 'url' );
			?>
		</div>
		<?php submit_button( 'Save header and menu' ); ?>
	</div>
	<?php
}

function sbt_render_language_switcher( $tab, $active_language ) {
	?>
	<div class="sbt-actions" style="margin:0 0 18px;">
		<?php foreach ( sbt_enabled_languages() as $language ) : ?>
			<a class="button <?php echo $active_language === $language ? 'button-primary' : ''; ?>" href="<?php echo esc_url( add_query_arg( 'edit_lang', $language, sbt_admin_tab_url( $tab ) ) ); ?>"><?php echo esc_html( strtoupper( $language ) ); ?></a>
		<?php endforeach; ?>
	</div>
	<?php
}

function sbt_render_section_language_tabs( $tab, $active_language ) {
	?>
	<div class="sbt-section-tabs">
		<?php foreach ( sbt_enabled_languages() as $language ) : ?>
			<a class="button <?php echo $active_language === $language ? 'button-primary' : ''; ?>" href="<?php echo esc_url( add_query_arg( 'edit_lang', $language, sbt_admin_tab_url( $tab ) ) ); ?>"><?php echo esc_html( strtoupper( $language ) ); ?></a>
		<?php endforeach; ?>
	</div>
	<?php
}

function sbt_render_pages_tab() {
	$pages = sbt_page_templates();
	$languages = sbt_enabled_languages();
	$unit_label = sbt_unit_label( sbt_active_overrides( sbt_current_content_language() ) );
	$disabled_pages = sbt_disabled_theme_pages();
	?>
	<div class="sbt-panel">
		<h2>Pages of subtheme</h2>
		<p class="sbt-muted">Da qui vai direttamente alla modifica completa di Home e delle pagine interne. Ogni pagina apre l'editor unico con tab language.</p>
		<?php if ( in_array( sbt_active_subtheme_key(), array( 'theme01', 'theme02' ), true ) && ! sbt_is_entire_rental_mode() ) : ?>
			<h2 style="margin-top:24px;">Schede <?php echo esc_html( $unit_label ); ?></h2>
			<p class="sbt-muted">Queste schede vengono generate dal numero impostato in General Settings. Apri la scheda una volta sola: dentro l'editor trovi i tab language.</p>
			<table class="sbt-table" style="margin-bottom:28px;">
				<thead><tr><th><?php echo esc_html( $unit_label ); ?></th><th>Languages</th><th>Slug base</th><th>Status</th><th>Actions</th></tr></thead>
				<tbody>
					<?php foreach ( $pages as $slug => $page ) : ?>
						<?php if ( empty( $page['custom_house'] ) ) : ?>
							<?php continue; ?>
						<?php endif; ?>
						<?php
						$page_slug = sbt_language_page_slug( $slug, 'en' );
						$is_disabled = in_array( $slug, $disabled_pages, true );
						$post = sbt_theme_page_post( $slug, 'en' );
						$edit_url = $post ? add_query_arg( 'edit_lang', 'en', get_edit_post_link( $post->ID, '' ) ) : '';
						$missing_languages = array();
						if ( ! $is_disabled ) {
							foreach ( $languages as $language ) {
								if ( ! sbt_theme_page_post( $slug, $language ) ) {
									$missing_languages[] = strtoupper( $language );
								}
							}
						}
						?>
						<tr>
							<td><strong><?php echo esc_html( $page['title'] ); ?></strong></td>
							<td><?php echo esc_html( implode( ' / ', array_map( 'strtoupper', $languages ) ) ); ?></td>
							<td><code><?php echo esc_html( '/' . $page_slug . '/' ); ?></code></td>
							<td><?php echo $is_disabled ? 'Disattivata' : ( $missing_languages ? 'Mancano: ' . esc_html( implode( ', ', $missing_languages ) ) : 'Presente' ); ?></td>
							<td class="sbt-actions">
								<?php if ( $edit_url && ! $is_disabled ) : ?>
									<a class="button button-primary" href="<?php echo esc_url( $edit_url ); ?>">Edit page fields</a>
								<?php endif; ?>
								<?php if ( ! $is_disabled ) : ?>
									<a class="button" href="<?php echo esc_url( sbt_theme_page_public_url( $slug, 'en' ) ); ?>" target="_blank">Anteprima</a>
								<?php endif; ?>
								<button type="submit" class="button" name="<?php echo $is_disabled ? 'sbt_restore_theme_page_slug' : 'sbt_disable_theme_page_slug'; ?>" value="<?php echo esc_attr( $slug ); ?>">
									<?php echo $is_disabled ? 'Ripristina' : 'Disattiva'; ?>
								</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>

		<h2>Pagine interne</h2>
		<table class="sbt-table">
			<thead><tr><th>Page</th><th>Languages</th><th>Base slug</th><th>Status</th><th>Actions</th></tr></thead>
			<tbody>
				<?php foreach ( $pages as $slug => $page ) : ?>
					<?php if ( ! empty( $page['custom_house'] ) ) : ?>
						<?php continue; ?>
					<?php endif; ?>
					<?php
					$page_slug = sbt_language_page_slug( $slug, 'en' );
					$is_disabled = in_array( $slug, $disabled_pages, true );
					$post = sbt_theme_page_post( $slug, 'en' );
					$edit_url = $post ? add_query_arg( 'edit_lang', 'en', get_edit_post_link( $post->ID, '' ) ) : '';
					$missing_languages = array();
					if ( ! $is_disabled ) {
						foreach ( $languages as $language ) {
							if ( ! sbt_theme_page_post( $slug, $language ) ) {
								$missing_languages[] = strtoupper( $language );
							}
						}
					}
					?>
					<tr>
						<td><strong><?php echo esc_html( $page['title'] ); ?></strong></td>
						<td><?php echo esc_html( implode( ' / ', array_map( 'strtoupper', $languages ) ) ); ?></td>
						<td><code><?php echo esc_html( '/' . $page_slug . '/' ); ?></code></td>
						<td><?php echo $is_disabled ? 'Disattivata' : ( $missing_languages ? 'Mancano: ' . esc_html( implode( ', ', $missing_languages ) ) : 'Presente' ); ?></td>
						<td class="sbt-actions">
							<?php if ( $edit_url && ! $is_disabled ) : ?>
								<a class="button button-primary" href="<?php echo esc_url( $edit_url ); ?>">Edit page fields</a>
							<?php endif; ?>
							<?php if ( ! $is_disabled ) : ?>
								<a class="button" href="<?php echo esc_url( sbt_theme_page_public_url( $slug, 'en' ) ); ?>" target="_blank">Anteprima</a>
							<?php endif; ?>
							<?php if ( 'home' !== $slug ) : ?>
								<button type="submit" class="button" name="<?php echo $is_disabled ? 'sbt_restore_theme_page_slug' : 'sbt_disable_theme_page_slug'; ?>" value="<?php echo esc_attr( $slug ); ?>">
									<?php echo $is_disabled ? 'Ripristina' : 'Disattiva'; ?>
								</button>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php submit_button( 'Crea/aggiorna pagine modello' ); ?>
	</div>
	<?php
}

function sbt_render_admin_page() {
	if ( isset( $_POST['sbt_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sbt_nonce'] ) ), 'sbt_save' ) && current_user_can( 'edit_theme_options' ) ) {
		$raw_options = $_POST[ SBT_OPTION ] ?? array();
		$selected_subtheme = isset( $raw_options['subtheme'] ) ? sanitize_key( wp_unslash( $raw_options['subtheme'] ) ) : sbt_active_subtheme_key();

		$sbt_action = isset( $_POST['sbt_action'] ) ? sanitize_key( wp_unslash( $_POST['sbt_action'] ) ) : '';
		if ( isset( $_POST['sbt_delete_house_slug'] ) ) {
			if ( sbt_delete_custom_house_page( sanitize_title( wp_unslash( $_POST['sbt_delete_house_slug'] ) ) ) ) {
				echo '<div class="notice notice-success is-dismissible"><p>House cancellata.</p></div>';
			}
		} elseif ( isset( $_POST['sbt_disable_theme_page_slug'] ) ) {
			if ( sbt_disable_theme_page( sanitize_title( wp_unslash( $_POST['sbt_disable_theme_page_slug'] ) ), $selected_subtheme ) ) {
				echo '<div class="notice notice-success is-dismissible"><p>Pagina disattivata e spostata nel cestino per tutte le lingue.</p></div>';
			} else {
				echo '<div class="notice notice-error is-dismissible"><p>Impossibile disattivare questa pagina.</p></div>';
			}
		} elseif ( isset( $_POST['sbt_restore_theme_page_slug'] ) ) {
			if ( sbt_restore_theme_page( sanitize_title( wp_unslash( $_POST['sbt_restore_theme_page_slug'] ) ), $selected_subtheme ) ) {
				echo '<div class="notice notice-success is-dismissible"><p>Pagina ripristinata per le lingue attive.</p></div>';
			} else {
				echo '<div class="notice notice-error is-dismissible"><p>Impossibile ripristinare questa pagina.</p></div>';
			}
		} elseif ( 'reset_active_template' === $sbt_action ) {
			if ( sbt_reset_subtheme_template( $selected_subtheme ) ) {
				echo '<div class="notice notice-success is-dismissible"><p>Original template restored for the selected subtheme.</p></div>';
			}
		} else {
			update_option( SBT_OPTION, sbt_sanitize_options( $raw_options ) );
			sbt_sync_custom_house_pages();
			sbt_create_theme_pages();
			echo '<div class="notice notice-success is-dismissible"><p>SyncBooking settings saved.</p></div>';
		}
	}

	$subthemes = sbt_subthemes();
	$active = sbt_active_subtheme_key();
	$active_tab = sbt_admin_current_tab();
	$edit_language = sbt_current_content_language();
	$form_edit_language = 'general' === $active_tab ? 'en' : $edit_language;
	$overrides = sbt_active_overrides( $edit_language );
	$data = sbt_load_active_data();

	sbt_render_admin_shell_start( $active_tab );
	?>
		<form method="post">
			<?php wp_nonce_field( 'sbt_save', 'sbt_nonce' ); ?>
			<input type="hidden" name="<?php echo esc_attr( SBT_OPTION ); ?>[subtheme]" value="<?php echo esc_attr( $active ); ?>">
			<input type="hidden" name="<?php echo esc_attr( SBT_OPTION ); ?>[edit_language]" value="<?php echo esc_attr( $form_edit_language ); ?>">
			<?php
			if ( 'themes' === $active_tab ) {
				sbt_render_theme_tab( $active, $subthemes );
			} elseif ( 'general' === $active_tab ) {
				sbt_render_general_settings_tab( $data, $overrides );
			} elseif ( 'header' === $active_tab ) {
				sbt_render_header_menu_tab( $data, $overrides, $edit_language );
			} elseif ( 'pages' === $active_tab ) {
				sbt_render_pages_tab();
			}
			?>
		</form>
	</div>
	<?php
}

function sbt_humanize_key( $key ) {
	$labels = array(
		'cta'              => 'Call to action',
		'cta_label'        => 'Testo pulsante',
		'cta_url'          => 'Link pulsante',
		'img'              => 'Immagine',
		'image'            => 'Immagine',
		'logo'             => 'Logo',
		'logo_foot'        => 'Logo footer',
		'favicon'          => 'Favicon',
		'supertitle'       => 'Sopratitolo',
		'subtitle'         => 'Sottotitolo',
		'body'             => 'Testo',
		'text'             => 'Testo',
		'desc'             => 'Descrizione',
		'description'      => 'Descrizione',
		'title'            => 'Titolo',
		'label'            => 'Etichetta',
		'url'              => 'Link',
		'menu'             => 'Menu',
		'gallery'          => 'Gallery',
		'wedding_gallery'  => 'Gallery wedding',
		'phone'            => 'Telefono',
		'email'            => 'Email',
		'address'          => 'Indirizzo',
		'whatsapp_label'   => 'Testo WhatsApp',
		'unit_label'       => 'Room / House type',
		'unit_count'       => 'Number of rooms / houses',
		'rental_mode'      => 'Sale mode',
		'entire_label'     => 'Entire type',
	);

	$key = strtolower( (string) $key );
	if ( isset( $labels[ $key ] ) ) {
		return $labels[ $key ];
	}

	return ucwords( str_replace( array( '_', '-' ), ' ', (string) $key ) );
}

function sbt_friendly_field_label( $label, $path ) {
	$parts = explode( '.', (string) $path );
	$key = '' !== (string) $label ? (string) $label : end( $parts );
	return sbt_humanize_key( $key );
}

function sbt_field_kind( $path, $value ) {
	$key = basename( str_replace( '.', '/', (string) $path ) );
	$key = strtolower( $key );

	if ( sbt_is_gallery_field( $path, $value ) ) {
		return 'gallery';
	}

	if ( sbt_is_image_field( $path, $value ) ) {
		return 'image';
	}

	$map = array(
		'h1'       => 'h1',
		'hero_h1'  => 'h1',
		'h2'       => 'h2',
		'intro_h2' => 'h2',
		'houses_h2'=> 'h2',
		'services_h2' => 'h2',
		'band_h2' => 'h2',
		'offers_h2' => 'h2',
		'cta_h2'   => 'h2',
		'title'    => 'title',
		'hero_over'=> 'overline',
		'over'     => 'overline',
		'intro_over' => 'overline',
		'cta_over' => 'overline',
		'label'    => 'label',
		'cta_label'=> 'button',
		'cta_btn'  => 'button',
		'url'      => 'url',
		'cta_url'  => 'url',
		'map'      => 'url',
		'map_embed'=> 'url',
		'unit_count' => 'number',
		'unit_label' => 'select',
		'rental_mode' => 'select',
		'entire_label' => 'select',
	);

	if ( isset( $map[ $key ] ) ) {
		return $map[ $key ];
	}

	if ( is_string( $key ) && preg_match( '/(^|_)url$/', $key ) ) {
		return 'url';
	}

	return 'text';
}

function sbt_next_field_alias( $path, $value, &$counters ) {
	$kind = sbt_field_kind( $path, $value );
	if ( ! isset( $counters[ $kind ] ) ) {
		$counters[ $kind ] = 0;
	}

	$counters[ $kind ]++;
	return $kind . '_' . $counters[ $kind ];
}

function sbt_current_admin_value( $path, $value, $overrides ) {
	$current = array_key_exists( $path, $overrides ) ? $overrides[ $path ] : ( sbt_is_scalar_list( $value ) ? implode( "\n", $value ) : $value );
	return 'url' === sbt_field_kind( $path, $value ) ? sbt_editable_url_value( $current ) : $current;
}

function sbt_value_lines( $value ) {
	if ( is_array( $value ) ) {
		return array_values( array_filter( array_map( 'strval', $value ) ) );
	}

	return array_values( array_filter( array_map( 'trim', preg_split( '/\r\n|\r|\n/', (string) $value ) ) ) );
}

function sbt_is_image_string( $value ) {
	return is_string( $value ) && (bool) preg_match( '/\.(jpe?g|png|gif|webp|avif|svg)(\?.*)?$/i', $value );
}

function sbt_is_image_field( $path, $value ) {
	$lower = strtolower( (string) $path );
	$last = basename( str_replace( '.', '/', $lower ) );
	$image_keys = array( 'img', 'image', 'logo', 'logo_foot', 'favicon', 'banner', 'main', 'cta_bg', 'welcome', 'lunch', 'spa', 'villa', 'room', 'room2', 'garden', 'a1', 'a5' );

	if ( in_array( $last, $image_keys, true ) ) {
		return true;
	}

	return sbt_is_image_string( $value );
}

function sbt_is_gallery_field( $path, $value ) {
	$lower = strtolower( (string) $path );
	if ( false !== strpos( $lower, 'gallery' ) ) {
		return true;
	}

	if ( ! sbt_is_scalar_list( $value ) ) {
		return false;
	}

	foreach ( $value as $item ) {
		if ( ! sbt_is_image_string( $item ) ) {
			return false;
		}
	}

	return true;
}

function sbt_render_admin_fields( $path, $value, $overrides, $title = '' ) {
	$counters = array();
	if ( '' !== $title ) {
		echo '<h2 class="sbt-section-title"><span>' . esc_html( $title ) . '</span></h2>';
	}

	if ( is_array( $value ) && ! sbt_is_scalar_list( $value ) ) {
		echo '<div class="sbt-editor-block">';
		foreach ( $value as $key => $child ) {
			$child_path = '' === $path ? (string) $key : $path . '.' . $key;
			if ( is_array( $child ) && ! sbt_is_scalar_list( $child ) ) {
				echo '<details open><summary><span class="sbt-section-title"><strong>' . esc_html( sbt_humanize_key( $key ) ) . '</strong></span></summary>';
				sbt_render_admin_fields( $child_path, $child, $overrides );
				echo '</details>';
			} else {
				sbt_render_single_admin_field( $child_path, $key, $child, $overrides, sbt_next_field_alias( $child_path, $child, $counters ) );
			}
		}
		echo '</div>';
		return;
	}

	sbt_render_single_admin_field( $path, basename( str_replace( '.', '/', $path ) ), $value, $overrides, sbt_next_field_alias( $path, $value, $counters ) );
}

function sbt_render_single_admin_field( $path, $label, $value, $overrides, $field_alias = '' ) {
	$current = sbt_current_admin_value( $path, $value, $overrides );
	$name = SBT_OPTION . '[overrides][' . $path . ']';
	$friendly_label = sbt_friendly_field_label( $label, $path );
	$is_gallery = sbt_is_gallery_field( $path, $value );
	$is_image = ! $is_gallery && sbt_is_image_field( $path, $current );
	$is_long = is_string( $current ) && ( false !== strpos( $current, "\n" ) || strlen( wp_strip_all_tags( $current ) ) > 90 );
	?>
	<div class="sbt-editor-field">
		<label>
			<?php echo esc_html( $friendly_label ); ?>
			<span class="sbt-field-path"><?php echo esc_html( $field_alias ); ?></span>
		</label>
		<?php if ( 'SITE.unit_label' === $path ) : ?>
			<select name="<?php echo esc_attr( $name ); ?>" class="large-text">
				<?php foreach ( sbt_unit_label_options() as $value => $label ) : ?>
					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $current, $value ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>
		<?php elseif ( 'SITE.rental_mode' === $path ) : ?>
			<select name="<?php echo esc_attr( $name ); ?>" class="large-text">
				<option value="units" <?php selected( $current, 'units' ); ?>>Rooms / Houses only</option>
				<option value="entire" <?php selected( $current, 'entire' ); ?>>Entire property only</option>
			</select>
		<?php elseif ( 'SITE.entire_label' === $path ) : ?>
			<select name="<?php echo esc_attr( $name ); ?>" class="large-text">
				<?php foreach ( sbt_entire_label_options() as $value => $label ) : ?>
					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $current, $value ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
			</select>
		<?php elseif ( 'SITE.unit_count' === $path ) : ?>
			<select name="<?php echo esc_attr( $name ); ?>" class="large-text">
				<?php for ( $count = 1; $count <= 20; $count++ ) : ?>
					<option value="<?php echo esc_attr( (string) $count ); ?>" <?php selected( (string) $current, (string) $count ); ?>><?php echo esc_html( (string) $count ); ?></option>
				<?php endfor; ?>
			</select>
		<?php elseif ( $is_gallery ) : ?>
			<?php $gallery_urls = sbt_value_lines( $current ); ?>
			<span class="sbt-gallery-control">
				<textarea name="<?php echo esc_attr( $name ); ?>" class="sbt-gallery-value" hidden><?php echo esc_textarea( implode( "\n", $gallery_urls ) ); ?></textarea>
				<span class="sbt-gallery-list">
					<?php foreach ( $gallery_urls as $url ) : ?>
						<span class="sbt-gallery-item" data-url="<?php echo esc_attr( $url ); ?>">
							<button type="button" class="button-link-delete sbt-gallery-remove">x</button>
							<img src="<?php echo esc_url( $url ); ?>" alt="">
						</span>
					<?php endforeach; ?>
				</span>
				<span class="sbt-gallery-empty" <?php echo $gallery_urls ? 'style="display:none;"' : ''; ?>>No image selected.</span>
				<span class="sbt-gallery-actions">
					<button type="button" class="button sbt-gallery-pick">Aggiungi immagini</button>
				</span>
			</span>
		<?php elseif ( $is_image ) : ?>
			<span class="sbt-media-control">
				<span class="sbt-media-preview">
					<?php if ( $current ) : ?>
						<img src="<?php echo esc_url( $current ); ?>" alt="">
					<?php endif; ?>
				</span>
				<input type="hidden" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>" class="sbt-media-value">
				<p class="sbt-media-hint"><?php echo $current ? 'Image selected.' : 'No image selected.'; ?></p>
				<span class="sbt-media-actions">
					<button type="button" class="button sbt-media-pick"><?php echo $current ? 'Replace image' : 'Choose image'; ?></button>
					<button type="button" class="button sbt-media-clear">Rimuovi</button>
				</span>
			</span>
		<?php elseif ( $is_long ) : ?>
			<textarea name="<?php echo esc_attr( $name ); ?>" rows="4" class="large-text"><?php echo esc_textarea( $current ); ?></textarea>
		<?php elseif ( 'url' === sbt_field_kind( $path, $value ) ) : ?>
			<?php sbt_render_link_target_control( $name, $current ); ?>
		<?php else : ?>
			<input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>" class="large-text">
		<?php endif; ?>
	</div>
	<?php
}
