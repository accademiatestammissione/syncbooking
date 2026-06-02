<?php
/**
 * WordPress bridge for SyncBooking multi-subtheme package.
 *
 * @package SyncBookingTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SBT_VERSION', '1.1.0' );
define( 'SBT_OPTION', 'syncbooking_theme_options' );

function sbt_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'sbt_setup' );

function sbt_subthemes() {
	return array(
		'theme01' => array(
			'label' => 'Villa Rosa Resort',
			'dir'   => 'theme01',
			'pages' => array(
				'home'                => array( 'title' => 'Home', 'file' => 'index.php' ),
				'villa'               => array( 'title' => 'Villa', 'file' => 'villa.php', 'content_key' => 'villa' ),
				'houses'              => array( 'title' => 'Houses', 'file' => 'houses.php', 'content_key' => 'houses' ),
				'house-for-2'         => array( 'title' => 'Houses for 2', 'file' => 'house-for-2.php', 'content_key' => 'house2' ),
				'house-for-3'         => array( 'title' => 'Houses for 3', 'file' => 'house-for-3.php', 'content_key' => 'house3' ),
				'house-for-4'         => array( 'title' => 'Houses for 4', 'file' => 'house-for-4.php', 'content_key' => 'house4' ),
				'price-and-condition' => array( 'title' => 'Price & Condition', 'file' => 'price-and-condition.php', 'content_key' => 'price' ),
				'spa-wellness'        => array( 'title' => 'SPA & Wellness', 'file' => 'spa-wellness.php', 'content_key' => 'spa' ),
				'experiences'         => array( 'title' => 'Experiences', 'file' => 'experiences.php', 'content_key' => 'experiences' ),
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
				'hospitality'         => array( 'title' => 'Hospitality', 'file' => 'hospitality.php', 'content_key' => 'hospitality' ),
				'events-weddings'     => array( 'title' => 'Events & Weddings', 'file' => 'events-weddings.php', 'content_key' => 'events' ),
				'wedding-in-masseria' => array( 'title' => 'Wedding in Masseria', 'file' => 'wedding-in-masseria.php', 'content_key' => 'wedding' ),
				'partys-meeting'      => array( 'title' => 'Partys & Meeting', 'file' => 'partys-meeting.php', 'content_key' => 'partys' ),
				'surroundings'        => array( 'title' => 'Surroundings', 'file' => 'surroundings.php', 'content_key' => 'surroundings' ),
				'contacts'            => array( 'title' => 'Contacts', 'file' => 'contacts.php', 'content_key' => 'contacts' ),
			),
		),
	);
}

function sbt_default_options() {
	return array(
		'subtheme'  => 'theme01',
		'overrides' => array(),
	);
}

function sbt_get_options() {
	$options = get_option( SBT_OPTION, array() );
	return wp_parse_args( is_array( $options ) ? $options : array(), sbt_default_options() );
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

function sbt_subtheme_path( $path = '' ) {
	$subtheme = sbt_active_subtheme();
	return get_template_directory() . '/subthemes/' . $subtheme['dir'] . ( '' === $path ? '' : '/' . ltrim( $path, '/' ) );
}

function sbt_asset_url( $path ) {
	$subtheme = sbt_active_subtheme();
	return get_template_directory_uri() . '/subthemes/' . $subtheme['dir'] . '/' . ltrim( $path, '/' );
}

function sbt_media_base_url() {
	$uploads = wp_get_upload_dir();
	$key = sbt_active_subtheme_key();
	$target = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $key . '/';

	if ( is_dir( $target ) ) {
		return trailingslashit( $uploads['baseurl'] ) . 'syncbooking-theme/' . $key . '/';
	}

	return sbt_asset_url( 'assets/uploads/' );
}

function sbt_page_templates() {
	$subtheme = sbt_active_subtheme();
	return $subtheme['pages'];
}

function sbt_page_map() {
	$map = array();
	foreach ( sbt_page_templates() as $slug => $page ) {
		$map[ $page['file'] ] = $slug;
	}
	return $map;
}

function sbt_url( $url ) {
	$map = sbt_page_map();
	$file = strtok( (string) $url, '#' );
	$hash = false === strpos( (string) $url, '#' ) ? '' : '#' . substr( (string) $url, strpos( (string) $url, '#' ) + 1 );

	if ( isset( $map[ $file ] ) ) {
		return 'home' === $map[ $file ] ? home_url( '/' ) . $hash : home_url( '/' . $map[ $file ] . '/' ) . $hash;
	}

	return $url;
}

function sbt_copy_directory( $source, $target ) {
	if ( ! is_dir( $target ) ) {
		wp_mkdir_p( $target );
	}

	$items = scandir( $source );
	if ( false === $items ) {
		return;
	}

	foreach ( $items as $item ) {
		if ( '.' === $item || '..' === $item ) {
			continue;
		}

		$from = trailingslashit( $source ) . $item;
		$to = trailingslashit( $target ) . $item;

		if ( is_dir( $from ) ) {
			sbt_copy_directory( $from, $to );
		} elseif ( ! file_exists( $to ) ) {
			copy( $from, $to );
		}
	}
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

		$path = $file->getPathname();
		$type = wp_check_filetype( $path );
		if ( empty( $type['type'] ) || 0 !== strpos( $type['type'], 'image/' ) ) {
			continue;
		}

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
			continue;
		}

		$attachment_id = wp_insert_attachment( array(
			'post_mime_type' => $type['type'],
			'post_title'     => sanitize_file_name( pathinfo( $path, PATHINFO_FILENAME ) ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		), $path );

		if ( is_wp_error( $attachment_id ) ) {
			continue;
		}

		update_post_meta( $attachment_id, '_sbt_bundled_media_path', wp_normalize_path( $relative ) );
		wp_update_attachment_metadata( $attachment_id, wp_generate_attachment_metadata( $attachment_id, $path ) );
	}
}

function sbt_install_upload_assets() {
	$uploads = wp_get_upload_dir();

	foreach ( sbt_subthemes() as $key => $subtheme ) {
		$source = get_template_directory() . '/subthemes/' . $subtheme['dir'] . '/assets/uploads';
		if ( ! is_dir( $source ) ) {
			continue;
		}

		$target = trailingslashit( $uploads['basedir'] ) . 'syncbooking-theme/' . $key;
		sbt_copy_directory( $source, $target );
		sbt_register_upload_assets( $target, $key );
	}
}
add_action( 'after_switch_theme', 'sbt_install_upload_assets' );

function sbt_create_theme_pages() {
	foreach ( sbt_page_templates() as $slug => $page ) {
		if ( get_page_by_path( $slug ) ) {
			continue;
		}

		wp_insert_post( array(
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_title'   => $page['title'],
			'post_name'    => $slug,
			'post_content' => '',
		) );
	}
}
add_action( 'after_switch_theme', 'sbt_create_theme_pages' );

function sbt_route_page_template( $template ) {
	if ( is_front_page() || is_home() ) {
		$front = locate_template( 'front-page.php' );
		return $front ? $front : $template;
	}

	if ( is_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		$pages = sbt_page_templates();
		if ( isset( $pages[ $slug ] ) ) {
			$file = sbt_subtheme_path( $pages[ $slug ]['file'] );
			return file_exists( $file ) ? $file : $template;
		}
	}

	return $template;
}
add_filter( 'template_include', 'sbt_route_page_template', 99 );

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

function sbt_active_overrides() {
	$options = sbt_get_options();
	$key = sbt_active_subtheme_key();
	$overrides = isset( $options['overrides'] ) && is_array( $options['overrides'] ) ? $options['overrides'] : array();
	return isset( $overrides[ $key ] ) && is_array( $overrides[ $key ] ) ? $overrides[ $key ] : array();
}

function sbt_bootstrap_content( &$IMG, &$SITE, &$NAV, &$C, &$HOUSE_CARDS = array(), &$SERVICES = array(), &$TEXT = array(), &$GALLERY = array(), &$WEDDING_GALLERY = array(), &$EXPERIENCES = array() ) {
	$overrides = sbt_active_overrides();

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
		if ( is_string( $child ) && in_array( (string) $key, array( 'url', 'cta_url' ), true ) ) {
			$child = sbt_url( $child );
		} else {
			sbt_rewrite_content_urls( $child );
		}
	}
}

function sbt_admin_menu() {
	add_theme_page( 'SyncBooking Theme', 'SyncBooking Theme', 'manage_options', 'syncbooking-theme', 'sbt_render_admin_page' );
}
add_action( 'admin_menu', 'sbt_admin_menu' );

function sbt_admin_shared_styles() {
	?>
	<style>
		.sbt-editor-block { background:#fff; border:1px solid #dcdcde; border-radius:8px; margin:12px 0 18px; padding:14px 16px; }
		.sbt-editor-block details { background:#f6f7f7; border:1px solid #dcdcde; border-radius:8px; margin:10px 0; padding:10px 12px; }
		.sbt-editor-field { margin:12px 0; }
		.sbt-editor-field label { display:block; font-weight:600; margin-bottom:5px; }
		.sbt-editor-field code { color:#646970; font-weight:400; }
		.sbt-editor-field input, .sbt-editor-field textarea { width:100%; }
	</style>
	<?php
}
add_action( 'admin_head', 'sbt_admin_shared_styles' );

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
		$sections[ 'C.' . $content_key ] = array(
			'title' => 'Contenuti pagina',
			'value' => $data['C'][ $content_key ],
		);
	}

	$theme = sbt_active_subtheme_key();
	if ( 'theme01' === $theme ) {
		if ( in_array( $slug, array( 'home', 'houses' ), true ) && ! empty( $data['HOUSE_CARDS'] ) ) {
			$sections['HOUSE_CARDS'] = array( 'title' => 'Card case', 'value' => $data['HOUSE_CARDS'] );
		}
		if ( 'home' === $slug && ! empty( $data['SERVICES'] ) ) {
			$sections['SERVICES'] = array( 'title' => 'Servizi', 'value' => $data['SERVICES'] );
		}
		if ( in_array( $slug, array( 'home', 'contacts', 'house-for-2', 'house-for-3', 'house-for-4', 'price-and-condition' ), true ) && ! empty( $data['TEXT'] ) ) {
			$sections['TEXT'] = array( 'title' => 'Testi fissi usati nella pagina', 'value' => $data['TEXT'] );
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

function sbt_render_page_editor_metabox( $post ) {
	wp_nonce_field( 'sbt_page_save', 'sbt_page_nonce' );

	$slug = $post->post_name;
	$pages = sbt_page_templates();
	if ( ! isset( $pages[ $slug ] ) ) {
		echo '<p>Questa pagina non appartiene al sottotema attivo. Seleziona un sottotema da <strong>Aspetto > SyncBooking Theme</strong> oppure usa uno slug pagina del tema.</p>';
		return;
	}

	$data = sbt_load_active_data();
	$sections = sbt_page_editor_sections( $slug, $data );
	$overrides = sbt_active_overrides();

	echo '<p>Editor unico per la pagina <strong>' . esc_html( $pages[ $slug ]['title'] ) . '</strong> del sottotema <strong>' . esc_html( sbt_active_subtheme()['label'] ) . '</strong>.</p>';
	echo '<input type="hidden" name="sbt_page_slug" value="' . esc_attr( $slug ) . '">';

	foreach ( $sections as $path => $section ) {
		sbt_render_admin_fields( $path, $section['value'], $overrides, $section['title'] );
	}
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
	if ( ! isset( sbt_page_templates()[ $slug ] ) ) {
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

	$data = sbt_load_active_data();
	$allowed_sections = sbt_page_editor_sections( $slug, $data );
	$allowed_prefixes = array_keys( $allowed_sections );

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
			$options['overrides'][ $key ][ $path ] = wp_kses_post( wp_unslash( $value ) );
		}
	}

	update_option( SBT_OPTION, $options );
}
add_action( 'save_post_page', 'sbt_save_page_editor_metabox' );

function sbt_sanitize_options( $raw ) {
	$options = sbt_default_options();
	$subthemes = sbt_subthemes();
	$subtheme = isset( $raw['subtheme'] ) ? sanitize_key( wp_unslash( $raw['subtheme'] ) ) : 'theme01';
	$options['subtheme'] = isset( $subthemes[ $subtheme ] ) ? $subtheme : 'theme01';

	$existing = sbt_get_options();
	$options['overrides'] = isset( $existing['overrides'] ) && is_array( $existing['overrides'] ) ? $existing['overrides'] : array();
	if ( ! isset( $options['overrides'][ $options['subtheme'] ] ) || ! is_array( $options['overrides'][ $options['subtheme'] ] ) ) {
		$options['overrides'][ $options['subtheme'] ] = array();
	}

	if ( isset( $raw['overrides'] ) && is_array( $raw['overrides'] ) ) {
		foreach ( $raw['overrides'] as $key => $value ) {
			$key = sanitize_text_field( wp_unslash( $key ) );
			if ( is_string( $value ) ) {
				$options['overrides'][ $options['subtheme'] ][ $key ] = wp_kses_post( wp_unslash( $value ) );
			}
		}
	}

	return $options;
}

function sbt_admin_current_tab() {
	$tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'themes';
	return in_array( $tab, array( 'themes', 'header', 'pages', 'advanced' ), true ) ? $tab : 'themes';
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

function sbt_theme_page_edit_url( $slug ) {
	$page = get_page_by_path( $slug );
	if ( ! $page ) {
		return '';
	}

	return get_edit_post_link( $page->ID, '' );
}

function sbt_theme_page_public_url( $slug ) {
	return 'home' === $slug ? home_url( '/' ) : home_url( '/' . $slug . '/' );
}

function sbt_page_file_options() {
	$options = array();
	foreach ( sbt_page_templates() as $slug => $page ) {
		$options[ $page['file'] ] = $page['title'] . ' (/' . ( 'home' === $slug ? '' : $slug . '/' ) . ')';
	}
	return $options;
}

function sbt_render_admin_shell_start( $active_tab ) {
	$tabs = array(
		'themes'   => 'Temi',
		'header'   => 'Header & Menu',
		'pages'    => 'Pages',
		'advanced' => 'Avanzate',
	);
	?>
	<style>
		.sbt-wrap { max-width: 1320px; }
		.sbt-tabs { display:flex; gap:8px; margin:22px 0 18px; border-bottom:1px solid #dcdcde; }
		.sbt-tab { border:1px solid transparent; border-bottom:0; color:#1d2327; display:inline-flex; font-weight:600; padding:12px 16px; text-decoration:none; }
		.sbt-tab.is-active { background:#fff; border-color:#dcdcde; border-radius:6px 6px 0 0; margin-bottom:-1px; }
		.sbt-panel { background:#fff; border:1px solid #dcdcde; border-radius:8px; padding:22px; }
		.sbt-grid { display:grid; gap:16px; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); }
		.sbt-card { border:1px solid #dcdcde; border-radius:8px; padding:18px; position:relative; }
		.sbt-card.is-selected { border-color:#2271b1; box-shadow:0 0 0 1px #2271b1; }
		.sbt-card h3 { margin:0 0 8px; }
		.sbt-muted { color:#646970; }
		.sbt-field-grid { display:grid; gap:14px; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); }
		.sbt-field label { display:block; font-weight:600; margin-bottom:6px; }
		.sbt-field input, .sbt-field select, .sbt-field textarea { width:100%; }
		.sbt-table { border-collapse:collapse; width:100%; }
		.sbt-table th, .sbt-table td { border-bottom:1px solid #dcdcde; padding:12px; text-align:left; vertical-align:top; }
		.sbt-menu-item { background:#f6f7f7; border:1px solid #dcdcde; border-radius:8px; margin:0 0 12px; padding:14px; }
		.sbt-submenu { border-left:3px solid #dcdcde; margin:12px 0 0 18px; padding-left:14px; }
		.sbt-actions { display:flex; flex-wrap:wrap; gap:8px; }
		.sbt-advanced details { background:#fff; border:1px solid #dcdcde; border-radius:8px; margin:10px 0; padding:12px; }
	</style>
	<div class="wrap sbt-wrap">
		<h1>SyncBooking Theme</h1>
		<p class="sbt-muted">Gestisci sottotema, header, menu e pagine da una dashboard unica.</p>
		<nav class="sbt-tabs" aria-label="SyncBooking Theme">
			<?php foreach ( $tabs as $key => $label ) : ?>
				<a class="sbt-tab <?php echo $active_tab === $key ? 'is-active' : ''; ?>" href="<?php echo esc_url( sbt_admin_tab_url( $key ) ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
	<?php
}

function sbt_render_theme_tab( $active, $subthemes ) {
	?>
	<div class="sbt-panel">
		<h2>Scegli il sottotema</h2>
		<p class="sbt-muted">Ogni sottotema mantiene layout, header, footer, menu, pagine e contenuti modificabili separati.</p>
		<div class="sbt-grid">
			<?php foreach ( $subthemes as $key => $subtheme ) : ?>
				<label class="sbt-card <?php echo $active === $key ? 'is-selected' : ''; ?>">
					<input type="radio" name="<?php echo esc_attr( SBT_OPTION ); ?>[subtheme]" value="<?php echo esc_attr( $key ); ?>" <?php checked( $active, $key ); ?>>
					<h3><?php echo esc_html( $subtheme['label'] ); ?></h3>
					<p class="sbt-muted"><?php echo esc_html( count( $subtheme['pages'] ) ); ?> pagine modello incluse</p>
				</label>
			<?php endforeach; ?>
		</div>
		<?php submit_button( 'Salva tema selezionato' ); ?>
	</div>
	<?php
}

function sbt_render_header_field( $path, $label, $value, $overrides, $type = 'text' ) {
	$current = array_key_exists( $path, $overrides ) ? $overrides[ $path ] : $value;
	$name = SBT_OPTION . '[overrides][' . $path . ']';
	?>
	<div class="sbt-field">
		<label><?php echo esc_html( $label ); ?></label>
		<input type="<?php echo esc_attr( $type ); ?>" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>">
	</div>
	<?php
}

function sbt_render_menu_row( $path, $item, $overrides, $page_options, $is_child = false ) {
	$label_path = $path . '.label';
	$url_path = $path . '.url';
	$label = array_key_exists( $label_path, $overrides ) ? $overrides[ $label_path ] : ( $item['label'] ?? '' );
	$url = array_key_exists( $url_path, $overrides ) ? $overrides[ $url_path ] : ( $item['url'] ?? '' );
	?>
	<div class="sbt-menu-item <?php echo $is_child ? 'sbt-menu-child' : ''; ?>">
		<div class="sbt-field-grid">
			<div class="sbt-field">
				<label>Etichetta menu</label>
				<input type="text" name="<?php echo esc_attr( SBT_OPTION . '[overrides][' . $label_path . ']' ); ?>" value="<?php echo esc_attr( $label ); ?>">
			</div>
			<div class="sbt-field">
				<label>Pagina collegata</label>
				<select name="<?php echo esc_attr( SBT_OPTION . '[overrides][' . $url_path . ']' ); ?>">
					<?php foreach ( $page_options as $file => $page_label ) : ?>
						<option value="<?php echo esc_attr( $file ); ?>" <?php selected( $url, $file ); ?>><?php echo esc_html( $page_label ); ?></option>
					<?php endforeach; ?>
				</select>
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

function sbt_render_header_menu_tab( $data, $overrides ) {
	$page_options = sbt_page_file_options();
	?>
	<div class="sbt-panel">
		<h2>Elementi header</h2>
		<p class="sbt-muted">Modifica identità, loghi, contatti rapidi e voci del menu alto del sottotema attivo.</p>
		<div class="sbt-field-grid">
			<?php
			sbt_render_header_field( 'SITE.name', 'Nome struttura', $data['SITE']['name'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.tagline', 'Tagline', $data['SITE']['tagline'] ?? '', $overrides );
			sbt_render_header_field( 'IMG.logo', 'Logo header URL', $data['IMG']['logo'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'IMG.logo_foot', 'Logo footer URL', $data['IMG']['logo_foot'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.wa', 'WhatsApp URL', $data['SITE']['wa'] ?? '', $overrides, 'url' );
			sbt_render_header_field( 'SITE.whatsapp_label', 'Testo WhatsApp', $data['SITE']['whatsapp_label'] ?? 'WhatsApp', $overrides );
			sbt_render_header_field( 'SITE.lang_primary', 'Lingua primaria header', $data['SITE']['lang_primary'] ?? 'EN', $overrides );
			sbt_render_header_field( 'SITE.lang_secondary', 'Lingua secondaria header', $data['SITE']['lang_secondary'] ?? 'IT', $overrides );
			sbt_render_header_field( 'SITE.phone1', 'Telefono principale', $data['SITE']['phone1'] ?? '', $overrides );
			sbt_render_header_field( 'SITE.email', 'Email', $data['SITE']['email'] ?? '', $overrides, 'email' );
			?>
		</div>
		<h2 style="margin-top:28px;">Menu alto</h2>
		<p class="sbt-muted">Ogni voce deve puntare a una pagina modello presente nel sottotema attivo.</p>
		<?php foreach ( $data['NAV'] as $index => $item ) : ?>
			<?php sbt_render_menu_row( 'NAV.' . $index, $item, $overrides, $page_options ); ?>
		<?php endforeach; ?>
		<?php submit_button( 'Salva header e menu' ); ?>
	</div>
	<?php
}

function sbt_render_pages_tab() {
	?>
	<div class="sbt-panel">
		<h2>Pages del sottotema</h2>
		<p class="sbt-muted">Da qui vai direttamente alla modifica completa dei campi della singola pagina. Se manca una pagina, salva dal pannello per crearla automaticamente.</p>
		<table class="sbt-table">
			<thead><tr><th>Pagina</th><th>Slug</th><th>Stato</th><th>Azioni</th></tr></thead>
			<tbody>
				<?php foreach ( sbt_page_templates() as $slug => $page ) : ?>
					<?php
					$post = get_page_by_path( $slug );
					$edit_url = $post ? get_edit_post_link( $post->ID, '' ) : '';
					?>
					<tr>
						<td><strong><?php echo esc_html( $page['title'] ); ?></strong></td>
						<td><code><?php echo esc_html( '/' . ( 'home' === $slug ? '' : $slug . '/' ) ); ?></code></td>
						<td><?php echo $post ? 'Presente' : 'Da creare'; ?></td>
						<td class="sbt-actions">
							<?php if ( $edit_url ) : ?>
								<a class="button button-primary" href="<?php echo esc_url( $edit_url ); ?>">Modifica campi pagina</a>
							<?php endif; ?>
							<a class="button" href="<?php echo esc_url( sbt_theme_page_public_url( $slug ) ); ?>" target="_blank">Anteprima</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php submit_button( 'Crea/aggiorna pagine modello' ); ?>
	</div>
	<?php
}

function sbt_render_advanced_tab( $data, $overrides ) {
	?>
	<div class="sbt-panel sbt-advanced">
		<h2>Avanzate</h2>
		<p class="sbt-muted">Campi completi del sottotema attivo. Usa questa sezione per dati non presenti nei tab rapidi.</p>
		<?php
		sbt_render_admin_fields( 'SITE', $data['SITE'], $overrides, 'Dati generali' );
		sbt_render_admin_fields( 'IMG', $data['IMG'], $overrides, 'Immagini' );
		sbt_render_admin_fields( 'NAV', $data['NAV'], $overrides, 'Navigazione' );
		?>
		<?php submit_button( 'Salva avanzate' ); ?>
	</div>
	<?php
}

function sbt_render_admin_page() {
	if ( isset( $_POST['sbt_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sbt_nonce'] ) ), 'sbt_save' ) && current_user_can( 'manage_options' ) ) {
		update_option( SBT_OPTION, sbt_sanitize_options( $_POST[ SBT_OPTION ] ?? array() ) );
		sbt_create_theme_pages();
		sbt_install_upload_assets();
		echo '<div class="notice notice-success is-dismissible"><p>Impostazioni SyncBooking salvate.</p></div>';
	}

	$subthemes = sbt_subthemes();
	$active = sbt_active_subtheme_key();
	$overrides = sbt_active_overrides();
	$active_tab = sbt_admin_current_tab();
	$data = sbt_load_active_data();

	sbt_render_admin_shell_start( $active_tab );
	?>
		<form method="post">
			<?php wp_nonce_field( 'sbt_save', 'sbt_nonce' ); ?>
			<input type="hidden" name="<?php echo esc_attr( SBT_OPTION ); ?>[subtheme]" value="<?php echo esc_attr( $active ); ?>">
			<?php
			if ( 'themes' === $active_tab ) {
				sbt_render_theme_tab( $active, $subthemes );
			} elseif ( 'header' === $active_tab ) {
				sbt_render_header_menu_tab( $data, $overrides );
			} elseif ( 'pages' === $active_tab ) {
				sbt_render_pages_tab();
			} else {
				sbt_render_advanced_tab( $data, $overrides );
			}
			?>
		</form>
	</div>
	<?php
}

function sbt_render_admin_fields( $path, $value, $overrides, $title = '' ) {
	if ( '' !== $title ) {
		echo '<h2>' . esc_html( $title ) . '</h2>';
	}

	if ( is_array( $value ) && ! sbt_is_scalar_list( $value ) ) {
		echo '<div class="sbt-editor-block">';
		foreach ( $value as $key => $child ) {
			$child_path = '' === $path ? (string) $key : $path . '.' . $key;
			if ( is_array( $child ) && ! sbt_is_scalar_list( $child ) ) {
				echo '<details open><summary><strong>' . esc_html( $key ) . '</strong></summary>';
				sbt_render_admin_fields( $child_path, $child, $overrides );
				echo '</details>';
			} else {
				sbt_render_single_admin_field( $child_path, $key, $child, $overrides );
			}
		}
		echo '</div>';
		return;
	}

	sbt_render_single_admin_field( $path, basename( str_replace( '.', '/', $path ) ), $value, $overrides );
}

function sbt_render_single_admin_field( $path, $label, $value, $overrides ) {
	$current = array_key_exists( $path, $overrides ) ? $overrides[ $path ] : ( sbt_is_scalar_list( $value ) ? implode( "\n", $value ) : $value );
	$name = SBT_OPTION . '[overrides][' . $path . ']';
	$is_long = is_string( $current ) && ( false !== strpos( $current, "\n" ) || strlen( wp_strip_all_tags( $current ) ) > 90 || false !== strpos( strtolower( $path ), 'gallery' ) );
	?>
	<p class="sbt-editor-field">
		<label style="display:block;font-weight:600;margin-bottom:4px;"><?php echo esc_html( $label ); ?> <code><?php echo esc_html( $path ); ?></code></label>
		<?php if ( $is_long ) : ?>
			<textarea name="<?php echo esc_attr( $name ); ?>" rows="4" class="large-text"><?php echo esc_textarea( $current ); ?></textarea>
		<?php else : ?>
			<input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>" class="large-text">
		<?php endif; ?>
	</p>
	<?php
}
