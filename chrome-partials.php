<?php
/**
 * Server-side header / footer chrome.
 *
 * As of v6 the shared header, drawer, footer and lightbox are built client-side
 * by the external assets/site.js, configured from WordPress via the
 * window.SBTW_CONFIG object emitted by sbt_render_site_config() (built from the
 * bootstrapped $NAV / $SITE / $IMG data). The server-side sbt_render_site_*
 * functions below are retained as a fallback but are no longer called.
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
		<?php
		$logo_class = 'sbtw-logo' . ( ! empty( $SITE['logo_class'] ) ? ' ' . $SITE['logo_class'] : '' );
		$logo_inner = ! empty( $SITE['logo_html'] ) ? $SITE['logo_html'] : '<img src="' . esc_url( $logo ) . '" alt="' . esc_attr( $name ) . '" />';
		?>
		<header id="hdr">
			<a class="<?php echo esc_attr( $logo_class ); ?>" href="<?php echo esc_url( $home_url ); ?>"><?php echo $logo_inner; ?></a>
			<nav class="sbtw-main">
				<?php foreach ( (array) $NAV as $item ) : ?>
					<?php if ( ! empty( $item['sub'] ) && is_array( $item['sub'] ) ) : ?>
						<div class="sbtw-has-sub">
							<span class="sbtw-top<?php echo sbt_nav_item_is_current( $item, $page ) ? ' sbtw-current' : ''; ?>"><?php echo esc_html( $item['label'] ?? '' ); ?> <i class="sbtw-chev"></i></span>
							<div class="sbtw-sub">
								<?php foreach ( $item['sub'] as $sub ) : ?>
									<?php if ( ! empty( $sub['divide'] ) ) : ?><div class="sbtw-divider"></div><?php endif; ?>
									<a<?php echo ! empty( $sub['book'] ) ? ' class="sbtw-sub-book"' : ''; ?> href="<?php echo esc_url( $sub['url'] ?? '#' ); ?>"><span class="sbtw-t"><?php echo esc_html( $sub['label'] ?? '' ); ?></span></a>
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
						<a href="<?php echo esc_url( $litem['url'] ?? '#' ); ?>"<?php echo ! empty( $litem['active'] ) ? ' class="sbtw-active"' : ''; ?>><?php echo esc_html( $litem['code'] ?? '' ); ?></a>
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
					<button type="button" class="sbtw-drawer-label sbtw-drawer-acc" aria-expanded="false"><?php echo esc_html( $item['label'] ?? '' ); ?> <i class="sbtw-chev"></i></button>
					<div class="sbtw-sub-m">
						<?php foreach ( $item['sub'] as $sub ) : ?>
							<a<?php echo ! empty( $sub['book'] ) ? ' class="sbtw-sub-book"' : ''; ?> href="<?php echo esc_url( $sub['url'] ?? '#' ); ?>"><?php echo esc_html( $sub['label'] ?? '' ); ?></a>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<a href="<?php echo esc_url( $item['url'] ?? '#' ); ?>"><?php echo esc_html( $item['label'] ?? '' ); ?></a>
				<?php endif; ?>
			<?php endforeach; ?>
			<?php $lang_items = function_exists( 'sbt_header_language_items' ) ? sbt_header_language_items() : array(); ?>
			<?php if ( $lang_items ) : ?>
			<div class="sbtw-lang-m sbtw-drawer-langs">
				<span class="sbtw-lang-m-label sbtw-dl-label sbtw-drawer-langs-label"><?php echo esc_html( $SITE['lang_drawer_label'] ?? 'Language' ); ?></span>
				<div class="sbtw-lang-m-row sbtw-dl-list sbtw-drawer-langs-row">
					<?php foreach ( $lang_items as $litem ) : ?>
						<a href="<?php echo esc_url( $litem['url'] ?? '#' ); ?>"<?php echo ! empty( $litem['active'] ) ? ' class="sbtw-active"' : ''; ?>><?php echo esc_html( $litem['code'] ?? '' ); ?></a>
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
					<?php
					$foot_logo_class = 'sbtw-logo' . ( ! empty( $SITE['logo_foot_class'] ) ? ' ' . $SITE['logo_foot_class'] : '' );
					$foot_logo_inner = ! empty( $SITE['logo_foot_html'] ) ? $SITE['logo_foot_html'] : '<img src="' . esc_url( $logo_foot ) . '" alt="' . esc_attr( $name ) . '" />';
					?>
					<div class="sbtw-reveal sbtw-foot-logo">
						<a class="<?php echo esc_attr( $foot_logo_class ); ?>" href="<?php echo esc_url( $home_url ); ?>"><?php echo $foot_logo_inner; ?></a>
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

/**
 * Working contact form handler.
 *
 * The contact form posts to admin-post.php with action=sbt_contact_submit.
 * We validate, email the active subtheme's address, and redirect back to the
 * originating page with a status flag the page can display.
 */
