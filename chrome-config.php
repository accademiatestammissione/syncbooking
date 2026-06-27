<?php
/**
 * Site chrome configuration (window.SBTW_CONFIG).
 *
 * The v6 assets/syncbooking_site.js builds the header, drawer, footer and lightbox
 * client-side from a global `window.SBTW_CONFIG` object. This file derives that
 * object from the bootstrapped WordPress data ($NAV / $SITE / $IMG) and emits it
 * just before site.js loads, so the external script stays untouched while every
 * brand / nav / footer / language value is driven by WordPress.
 *
 * Flow: header.php calls sbt_render_site_config() (sets the constant) -> footer.php
 * loads assets/syncbooking_site.js (reads the constant and renders the chrome).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'sbt_build_site_config' ) ) {
	/**
	 * Build the window.SBTW_CONFIG object consumed by the v6 assets/syncbooking_site.js
	 * chrome builder, from the bootstrapped $NAV / $SITE / $IMG data. site.js
	 * renders the header, drawer, footer and lightbox client-side from this
	 * config, so all nav/brand/footer/language data stays driven by WordPress.
	 */
	function sbt_build_site_config( $NAV, $SITE, $IMG ) {
		// $NAV is bootstrapped to final permalinks; sbt_url() passes those through
		// unchanged and resolves the syncbooking:booking token to the live URL.
		$resolve = function ( $href ) {
			return function_exists( 'sbt_url' ) ? sbt_url( $href ) : $href;
		};
		// site.js HTML-encodes every text field itself, so decode any entities
		// already in the source (e.g. "SPA &amp; Wellness") to avoid double-encoding.
		$dec = function ( $text ) {
			return html_entity_decode( (string) $text, ENT_QUOTES, 'UTF-8' );
		};

		$nav = array();
		foreach ( (array) $NAV as $item ) {
			if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) {
				$items = array();
				foreach ( $item['sub'] as $sub ) {
					if ( ! empty( $sub['divide'] ) ) {
						$items[] = array( 'divider' => true );
					}
					$entry = array(
						'label' => $dec( $sub['label'] ?? '' ),
						'href'  => $resolve( $sub['url'] ?? '#' ),
					);
					if ( ! empty( $sub['book'] ) ) {
						$entry['book'] = true;
					}
					$items[] = $entry;
				}
				$active = ( ! empty( $item['match'] ) && is_array( $item['match'] ) ) ? array_values( $item['match'] ) : array();
				if ( ! empty( $item['key'] ) ) {
					$active[] = $item['key'];
				}
				$nav[] = array(
					'type'   => 'group',
					'label'  => $dec( $item['label'] ?? '' ),
					'active' => $active,
					'items'  => $items,
				);
			} else {
				$nav[] = array(
					'type'  => 'link',
					'page'  => $item['key'] ?? '',
					'label' => $dec( $item['label'] ?? '' ),
					'href'  => $resolve( $item['url'] ?? '#' ),
				);
			}
		}

		// Languages — active first (site.js highlights index 0).
		$lang_items = function_exists( 'sbt_header_language_items' ) ? sbt_header_language_items() : array();
		$lang_names = function_exists( 'sbt_available_languages' ) ? sbt_available_languages() : array();
		$active_langs = array();
		$rest_langs   = array();
		foreach ( $lang_items as $li ) {
			$entry = array(
				'code' => $li['code'] ?? '',
				'name' => $dec( $lang_names[ $li['language'] ] ?? ( $li['code'] ?? '' ) ),
				'href' => $li['url'] ?? '#',
			);
			if ( ! empty( $li['active'] ) ) {
				$active_langs[] = $entry;
			} else {
				$rest_langs[] = $entry;
			}
		}
		$languages = array_merge( $active_langs, $rest_langs );

		// Footer legal line.
		$year = $SITE['year'] ?? gmdate( 'Y' );
		$legal_bits = array( '© ' . $year . ' ' . ( $SITE['name'] ?? '' ) );
		if ( ! empty( $SITE['tagline'] ) ) {
			$legal_bits[] = $SITE['tagline'];
		}
		if ( ! empty( $SITE['vat'] ) ) {
			$legal_bits[] = 'VAT ' . $SITE['vat'];
		}
		if ( ! empty( $SITE['cin'] ) ) {
			$legal_bits[] = 'CIN ' . $SITE['cin'];
		}
		$legal_bits[] = 'All rights reserved';

		$address_lines = array();
		foreach ( array( 'address_line_1', 'address_line_2', 'address_line_3' ) as $al ) {
			if ( ! empty( $SITE[ $al ] ) ) {
				$address_lines[] = $SITE[ $al ];
			}
		}
		if ( ! $address_lines && ! empty( $SITE['address'] ) ) {
			$normalized = str_replace( array( '<br>', '<br />' ), '<br/>', $SITE['address'] );
			$address_lines = array_values( array_filter( array_map( 'trim', explode( '<br/>', $normalized ) ) ) );
		}

		$phones = array();
		if ( ! empty( $SITE['phone1'] ) ) {
			$phones[] = array( 'label' => 'T. ' . $SITE['phone1'], 'tel' => $SITE['phone1_t'] ?? '' );
		}
		if ( ! empty( $SITE['phone2'] ) ) {
			$phones[] = array( 'label' => 'T. ' . $SITE['phone2'], 'tel' => $SITE['phone2_t'] ?? '' );
		}

		$webdev = $SITE['webdev'] ?? array( 'label' => 'SyncBooking', 'url' => 'https://syncbooking.com' );

		return array(
			'brand' => array(
				'name'       => $dec( $SITE['name'] ?? '' ),
				'logo'       => $IMG['logo'] ?? '',
				'logoFooter' => $IMG['logo_foot'] ?? ( $IMG['logo'] ?? '' ),
				'bookingUrl' => $resolve( 'syncbooking:booking' ),
			),
			// v6.5 general palette — each token feeds CSS variables in site.js.
			'colors' => array(
				'pageBg'      => $SITE['color_bg'] ?? '',
				'surface'     => $SITE['color_surface'] ?? '',
				'ink'         => $SITE['color_ink'] ?? '',
				'muted'       => $SITE['color_muted'] ?? '',
				'line'        => $SITE['color_line'] ?? '',
				'primary'     => $SITE['color_primary'] ?? '',
				'primaryDeep' => $SITE['color_primary_deep'] ?? '',
				'primarySoft' => $SITE['color_primary_soft'] ?? '',
				'rose'        => $SITE['color_accent'] ?? '',
				'gold'        => $SITE['color_gold'] ?? '',
				'headerText'  => $SITE['color_header_text'] ?? '',
				'footerBg'    => $SITE['color_footer_bg'] ?? '',
				'footerText'  => $SITE['color_footer_text'] ?? '',
				// v7 bottom booking bar colours are intentionally NOT emitted: the
				// site.css bar vars fall back to the palette ( var(--sb-bar-bg,
				// var(--green)), var(--sb-submit-bg, var(--green-deep)), … ), so the
				// bar follows the theme primary automatically and is not separately
				// editable from the admin.
			),
			'nav'             => $nav,
			'languages'       => $languages,
			'langInlineCount' => 2,
			'footer'          => array(
				'addressTitle'  => $dec( $SITE['name'] ?? '' ),
				'addressHref'   => $SITE['map'] ?? '#',
				'addressLines'  => $address_lines,
				'contactsTitle' => $dec( $SITE['contacts_label'] ?? 'Contacts' ),
				'phones'        => $phones,
				'email'         => $SITE['email'] ?? '',
				'socialTitle'   => $dec( $SITE['stay_in_touch_label'] ?? 'Stay in touch' ),
				'whatsapp'      => $SITE['wa'] ?? '',
				'facebook'      => $SITE['facebook'] ?? '',
				'instagram'     => $SITE['instagram'] ?? '',
				'legal'         => $dec( implode( ' · ', $legal_bits ) ),
				'privacyLabel'  => 'Privacy Policy',
				'privacyHref'   => $SITE['privacy'] ?? '#',
				'poweredLabel'  => 'Powered by ' . ( $webdev['label'] ?? 'SyncBooking' ),
				'poweredHref'   => $webdev['url'] ?? '#',
			),
		);
	}
}

