<footer data-screen-label="Footer">
	<div class="wrap">
		<div class="foot-grid">
			<div class="reveal">
				<a class="logo" href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><img src="<?php echo esc_url( $IMG['logo_foot'] ); ?>" alt="<?php echo esc_attr( $SITE['name'] ); ?>" /></a>
			</div>
			<div class="reveal">
				<h4><?php echo esc_html( $SITE['name'] ); ?></h4>
				<p><a href="<?php echo esc_url( $SITE['map'] ); ?>"><?php echo $SITE['address']; ?></a></p>
			</div>
			<div class="reveal">
				<h4><?php echo esc_html( $TEXT['contacts'] ?? 'Contacts' ); ?></h4>
				<p>
					<a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ); ?>">T. <?php echo esc_html( $SITE['phone1'] ); ?></a><br/>
					<a href="tel:<?php echo esc_attr( $SITE['phone2_t'] ); ?>">T. <?php echo esc_html( $SITE['phone2'] ); ?></a><br/>
					<a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a>
				</p>
			</div>
			<div class="reveal">
				<h4><?php echo esc_html( $TEXT['stay_in_touch'] ?? 'Stay in touch' ); ?></h4>
				<div class="socials">
					<a href="<?php echo esc_url( $SITE['wa'] ); ?>" aria-label="WhatsApp"><?php echo $WA_SVG; ?></a>
					<a href="<?php echo esc_url( $SITE['facebook'] ); ?>" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M14 8.5V7c0-.8.2-1.2 1.3-1.2H17V3h-2.5C11.6 3 11 4.7 11 6.7V8.5H9V12h2v9h3v-9h2.4l.4-3.5H14Z"/></svg></a>
					<a href="<?php echo esc_url( $SITE['instagram'] ); ?>" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2 0 1.8.3 2.2.4.6.2 1 .4 1.4.9.5.4.7.8.9 1.4.1.4.4 1 .4 2.2.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c0 1.2-.3 1.8-.4 2.2-.2.6-.4 1-.9 1.4-.4.5-.8.7-1.4.9-.4.1-1 .4-2.2.4-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2 0-1.8-.3-2.2-.4-.6-.2-1-.4-1.4-.9-.5-.4-.7-.8-.9-1.4-.1-.4-.4-1-.4-2.2C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c0-1.2.3-1.8.4-2.2.2-.6.4-1 .9-1.4.4-.5.8-.7 1.4-.9.4-.1 1-.4 2.2-.4C8.4 2.2 8.8 2.2 12 2.2Zm0 3.2A6.6 6.6 0 1 0 18.6 12 6.6 6.6 0 0 0 12 5.4Zm0 10.9A4.3 4.3 0 1 1 16.3 12 4.3 4.3 0 0 1 12 16.3Zm6.8-11.2a1.5 1.5 0 1 1-1.5-1.5 1.5 1.5 0 0 1 1.5 1.5Z"/></svg></a>
				</div>
			</div>
		</div>
		<div class="legal">
			<span>&copy; <?php echo esc_html( $SITE['year'] ); ?> <?php echo esc_html( $SITE['name'] ); ?> - <?php echo esc_html( $SITE['tagline'] ); ?> - VAT <?php echo esc_html( $SITE['vat'] ); ?> - CIN <?php echo esc_html( $SITE['cin'] ); ?> - <?php echo esc_html( $TEXT['all_rights_reserved'] ?? 'All rights reserved' ); ?></span>
			<span style="display:flex;gap:18px;"><a href="#"><?php echo esc_html( $TEXT['privacy_policy'] ?? 'Privacy Policy' ); ?></a><a href="<?php echo esc_url( $SITE['webdev']['url'] ); ?>"><?php echo esc_html( $SITE['webdev']['label'] ); ?></a></span>
		</div>
	</div>
</footer>

<button class="totop" id="totop" aria-label="Scroll to top"><svg viewBox="0 0 24 24"><path d="M12 19V5M5 12l7-7 7 7"/></svg></button>
<div class="lightbox" id="lightbox"><button class="lx-close" aria-label="Close">&times;</button><button class="lx-nav lx-prev" aria-label="Previous">&#8249;</button><div class="lx-stage"><img alt="" /><span class="lx-count"></span></div><button class="lx-nav lx-next" aria-label="Next">&#8250;</button></div>

<?php if ( function_exists( 'wp_footer' ) ) wp_footer(); ?>
<script src="<?php echo esc_url( function_exists( 'sbt_asset_url' ) ? sbt_asset_url( 'assets/theme.js' ) : 'assets/theme.js' ); ?>"></script>
</body>
</html>
