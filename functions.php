<?php
/**
 * WordPress bridge for the original SyncBooking PHP theme.
 *
 * @package SyncBookingTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SBT_VERSION', '1.0.0' );
define( 'SBT_OPTION', 'syncbooking_theme_options' );

function sbt_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'sbt_setup' );

function sbt_default_options() {
	return array(
		'subtheme'  => 'villa_rosa',
		'overrides' => array(),
	);
}

function sbt_get_options() {
	$options = get_option( SBT_OPTION, array() );
	return wp_parse_args( is_array( $options ) ? $options : array(), sbt_default_options() );
}

function sbt_asset_url( $path ) {
	return get_template_directory_uri() . '/' . ltrim( $path, '/' );
}

function sbt_page_map() {
	return array(
		'index.php'               => 'home',
		'villa.php'               => 'villa',
		'houses.php'              => 'houses',
		'house-for-2.php'         => 'house-for-2',
		'house-for-3.php'         => 'house-for-3',
		'house-for-4.php'         => 'house-for-4',
		'price-and-condition.php' => 'price-and-condition',
		'spa-wellness.php'        => 'spa-wellness',
		'experiences.php'         => 'experiences',
		'surroundings.php'        => 'surroundings',
		'offers.php'              => 'offers',
		'contacts.php'            => 'contacts',
	);
}

function sbt_url( $url ) {
	$map  = sbt_page_map();
	$file = strtok( (string) $url, '#' );
	$hash = false === strpos( (string) $url, '#' ) ? '' : '#' . substr( (string) $url, strpos( (string) $url, '#' ) + 1 );

	if ( isset( $map[ $file ] ) ) {
		return 'home' === $map[ $file ] ? home_url( '/' ) . $hash : home_url( '/' . $map[ $file ] . '/' ) . $hash;
	}

	return $url;
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

function sbt_is_scalar_list( $value ) {
	return is_array( $value ) && array_values( $value ) === $value && 0 < count( $value ) && ! array_filter( $value, 'is_array' );
}

function sbt_bootstrap_content( &$IMG, &$SITE, &$NAV, &$C, &$HOUSE_CARDS, &$SERVICES, &$TEXT = array() ) {
	$options   = sbt_get_options();
	$overrides = isset( $options['overrides'] ) && is_array( $options['overrides'] ) ? $options['overrides'] : array();

	sbt_apply_flat_overrides( $IMG, 'IMG', $overrides );
	sbt_apply_flat_overrides( $SITE, 'SITE', $overrides );
	sbt_apply_flat_overrides( $NAV, 'NAV', $overrides );
	sbt_apply_flat_overrides( $C, 'C', $overrides );
	sbt_apply_flat_overrides( $HOUSE_CARDS, 'HOUSE_CARDS', $overrides );
	sbt_apply_flat_overrides( $SERVICES, 'SERVICES', $overrides );
	sbt_apply_flat_overrides( $TEXT, 'TEXT', $overrides );

	sbt_rewrite_content_urls( $NAV );
	sbt_rewrite_content_urls( $C );
	sbt_rewrite_content_urls( $HOUSE_CARDS );
}

function sbt_rewrite_content_urls( &$value ) {
	if ( is_array( $value ) ) {
		foreach ( $value as $key => &$child ) {
			if ( is_string( $child ) && in_array( (string) $key, array( 'url', 'cta_url' ), true ) ) {
				$child = sbt_url( $child );
			} else {
				sbt_rewrite_content_urls( $child );
			}
		}
	}
}

function sbt_page_templates() {
	return array(
		'home'                => array( 'title' => 'Home', 'file' => 'index.php' ),
		'villa'               => array( 'title' => 'Villa', 'file' => 'villa.php' ),
		'houses'              => array( 'title' => 'Houses', 'file' => 'houses.php' ),
		'house-for-2'         => array( 'title' => 'Houses for 2', 'file' => 'house-for-2.php' ),
		'house-for-3'         => array( 'title' => 'Houses for 3', 'file' => 'house-for-3.php' ),
		'house-for-4'         => array( 'title' => 'Houses for 4', 'file' => 'house-for-4.php' ),
		'price-and-condition' => array( 'title' => 'Price & Condition', 'file' => 'price-and-condition.php' ),
		'spa-wellness'        => array( 'title' => 'SPA & Wellness', 'file' => 'spa-wellness.php' ),
		'experiences'         => array( 'title' => 'Experiences', 'file' => 'experiences.php' ),
		'surroundings'        => array( 'title' => 'Surroundings', 'file' => 'surroundings.php' ),
		'offers'              => array( 'title' => 'Offers', 'file' => 'offers.php' ),
		'contacts'            => array( 'title' => 'Contacts', 'file' => 'contacts.php' ),
	);
}

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
		$slug  = get_post_field( 'post_name', get_queried_object_id() );
		$pages = sbt_page_templates();
		if ( isset( $pages[ $slug ] ) ) {
			$file = locate_template( $pages[ $slug ]['file'] );
			return $file ? $file : $template;
		}
	}

	return $template;
}
add_filter( 'template_include', 'sbt_route_page_template', 99 );

function sbt_admin_menu() {
	add_theme_page(
		'SyncBooking Theme',
		'SyncBooking Theme',
		'manage_options',
		'syncbooking-theme',
		'sbt_render_admin_page'
	);
}
add_action( 'admin_menu', 'sbt_admin_menu' );

function sbt_sanitize_options( $raw ) {
	$options = sbt_default_options();

	if ( isset( $raw['subtheme'] ) ) {
		$options['subtheme'] = 'villa_rosa';
	}

	if ( isset( $raw['overrides'] ) && is_array( $raw['overrides'] ) ) {
		foreach ( $raw['overrides'] as $key => $value ) {
			$key = sanitize_text_field( wp_unslash( $key ) );
			if ( is_string( $value ) ) {
				$options['overrides'][ $key ] = wp_kses_post( wp_unslash( $value ) );
			}
		}
	}

	return $options;
}

function sbt_render_admin_page() {
	if ( isset( $_POST['sbt_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sbt_nonce'] ) ), 'sbt_save' ) && current_user_can( 'manage_options' ) ) {
		update_option( SBT_OPTION, sbt_sanitize_options( $_POST[ SBT_OPTION ] ?? array() ) );
		echo '<div class="notice notice-success is-dismissible"><p>Impostazioni SyncBooking salvate.</p></div>';
	}

	require get_template_directory() . '/data_general.php';

	$options   = sbt_get_options();
	$overrides = $options['overrides'];
	?>
	<div class="wrap">
		<h1>SyncBooking Theme</h1>
		<p>Da qui puoi scegliere il sottotema e modificare testi, immagini, gallerie, contatti, menu e card usati dalle pagine del tema.</p>
		<form method="post">
			<?php wp_nonce_field( 'sbt_save', 'sbt_nonce' ); ?>
			<h2>Sottotema</h2>
			<select name="<?php echo esc_attr( SBT_OPTION ); ?>[subtheme]">
				<option value="villa_rosa" selected>Villa Rosa Resort</option>
			</select>
			<p class="description">Per adesso è disponibile un solo sottotema. La struttura è pronta per aggiungerne altri.</p>

			<?php
			sbt_render_admin_fields( 'SITE', $SITE, $overrides, 'Dati generali' );
			sbt_render_admin_fields( 'IMG', $IMG, $overrides, 'Immagini' );
			sbt_render_admin_fields( 'C', $C, $overrides, 'Testi e gallerie pagine' );
			sbt_render_admin_fields( 'TEXT', $TEXT, $overrides, 'Testi fissi template' );
			sbt_render_admin_fields( 'HOUSE_CARDS', $HOUSE_CARDS, $overrides, 'Card case' );
			sbt_render_admin_fields( 'SERVICES', $SERVICES, $overrides, 'Servizi' );
			sbt_render_admin_fields( 'NAV', $NAV, $overrides, 'Navigazione' );
			?>

			<?php submit_button( 'Salva tema' ); ?>
		</form>
	</div>
	<?php
}

function sbt_render_admin_fields( $path, $value, $overrides, $title = '' ) {
	if ( '' !== $title ) {
		echo '<h2>' . esc_html( $title ) . '</h2>';
	}

	if ( is_array( $value ) && ! sbt_is_scalar_list( $value ) ) {
		echo '<div style="border:1px solid #ccd0d4;background:#fff;padding:12px 16px;margin:12px 0 18px;">';
		foreach ( $value as $key => $child ) {
			$child_path = '' === $path ? (string) $key : $path . '.' . $key;
			if ( is_array( $child ) && ! sbt_is_scalar_list( $child ) ) {
				echo '<details style="margin:10px 0;" open><summary><strong>' . esc_html( $key ) . '</strong></summary>';
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
	$name    = SBT_OPTION . '[overrides][' . $path . ']';
	$is_long = is_string( $current ) && ( false !== strpos( $current, "\n" ) || strlen( wp_strip_all_tags( $current ) ) > 90 || false !== strpos( $path, 'gallery' ) );
	?>
	<p>
		<label style="display:block;font-weight:600;margin-bottom:4px;"><?php echo esc_html( $label ); ?> <code><?php echo esc_html( $path ); ?></code></label>
		<?php if ( $is_long ) : ?>
			<textarea name="<?php echo esc_attr( $name ); ?>" rows="4" class="large-text"><?php echo esc_textarea( $current ); ?></textarea>
		<?php else : ?>
			<input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current ); ?>" class="large-text">
		<?php endif; ?>
	</p>
	<?php
}