if ( ! function_exists( 'sbt_render_site_config' ) ) {
	/**
	 * Emit window.SBTW_CONFIG before assets/syncbooking_site.js loads, so the external
	 * chrome builder uses the live WordPress data instead of its baked defaults.
	 */
	function sbt_render_site_config( $NAV, $SITE, $IMG ) {
		$config = sbt_build_site_config( $NAV, $SITE, $IMG );
		echo '<script>window.SBTW_CONFIG = ' . wp_json_encode( $config ) . ';</script>' . "\n";
	}
}

if ( ! function_exists( 'sbt_render_favicon_links' ) ) {
	/**
	 * Emit the browser-tab icon (favicon) for the active subtheme. The source is
	 * $IMG['favicon'] (a SITE override via the IMG.favicon admin field takes
	 * precedence because overrides are applied to $IMG before this runs). Called
	 * from each subtheme header's <head>.
	 */
	function sbt_render_favicon_links( $IMG ) {
		$fav = ( is_array( $IMG ) && ! empty( $IMG['favicon'] ) ) ? (string) $IMG['favicon'] : '';
		if ( '' === $fav ) {
			return;
		}
		$type = '';
		if ( preg_match( '/\.png(\?.*)?$/i', $fav ) ) {
			$type = ' type="image/png"';
		} elseif ( preg_match( '/\.svg(\?.*)?$/i', $fav ) ) {
			$type = ' type="image/svg+xml"';
		} elseif ( preg_match( '/\.ico(\?.*)?$/i', $fav ) ) {
			$type = ' type="image/x-icon"';
		}
		$url = esc_url( $fav );
		echo '<link rel="icon"' . $type . ' href="' . $url . '" />' . "\n";
		echo '<link rel="shortcut icon"' . $type . ' href="' . $url . '" />' . "\n";
		echo '<link rel="apple-touch-icon" href="' . $url . '" />' . "\n";
	}
}
