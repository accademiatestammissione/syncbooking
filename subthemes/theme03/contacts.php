<?php
$PAGE = 'contacts';
require __DIR__ . '/inc/header.php';
$p = $C['contacts'];
sbt_t1_page_hero( 'contacts', $p, 'Contacts' );
?>

<section class="sbtw-pad pad" data-screen-label="Contacts content">
	<div class="sbtw-wrap wrap">
		<div class="sbtw-section-head sbtw-reveal section-head reveal" style="margin-bottom:56px;">
			<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.contacts.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.contacts.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.contacts.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="sbtw-contact-grid contact-grid">
			<div class="sbtw-contact-info sbtw-reveal contact-info reveal">
				<div class="sbtw-ci-block ci-block">
					<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'TEXT.address', $TEXT['address'] ); ?></div>
					<p class="sbtw-big big"><?php echo function_exists( 'sbt_site_address_html' ) ? sbt_site_address_html( $SITE ) : wp_kses_post( $SITE['address'] ?? '' ); ?></p>
					<p style="margin-top:8px;"><a href="<?php echo esc_url( $SITE['map'] ); ?>"><?php echo sbt_t1_text( 'TEXT.open_maps', $TEXT['open_maps'] ); ?></a></p>
				</div>
				<div class="sbtw-ci-block ci-block">
					<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'TEXT.phone', $TEXT['phone'] ); ?></div>
					<p class="sbtw-big big"><a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ); ?>"><?php echo esc_html( $SITE['phone1'] ); ?></a></p>
					<a class="sbtw-wa sbtw-wa--red wa wa--red" href="<?php echo esc_url( $SITE['wa'] ); ?>" style="margin-top:18px;"><?php echo $WA_SVG; ?><?php echo sbt_t1_text( 'TEXT.chat_whatsapp', $TEXT['chat_whatsapp'] ); ?></a>
					<?php echo sbt_t1_control( 'SITE.wa', $SITE['wa'], 'Link WhatsApp', 'url' ); ?>
				</div>
				<div class="sbtw-ci-block ci-block">
					<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'TEXT.email', $TEXT['email'] ); ?></div>
					<p class="sbtw-big big"><a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a></p>
				</div>
			</div>
			<form class="sbtw-contact-form sbtw-reveal contact-form reveal" id="contactForm" data-sbt-form="contact" method="post">
				<div class="sbtw-field field"><label><?php echo sbt_t1_text( 'TEXT.form_name', $TEXT['form_name'] ); ?></label><input type="text" name="name" required autocomplete="name" placeholder="<?php echo esc_attr( $TEXT['form_name_placeholder'] ); ?>" /></div>
				<div class="sbtw-field field"><label><?php echo sbt_t1_text( 'TEXT.form_email', $TEXT['form_email'] ); ?></label><input type="email" name="email" required autocomplete="email" placeholder="<?php echo esc_attr( $TEXT['form_email_placeholder'] ); ?>" /></div>
				<div class="sbtw-field field"><label><?php echo sbt_t1_text( 'TEXT.form_phone', $TEXT['form_phone'] ); ?></label><input type="tel" name="phone" autocomplete="tel" placeholder="<?php echo esc_attr( $TEXT['form_phone_placeholder'] ); ?>" /></div>
				<div class="sbtw-field field"><label><?php echo sbt_t1_text( 'TEXT.form_message', $TEXT['form_message'] ); ?></label><textarea name="message" required placeholder="<?php echo esc_attr( $TEXT['form_message_placeholder'] ); ?>"></textarea></div>
				<div class="sbtw-field field" style="position:absolute;left:-9999px;" aria-hidden="true"><label>Website</label><input type="text" name="website" tabindex="-1" autocomplete="off" /></div>
				<button class="sbtw-btn btn" type="submit" style="align-self:flex-start;"><?php echo sbt_t1_text( 'TEXT.form_send', $TEXT['form_send'] ); ?></button>
				<p class="form-result" aria-live="polite" style="display:none;color:var(--green);font-size:14px;"><?php echo sbt_t1_text( 'TEXT.form_result', $TEXT['form_result'], array( 'multiline' => true ) ); ?></p>
			</form>
		</div>
	</div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
	<?php if ( ! empty( $SITE['map_embed'] ) ) : ?>
		<iframe class="sbtw-map-embed map-embed" src="<?php echo esc_url( $SITE['map_embed'] ); ?>" title="Map" loading="lazy"></iframe>
		<?php echo sbt_t1_control( 'SITE.map_embed', $SITE['map_embed'], 'Map embed URL', 'url' ); ?>
	<?php endif; ?>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