if ( ! function_exists( 'sbt_handle_contact_submit' ) ) {
	function sbt_handle_contact_submit() {
		$redirect = isset( $_POST['sbt_redirect'] ) ? esc_url_raw( wp_unslash( $_POST['sbt_redirect'] ) ) : home_url( '/' );
		if ( ! $redirect ) {
			$redirect = home_url( '/' );
		}

		if ( ! isset( $_POST['sbt_contact_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['sbt_contact_nonce'] ), 'sbt_contact' ) ) {
			wp_safe_redirect( add_query_arg( 'sbt_contact', 'error', $redirect ) . '#contact-form' );
			exit;
		}

		$name    = sanitize_text_field( wp_unslash( $_POST['sbt_name'] ?? '' ) );
		$email   = sanitize_email( wp_unslash( $_POST['sbt_email'] ?? '' ) );
		$phone   = sanitize_text_field( wp_unslash( $_POST['sbt_phone'] ?? '' ) );
		$message = sanitize_textarea_field( wp_unslash( $_POST['sbt_message'] ?? '' ) );

		if ( '' === $name || ! is_email( $email ) || '' === $message ) {
			wp_safe_redirect( add_query_arg( 'sbt_contact', 'error', $redirect ) . '#contact-form' );
			exit;
		}

		$data      = function_exists( 'sbt_load_active_data' ) ? sbt_load_active_data() : array();
		$site      = isset( $data['SITE'] ) && is_array( $data['SITE'] ) ? $data['SITE'] : array();
		$to        = function_exists( 'sbt_contact_recipient_email' ) ? sbt_contact_recipient_email() : ( ! empty( $site['email'] ) ? $site['email'] : get_option( 'admin_email' ) );
		$site_name = ! empty( $site['name'] ) ? $site['name'] : get_bloginfo( 'name' );

		$subject = sprintf( '[%s] %s', $site_name, $name );
		$body    = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}\n";
		$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );

		wp_mail( $to, $subject, $body, $headers );

		wp_safe_redirect( add_query_arg( 'sbt_contact', 'sent', $redirect ) . '#contact-form' );
		exit;
	}
	add_action( 'admin_post_sbt_contact_submit', 'sbt_handle_contact_submit' );
	add_action( 'admin_post_nopriv_sbt_contact_submit', 'sbt_handle_contact_submit' );
}

/**
 * Render the shared contact form (used by every subtheme contacts page).
 * Outputs a working POST form plus the success/error notice.
 */
if ( ! function_exists( 'sbt_render_contact_form' ) ) {
	function sbt_render_contact_form( $TEXT = array() ) {
		if ( function_exists( 'sbt_cf7_is_active' ) && sbt_cf7_is_active() ) {
			echo '<div id="contact-form" class="sbtw-contact-form sbtw-reveal sbtw-cf7-form">';
			if ( ! sbt_cf7_render( 'contact' ) ) {
				echo '<p>' . esc_html( $TEXT['form_error'] ?? 'The contact form is temporarily unavailable.' ) . '</p>';
			}
			echo '</div>';
			return;
		}

		$status   = isset( $_GET['sbt_contact'] ) ? sanitize_key( wp_unslash( $_GET['sbt_contact'] ) ) : '';
		$action   = function_exists( 'admin_url' ) ? admin_url( 'admin-post.php' ) : '';
		$redirect = home_url( '/' );
		if ( ! empty( $_SERVER['REQUEST_URI'] ) ) {
			$host     = ! empty( $_SERVER['HTTP_HOST'] ) ? wp_unslash( $_SERVER['HTTP_HOST'] ) : wp_parse_url( home_url(), PHP_URL_HOST );
			$path     = strtok( wp_unslash( $_SERVER['REQUEST_URI'] ), '?' );
			$redirect = ( is_ssl() ? 'https://' : 'http://' ) . $host . $path;
		} elseif ( function_exists( 'get_permalink' ) && get_permalink() ) {
			$redirect = get_permalink();
		}
		?>
		<form id="contact-form" class="sbtw-contact-form sbtw-reveal" method="post" action="<?php echo esc_url( $action ); ?>">
			<input type="hidden" name="action" value="sbt_contact_submit" />
			<input type="hidden" name="sbt_redirect" value="<?php echo esc_url( $redirect ); ?>" />
			<?php if ( function_exists( 'wp_nonce_field' ) ) { wp_nonce_field( 'sbt_contact', 'sbt_contact_nonce' ); } ?>
			<?php if ( 'sent' === $status ) : ?>
				<div class="sbtw-form-ok" style="margin-bottom:16px;"><?php echo esc_html( $TEXT['form_result'] ?? 'Thank you — your request has been sent. We will contact you shortly.' ); ?></div>
			<?php elseif ( 'error' === $status ) : ?>
				<div class="sbtw-form-err" style="margin-bottom:16px;"><?php echo esc_html( $TEXT['form_error'] ?? 'Please fill in your name, a valid email and a message.' ); ?></div>
			<?php endif; ?>
			<div class="sbtw-field"><label><?php echo esc_html( $TEXT['form_name'] ?? 'Name' ); ?></label><input type="text" name="sbt_name" required placeholder="<?php echo esc_attr( $TEXT['form_name_placeholder'] ?? '' ); ?>" /></div>
			<div class="sbtw-field"><label><?php echo esc_html( $TEXT['form_email'] ?? 'Email' ); ?></label><input type="email" name="sbt_email" required placeholder="<?php echo esc_attr( $TEXT['form_email_placeholder'] ?? '' ); ?>" /></div>
			<div class="sbtw-field"><label><?php echo esc_html( $TEXT['form_phone'] ?? 'Phone' ); ?></label><input type="tel" name="sbt_phone" placeholder="<?php echo esc_attr( $TEXT['form_phone_placeholder'] ?? '' ); ?>" /></div>
			<div class="sbtw-field"><label><?php echo esc_html( $TEXT['form_message'] ?? 'Message' ); ?></label><textarea name="sbt_message" required placeholder="<?php echo esc_attr( $TEXT['form_message_placeholder'] ?? '' ); ?>"></textarea></div>
			<button class="sbtw-btn" type="submit" style="align-self:flex-start;"><?php echo esc_html( $TEXT['form_send'] ?? 'Send message' ); ?></button>
		</form>
		<?php
	}
}
