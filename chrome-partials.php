<?php
/**
 * Server-side header / footer chrome.
 *
 * Renders the shared header (logo + nav + drawer), footer and lightbox from the
 * bootstrapped $NAV / $SITE / $IMG data, replacing the previous client-side
 * injection in site.js. Interactions live in assets/sbtw-interactions.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'sbt_nav_item_is_current' ) ) {
	function sbt_nav_item_is_current( $item, $page ) {
		$page = (string) $page;
		if ( '' === $page ) {
			return false;
		}
		if ( isset( $item['key'] ) && $item['key'] === $page ) {
			return true;
		}
		if ( ! empty( $item['match'] ) && is_array( $item['match'] ) && in_array( $page, $item['match'], true ) ) {
			return true;
		}
		if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) {
			foreach ( $item['sub'] as $sub ) {
				if ( isset( $sub['key'] ) && $sub['key'] === $page ) {
					return true;
				}
			}
		}
		return false;
	}
}

if ( ! function_exists( 'sbt_render_site_header' ) ) {
	function sbt_render_site_header( $NAV, $SITE, $IMG, $page = '' ) {
		$home_url       = function_exists( 'sbt_url' ) ? sbt_url( 'index.php' ) : 'index.php';
		$logo           = $IMG['logo'] ?? '';
		$name           = $SITE['name'] ?? 'SyncBooking';
		$lang_primary   = $SITE['lang_primary'] ?? 'EN';
		$lang_secondary = $SITE['lang_secondary'] ?? 'IT';
		?>
		<header id="hdr">
			<a class="sbtw-logo" href="<?php echo esc_url( $home_url ); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( $name ); ?>" /></a>
			<nav class="sbtw-main">
				<?php foreach ( (array) $NAV as $item ) : ?>
					<?php if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) : ?>
						<div class="sbtw-has-sub">
							<span class="sbtw-top<?php echo sbt_nav_item_is_current( $item, $page ) ? ' sbtw-current' : ''; ?>"><?php echo esc_html( $item['label'] ?? '' ); ?> <i class="sbtw-chev"></i></span>
							<div class="sbtw-sub">
								<?php foreach ( $item['sub'] as $sub ) : ?>
									<?php if ( ! empty( $sub['divide'] ) ) : ?><div class="sbtw-divider"></div><?php endif; ?>
									<a class="<?php echo ! empty( $sub['book'] ) ? 'sbtw-sub-book' : ''; ?>" href="<?php echo esc_url( $sub['url'] ?? '#' ); ?>"><span class="sbtw-t"><?php echo esc_html( $sub['label'] ?? '' ); ?></span></a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php else : ?>
						<a href="<?php echo esc_url( $item['url'] ?? '#' ); ?>"<?php echo sbt_nav_item_is_current( $item, $page ) ? ' class="sbtw-current"' : ''; ?>><?php echo esc_html( $item['label'] ?? '' ); ?></a>
					<?php endif; ?>
				<?php endforeach; ?>
			</nav>
			<div class="sbtw-actions-desktop">
				<?php
				$lang_items  = function_exists( 'sbt_header_language_items' ) ? sbt_header_language_items() : array();
				$lang_names  = function_exists( 'sbt_available_languages' ) ? sbt_available_languages() : array();
				$lang_inline = array_slice( $lang_items, 0, 2 );
				$lang_more   = array_slice( $lang_items, 2 );
				?>
				<?php if ( $lang_items ) : ?>
				<div class="sbtw-lang-toggle">
					<?php foreach ( $lang_inline as $li => $litem ) : ?>
						<?php if ( $li > 0 ) : ?><span class="sbtw-sep">/</span><?php endif; ?>
						<a href="<?php echo esc_url( $litem['url'] ?? '#' ); ?>" class="<?php echo ! empty( $litem['active'] ) ? 'sbtw-active' : ''; ?>"><?php echo esc_html( $litem['code'] ?? '' ); ?></a>
					<?php endforeach; ?>
					<?php if ( $lang_more ) : ?>
						<span class="sbtw-sep">/</span>
						<div class="sbtw-lang-more">
							<span class="sbtw-lang-more-btn" aria-label="Other languages"><i class="sbtw-chev"></i></span>
							<div class="sbtw-lang-menu">
								<?php foreach ( $lang_more as $litem ) : ?>
									<a href="<?php echo esc_url( $litem['url'] ?? '#' ); ?>"><?php echo esc_html( $litem['code'] ?? '' ); ?> <span><?php echo esc_html( $lang_names[ $litem['language'] ] ?? '' ); ?></span></a>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
			<button class="sbtw-burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
		</header>
		<?php
		sbt_render_site_drawer( $NAV, $SITE );
	}
}

if ( ! function_exists( 'sbt_render_site_drawer' ) ) {
	function sbt_render_site_drawer( $NAV, $SITE ) {
		$home_url       = function_exists( 'sbt_url' ) ? sbt_url( 'index.php' ) : 'index.php';
		$lang_primary   = $SITE['lang_primary'] ?? 'EN';
		$lang_secondary = $SITE['lang_secondary'] ?? 'IT';
		?>
		<div class="sbtw-drawer" id="drawer">
			<button class="sbtw-close" id="closeDrawer" aria-label="Close">&times;</button>
			<?php foreach ( (array) $NAV as $item ) : ?>
				<?php if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) : ?>
					<button type="button" class="sbtw-drawer-label"><?php echo esc_html( $item['label'] ?? '' ); ?><i class="sbtw-chev"></i></button>
					<div class="sbtw-sub-m">
						<?php foreach ( $item['sub'] as $sub ) : ?>
							<a class="<?php echo ! empty( $sub['book'] ) ? 'sbtw-sub-book' : ''; ?>" href="<?php echo esc_url( $sub['url'] ?? '#' ); ?>"><?php echo esc_html( $sub['label'] ?? '' ); ?></a>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<a href="<?php echo esc_url( $item['url'] ?? '#' ); ?>"><?php echo esc_html( $item['label'] ?? '' ); ?></a>
				<?php endif; ?>
			<?php endforeach; ?>
			<?php $lang_items = function_exists( 'sbt_header_language_items' ) ? sbt_header_language_items() : array(); ?>
			<?php if ( $lang_items ) : ?>
			<div class="sbtw-lang-m">
				<span class="sbtw-lang-m-label">Language</span>
				<div class="sbtw-lang-m-row">
					<?php foreach ( $lang_items as $litem ) : ?>
						<a href="<?php echo esc_url( $litem['url'] ?? '#' ); ?>" class="<?php echo ! empty( $litem['active'] ) ? 'sbtw-active' : ''; ?>"><?php echo esc_html( $litem['code'] ?? '' ); ?></a>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<?php
	}
}

if ( ! function_exists( 'sbt_render_site_footer' ) ) {
	function sbt_render_site_footer( $NAV, $SITE, $IMG ) {
		$home_url  = function_exists( 'sbt_url' ) ? sbt_url( 'index.php' ) : 'index.php';
		$logo_foot = $IMG['logo_foot'] ?? ( $IMG['logo'] ?? '' );
		$name      = $SITE['name'] ?? 'SyncBooking';
		$wa        = $SITE['wa'] ?? '';
		$facebook  = $SITE['facebook'] ?? '';
		$instagram = $SITE['instagram'] ?? '';
		$map       = $SITE['map'] ?? '#';
		$address   = $SITE['address'] ?? '';
		$year      = $SITE['year'] ?? gmdate( 'Y' );
		$vat       = $SITE['vat'] ?? '';
		$cin       = $SITE['cin'] ?? '';
		$webdev    = $SITE['webdev'] ?? array( 'label' => 'SyncBooking', 'url' => 'https://syncbooking.com' );
		$privacy   = $SITE['privacy'] ?? '#';
		$wa_svg    = '<svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg>';
		$legal_bits = array( '© ' . $year . ' ' . $name );
		if ( ! empty( $SITE['tagline'] ) ) {
			$legal_bits[] = $SITE['tagline'];
		}
		if ( $vat ) {
			$legal_bits[] = 'VAT ' . $vat;
		}
		if ( $cin ) {
			$legal_bits[] = 'CIN ' . $cin;
		}
		$legal_bits[] = 'All rights reserved';
		$legal = implode( ' · ', $legal_bits );
		?>
		<footer data-screen-label="Footer">
			<div class="sbtw-wrap">
				<div class="sbtw-foot-grid">
					<div class="sbtw-reveal sbtw-foot-logo">
						<a class="sbtw-logo" href="<?php echo esc_url( $home_url ); ?>"><img src="<?php echo esc_url( $logo_foot ); ?>" alt="<?php echo esc_attr( $name ); ?>" /></a>
					</div>
					<div class="sbtw-reveal">
						<h4><?php echo esc_html( $name ); ?></h4>
						<p><a href="<?php echo esc_url( $map ); ?>"><?php echo wp_kses( $address, array( 'br' => array() ) ); ?></a></p>
					</div>
					<div class="sbtw-reveal">
						<h4><?php echo esc_html( $SITE['contacts_label'] ?? 'Contacts' ); ?></h4>
						<p>
							<?php if ( ! empty( $SITE['phone1'] ) ) : ?><a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ?? '' ); ?>">T. <?php echo esc_html( $SITE['phone1'] ); ?></a><br/><?php endif; ?>
							<?php if ( ! empty( $SITE['phone2'] ) ) : ?><a href="tel:<?php echo esc_attr( $SITE['phone2_t'] ?? '' ); ?>">T. <?php echo esc_html( $SITE['phone2'] ); ?></a><br/><?php endif; ?>
							<?php if ( ! empty( $SITE['email'] ) ) : ?><a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a><?php endif; ?>
						</p>
					</div>
					<div class="sbtw-reveal">
						<h4><?php echo esc_html( $SITE['stay_in_touch_label'] ?? 'Stay in touch' ); ?></h4>
						<div class="sbtw-socials">
							<?php if ( $wa ) : ?><a href="<?php echo esc_url( $wa ); ?>" aria-label="WhatsApp"><?php echo $wa_svg; ?></a><?php endif; ?>
							<?php if ( $facebook ) : ?><a href="<?php echo esc_url( $facebook ); ?>" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M14 8.5V7c0-.8.2-1.2 1.3-1.2H17V3h-2.5C11.6 3 11 4.7 11 6.7V8.5H9V12h2v9h3v-9h2.4l.4-3.5H14Z"/></svg></a><?php endif; ?>
							<?php if ( $instagram ) : ?><a href="<?php echo esc_url( $instagram ); ?>" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2 0 1.8.3 2.2.4.6.2 1 .4 1.4.9.5.4.7.8.9 1.4.1.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c0 1.2-.3 1.8-.4 2.2-.2.6-.4 1-.9 1.4-.4.5-.8.7-1.4.9-.4.1-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2 0-1.8-.3-2.2-.4-.6-.2-1-.4-1.4-.9-.5-.4-.7-.8-.9-1.4-.1-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c0-1.2.3-1.8.4-2.2.2-.6.4-1 .9-1.4.4-.5.8-.7 1.4-.9.4-.1 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2Zm0 3.2A6.6 6.6 0 1 0 18.6 12 6.6 6.6 0 0 0 12 5.4Zm0 10.9A4.3 4.3 0 1 1 16.3 12 4.3 4.3 0 0 1 12 16.3Zm6.8-11.2a1.5 1.5 0 1 1-1.5-1.5 1.5 1.5 0 0 1 1.5 1.5Z"/></svg></a><?php endif; ?>
						</div>
					</div>
				</div>
				<div class="sbtw-legal">
					<span><?php echo esc_html( $legal ); ?></span>
					<span style="display:flex;gap:18px;"><a href="<?php echo esc_url( $privacy ); ?>">Privacy Policy</a><a href="<?php echo esc_url( $webdev['url'] ?? '#' ); ?>">Powered by <?php echo esc_html( $webdev['label'] ?? 'SyncBooking' ); ?></a></span>
				</div>
			</div>
		</footer>
		<div class="sbtw-lightbox" id="lightbox"><button class="sbtw-lx-close" aria-label="Close">&times;</button><button class="sbtw-lx-nav sbtw-lx-prev" aria-label="Previous">&#8249;</button><div class="sbtw-lx-stage"><img alt="" /><span class="sbtw-lx-count"></span></div><button class="sbtw-lx-nav sbtw-lx-next" aria-label="Next">&#8250;</button></div>
		<?php
	}
}
