<?php
$PAGE = 'contacts';
require __DIR__ . '/inc/header.php';
$p = $C['contacts'];
sbt_t1_page_hero( 'contacts', $p, 'Contacts' );
?>

<section class="pad" data-screen-label="Contacts content">
	<div class="wrap">
		<div class="section-head reveal" style="margin-bottom:56px;">
			<div class="overline"><?php echo sbt_t1_text( 'C.contacts.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.contacts.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.contacts.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="contact-grid">
			<div class="contact-info reveal">
				<div class="ci-block">
					<div class="overline"><?php echo sbt_t1_text( 'TEXT.address', $TEXT['address'] ); ?></div>
					<p class="big"><?php echo $SITE['address']; ?></p>
					<p style="margin-top:8px;"><a href="<?php echo esc_url( $SITE['map'] ); ?>"><?php echo sbt_t1_text( 'TEXT.open_maps', $TEXT['open_maps'] ); ?></a></p>
				</div>
				<div class="ci-block">
					<div class="overline"><?php echo sbt_t1_text( 'TEXT.phone', $TEXT['phone'] ); ?></div>
					<p class="big"><a href="tel:<?php echo esc_attr( $SITE['phone1_t'] ); ?>"><?php echo esc_html( $SITE['phone1'] ); ?></a><br/><a href="tel:<?php echo esc_attr( $SITE['phone2_t'] ); ?>"><?php echo esc_html( $SITE['phone2'] ); ?></a></p>
					<a class="wa wa--red" href="<?php echo esc_url( $SITE['wa'] ); ?>" style="margin-top:18px;"><?php echo $WA_SVG; ?><?php echo sbt_t1_text( 'TEXT.chat_whatsapp', $TEXT['chat_whatsapp'] ); ?></a>
					<?php echo sbt_t1_control( 'SITE.wa', $SITE['wa'], 'Link WhatsApp', 'url' ); ?>
				</div>
				<div class="ci-block">
					<div class="overline"><?php echo sbt_t1_text( 'TEXT.email', $TEXT['email'] ); ?></div>
					<p class="big"><a href="mailto:<?php echo esc_attr( $SITE['email'] ); ?>"><?php echo esc_html( $SITE['email'] ); ?></a></p>
				</div>
			</div>
			<form class="contact-form reveal" id="contactForm" onsubmit="return false;">
				<div class="field"><label><?php echo sbt_t1_text( 'TEXT.form_name', $TEXT['form_name'] ); ?></label><input type="text" placeholder="<?php echo esc_attr( $TEXT['form_name_placeholder'] ); ?>" /></div>
				<div class="field"><label><?php echo sbt_t1_text( 'TEXT.form_email', $TEXT['form_email'] ); ?></label><input type="email" placeholder="<?php echo esc_attr( $TEXT['form_email_placeholder'] ); ?>" /></div>
				<div class="field"><label><?php echo sbt_t1_text( 'TEXT.form_phone', $TEXT['form_phone'] ); ?></label><input type="tel" placeholder="<?php echo esc_attr( $TEXT['form_phone_placeholder'] ); ?>" /></div>
				<div class="field"><label><?php echo sbt_t1_text( 'TEXT.form_message', $TEXT['form_message'] ); ?></label><textarea placeholder="<?php echo esc_attr( $TEXT['form_message_placeholder'] ); ?>"></textarea></div>
				<button class="btn" type="submit" style="align-self:flex-start;"><?php echo sbt_t1_text( 'TEXT.form_send', $TEXT['form_send'] ); ?></button>
				<p class="form-result" style="display:none;color:var(--green);font-size:14px;"><?php echo sbt_t1_text( 'TEXT.form_result', $TEXT['form_result'], array( 'multiline' => true ) ); ?></p>
			</form>
		</div>
	</div>
</section>

<section style="padding-bottom:0;" data-screen-label="Contacts map">
	<iframe class="map-embed" src="<?php echo esc_url( $SITE['map_embed'] ); ?>" title="Map" loading="lazy"></iframe>
	<?php echo sbt_t1_control( 'SITE.map_embed', $SITE['map_embed'], 'Link mappa', 'url' ); ?>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
