<?php
/**
 * Footer template.
 *
 * @package SyncBookingVillaResort
 */
?>
</main>

<footer class="site-footer" id="contacts">
	<div class="site-footer__grid">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Villa Resort', 'syncbooking-villa-resort' ); ?></p>
			<h2><?php bloginfo( 'name' ); ?></h2>
			<p><?php esc_html_e( 'Case indipendenti, giardino, piscina e SPA per soggiorni su misura nel cuore della Puglia.', 'syncbooking-villa-resort' ); ?></p>
		</div>
		<div>
			<h3><?php esc_html_e( 'Contatti', 'syncbooking-villa-resort' ); ?></h3>
			<p><?php echo esc_html( sbvr_get_theme_option( 'sbvr_address', 'Conversano, Puglia' ) ); ?></p>
			<p><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', sbvr_get_theme_option( 'sbvr_phone', '+39 000 000 0000' ) ) ); ?>"><?php echo esc_html( sbvr_get_theme_option( 'sbvr_phone', '+39 000 000 0000' ) ); ?></a></p>
			<p><a href="mailto:<?php echo esc_attr( sbvr_get_theme_option( 'sbvr_email', 'info@example.com' ) ); ?>"><?php echo esc_html( sbvr_get_theme_option( 'sbvr_email', 'info@example.com' ) ); ?></a></p>
		</div>
		<div>
			<h3><?php esc_html_e( 'Navigazione', 'syncbooking-villa-resort' ); ?></h3>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'container'      => false,
				'menu_class'     => 'footer-nav',
				'fallback_cb'    => false,
			) );
			?>
		</div>
	</div>
	<div class="site-footer__bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.</p>
		<a href="<?php echo esc_url( sbvr_get_theme_option( 'sbvr_booking_url', '#booking' ) ); ?>"><?php esc_html_e( 'Verifica disponibilità', 'syncbooking-villa-resort' ); ?></a>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
