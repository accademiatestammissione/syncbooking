<?php
$PAGE = 'weddings';
$CONTENT_KEY = 'weddings';
require __DIR__ . '/inc/header.php';
$p = $C['weddings'];
$gallery = ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ? array_values( $p['gallery'] ) : array_values( $WEDDING_GALLERY );
$check_svg = '<svg viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>';
$pin_svg = '<svg viewBox="0 0 24 24"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg>';
$clock_svg = '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>';
$album = implode( '|', $gallery );
?>

<section style="padding-top:92px;background:var(--surface);" data-screen-label="Weddings gallery">
	<div class="sbtw-wrap" style="padding-top:18px;padding-bottom:18px;">
		<div class="sbtw-w-gallery">
			<?php foreach ( array_slice( $gallery, 0, 6 ) as $index => $image ) : ?>
				<div class="sbtw-g-item"><?php echo sbt_t1_img( 'C.weddings.gallery.' . $index, $image, $p['h1'], array( 'data-lightbox' => '' ) ); ?></div>
			<?php endforeach; ?>
			<div class="sbtw-w-tour"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.4 2.5 15.6 0 18M12 3c-2.5 2.4-2.5 15.6 0 18"/></svg><?php echo sbt_t1_text( 'C.weddings.tour_label', $p['tour_label'] ?? 'Tour 360' ); ?></div>
			<div class="sbtw-w-galbtns">
				<button class="sbtw-w-galbtn sbtw-w-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?php echo esc_html( ( $TEXT['show_all_photos'] ?? 'Show all photos' ) . ' - ' . ( $p['gallery_count'] ?? count( $gallery ) ) ); ?></button>
			</div>
		</div>
	</div>
</section>

<section class="sbtw-pad-s" data-screen-label="Weddings detail">
	<div class="sbtw-wrap">
		<div class="sbtw-w-layout">
			<div class="sbtw-w-main">
				<div class="sbtw-w-sec" id="info" style="padding-top:0;">
					<span class="sbtw-w-since"><?php echo $pin_svg; ?><?php echo sbt_t1_text( 'C.weddings.since', $p['since'] ?? '' ); ?></span>
					<h2><?php echo sbt_t1_text( 'C.weddings.intro_h2', $p['intro_h2'] ); ?></h2>
					<p><?php echo sbt_t1_text( 'C.weddings.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
					<p><?php echo sbt_t1_text( 'C.weddings.intro_p2', $p['intro_p2'] ?? '', array( 'multiline' => true ) ); ?></p>
					<p><?php echo sbt_t1_text( 'C.weddings.intro_p3', $p['intro_p3'] ?? '', array( 'multiline' => true ) ); ?></p>

					<h3><?php echo sbt_t1_text( 'C.weddings.list_title', $p['list_title'] ?? '' ); ?></h3>
					<ul class="sbtw-w-list">
						<?php foreach ( $p['service_items'] ?? array() as $index => $item ) : ?>
							<li><?php echo $check_svg; ?><?php echo sbt_t1_text( 'C.weddings.service_items.' . $index, $item ); ?></li>
						<?php endforeach; ?>
					</ul>

					<h3><?php echo sbt_t1_text( 'C.weddings.kitchen_title', $p['kitchen_title'] ?? '' ); ?></h3>
					<p><?php echo sbt_t1_text( 'C.weddings.kitchen_p', $p['kitchen_p'] ?? '', array( 'multiline' => true ) ); ?></p>
				</div>

				<div class="sbtw-w-sec" id="ambienti">
					<h2><?php echo sbt_t1_text( 'C.weddings.info_title', $p['info_title'] ?? '' ); ?></h2>
					<div class="sbtw-w-qa">
						<h4><?php echo sbt_t1_text( 'C.weddings.amenities_title', $p['amenities_title'] ?? '' ); ?></h4>
						<div class="sbtw-w-amen">
							<?php foreach ( $p['amenities'] ?? array() as $index => $item ) : ?>
								<span><?php echo $check_svg; ?><?php echo sbt_t1_text( 'C.weddings.amenities.' . $index, $item ); ?></span>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="sbtw-w-qa">
						<h4><?php echo sbt_t1_text( 'C.weddings.offered_title', $p['offered_title'] ?? '' ); ?></h4>
						<div class="sbtw-w-amen">
							<?php foreach ( $p['offered'] ?? array() as $index => $item ) : ?>
								<span><?php echo $check_svg; ?><?php echo sbt_t1_text( 'C.weddings.offered.' . $index, $item ); ?></span>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="sbtw-w-qa">
						<h4><?php echo sbt_t1_text( 'C.weddings.lodging_title', $p['lodging_title'] ?? '' ); ?></h4>
						<p><?php echo sbt_t1_text( 'C.weddings.lodging_p', $p['lodging_p'] ?? '', array( 'multiline' => true ) ); ?></p>
					</div>
					<div class="sbtw-w-qa">
						<h4><?php echo sbt_t1_text( 'C.weddings.exclusive_title', $p['exclusive_title'] ?? '' ); ?></h4>
						<p><?php echo sbt_t1_text( 'C.weddings.exclusive_p', $p['exclusive_p'] ?? '', array( 'multiline' => true ) ); ?></p>
					</div>
				</div>

				<div class="sbtw-w-sec" id="recensioni">
					<h2><?php echo sbt_t1_text( 'C.weddings.reviews_title', $p['reviews_title'] ?? '' ); ?></h2>
					<p><?php echo sbt_t1_text( 'C.weddings.reviews_p', $p['reviews_p'] ?? '', array( 'multiline' => true ) ); ?></p>
					<div class="sbtw-w-reviews">
						<?php foreach ( $p['reviews'] ?? array() as $index => $review ) : ?>
							<div class="sbtw-w-rev" data-album="<?php echo esc_attr( $album ); ?>">
								<?php echo sbt_t1_img( 'C.weddings.reviews.' . $index . '.2', $review[2] ?? ( $gallery[0] ?? '' ), $review[0] ?? '' ); ?>
								<div class="sbtw-rv-c"><b><?php echo sbt_t1_text( 'C.weddings.reviews.' . $index . '.0', $review[0] ?? '' ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.reviews.' . $index . '.1', $review[1] ?? '' ); ?></span></div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="sbtw-w-sec" id="promozioni">
					<h2><?php echo sbt_t1_text( 'C.weddings.promos_title', $p['promos_title'] ?? '' ); ?></h2>
					<div class="sbtw-w-promos">
						<?php foreach ( $p['promos'] ?? array() as $index => $promo ) : ?>
							<div class="sbtw-w-promo">
								<span class="sbtw-pr-tag"><?php echo sbt_t1_text( 'C.weddings.promos.' . $index . '.0', $promo[0] ?? '' ); ?></span>
								<h4><?php echo sbt_t1_text( 'C.weddings.promos.' . $index . '.1', $promo[1] ?? '' ); ?></h4>
								<div class="sbtw-pr-exp"><?php echo sbt_t1_text( 'C.weddings.promos.' . $index . '.2', $promo[2] ?? '' ); ?></div>
								<a href="<?php echo esc_url( sbt_t1_url( $promo[4] ?? 'contacts.php' ) ); ?>"><?php echo sbt_t1_text( 'C.weddings.promos.' . $index . '.3', $promo[3] ?? '' ); ?> -&gt;</a>
								<?php echo sbt_t1_control( 'C.weddings.promos.' . $index . '.4', $promo[4] ?? '', 'Link promo', 'url' ); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="sbtw-w-sec" id="mappa">
					<h2><?php echo sbt_t1_text( 'C.weddings.map_title', $p['map_title'] ?? '' ); ?></h2>
					<p><?php echo sbt_t1_text( 'C.weddings.map_p', $p['map_p'] ?? '', array( 'multiline' => true ) ); ?></p>
					<?php if ( ! empty( $SITE['map_embed'] ) ) : ?>
						<div class="sbtw-w-map"><iframe src="<?php echo esc_url( $SITE['map_embed'] ); ?>" title="Mappa <?php echo esc_attr( $SITE['name'] ); ?>" loading="lazy"></iframe></div>
					<?php endif; ?>
				</div>

				<div class="sbtw-w-sec" id="faq">
					<h2><?php echo sbt_t1_text( 'C.weddings.faq_title', $p['faq_title'] ?? '' ); ?></h2>
					<div class="sbtw-w-faq">
						<?php foreach ( $p['faqs'] ?? array() as $index => $faq ) : ?>
							<details <?php echo 0 === $index ? 'open' : ''; ?>>
								<summary><?php echo sbt_t1_text( 'C.weddings.faqs.' . $index . '.0', $faq[0] ?? '' ); ?></summary>
								<p><?php echo sbt_t1_text( 'C.weddings.faqs.' . $index . '.1', $faq[1] ?? '', array( 'multiline' => true ) ); ?></p>
							</details>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<aside class="sbtw-w-aside">
				<div class="sbtw-w-quote">
					<div class="sbtw-w-quote-top">
						<div class="sbtw-w-rating">
							<div class="sbtw-score"><?php echo sbt_t1_text( 'C.weddings.quote_score', $p['quote_score'] ?? '5,0' ); ?></div>
							<div class="sbtw-rt-t"><b><?php echo sbt_t1_text( 'C.weddings.quote_rating', $p['quote_rating'] ?? '' ); ?></b><span class="sbtw-st">*****</span><span> - <?php echo sbt_t1_text( 'C.weddings.quote_reviews', $p['quote_reviews'] ?? '' ); ?></span></div>
						</div>
						<div class="sbtw-w-qrow"><?php echo $pin_svg; ?> <?php echo sbt_t1_text( 'C.weddings.quote_location', $p['quote_location'] ?? '' ); ?></div>
						<div class="sbtw-w-qrow"><?php echo $clock_svg; ?> <?php echo sbt_t1_text( 'C.weddings.quote_promos', $p['quote_promos'] ?? '' ); ?></div>
					</div>
					<div class="sbtw-w-prices">
						<div class="sbtw-w-price"><span>Matrimonio</span><b><?php echo sbt_t1_text( 'C.weddings.quote_wedding_price', $p['quote_wedding_price'] ?? '' ); ?></b></div>
						<div class="sbtw-w-price"><span>Evento</span><b><?php echo sbt_t1_text( 'C.weddings.quote_event_price', $p['quote_event_price'] ?? '' ); ?></b></div>
					</div>
					<div class="sbtw-w-cta">
						<button class="sbtw-btn" type="button" id="quoteBtn"><?php echo sbt_t1_text( 'C.weddings.quote_button', $p['quote_button'] ?? '' ); ?></button>
						<div class="sbtw-w-resp"><?php echo $clock_svg; ?> <?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? '' ); ?></div>
					</div>
				</div>
				<div class="sbtw-w-badges">
					<?php foreach ( $p['quote_badges'] ?? array() as $index => $badge ) : ?>
						<div class="sbtw-w-badge"><?php echo $check_svg; ?><?php echo sbt_t1_text( 'C.weddings.quote_badges.' . $index, $badge ); ?></div>
					<?php endforeach; ?>
				</div>
			</aside>
		</div>
	</div>
</section>

<section class="sbtw-band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.weddings.cta_bg', $p['cta_bg'] ?? ( $gallery[0] ?? '' ) ) ); ?>" data-screen-label="Weddings CTA">
	<div class="sbtw-inner sbtw-reveal">
		<?php echo sbt_t1_control( 'C.weddings.cta_bg', $p['cta_bg'] ?? '', 'Immagine sfondo', 'image' ); ?>
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.weddings.cta_over', $p['cta_over'] ?? '' ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.weddings.cta_h2', $p['cta_h2'] ?? '', array( 'multiline' => true ) ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.weddings.cta_p', $p['cta_p'] ?? '', array( 'multiline' => true ) ); ?></p>
		<a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.weddings.cta_btn', $p['cta_btn'] ?? '' ); ?></a>
		<?php echo sbt_t1_control( 'C.weddings.cta_url', $p['cta_url'] ?? 'contacts.php', 'Link bottone', 'url' ); ?>
	</div>
</section>

<div class="sbtw-w-mbar" data-screen-label="Mobile contact bar">
	<div class="sbtw-w-mbar-txt"><b><?php echo sbt_t1_text( 'C.weddings.mobile_bar_title', $p['mobile_bar_title'] ?? '' ); ?></b><span><?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? '' ); ?></span></div>
	<button class="sbtw-btn" type="button" id="quoteBtnM"><?php echo sbt_t1_text( 'C.weddings.mobile_bar_button', $p['mobile_bar_button'] ?? '' ); ?></button>
</div>

<div class="sbtw-w-modal" id="quoteModal" aria-hidden="true">
	<div class="sbtw-w-modal-back" data-close-modal></div>
	<div class="sbtw-w-modal-card" role="dialog" aria-modal="true" aria-labelledby="quoteTitle">
		<button class="sbtw-w-modal-x" type="button" data-close-modal aria-label="Chiudi">&times;</button>
		<div class="sbtw-overline" style="color:var(--gold);"><?php echo sbt_t1_text( 'C.weddings.quote_modal_over', $p['quote_modal_over'] ?? '' ); ?></div>
		<h3 id="quoteTitle"><?php echo sbt_t1_text( 'C.weddings.quote_modal_title', $p['quote_modal_title'] ?? '' ); ?></h3>
		<p class="sbtw-w-modal-sub"><?php echo sbt_t1_text( 'C.weddings.quote_modal_sub', $p['quote_modal_sub'] ?? '', array( 'multiline' => true ) ); ?></p>
		<form class="sbtw-w-form" id="quoteForm" data-sbt-form="quote" method="post">
			<label>Nome &amp; Cognome
				<input type="text" name="name" required autocomplete="name" placeholder="Mario Rossi" />
			</label>
			<label>Email
				<input type="email" name="email" required autocomplete="email" placeholder="mario.rossi@email.com" />
			</label>
			<label>Telefono
				<input type="tel" name="phone" required autocomplete="tel" placeholder="+39 333 123 4567" />
			</label>
			<label>Note
				<textarea name="message" rows="4"><?php echo esc_textarea( $p['quote_modal_notes'] ?? '' ); ?></textarea>
			</label>
			<label style="position:absolute;left:-9999px;" aria-hidden="true">Website
				<input type="text" name="website" tabindex="-1" autocomplete="off" />
			</label>
			<button class="sbtw-btn" type="submit" style="width:100%;justify-content:center;">Invia richiesta</button>
			<div class="sbtw-w-resp" style="margin-top:12px;"><?php echo $clock_svg; ?> <?php echo sbt_t1_text( 'C.weddings.quote_response', $p['quote_response'] ?? '' ); ?></div>
			<p class="form-result" aria-live="polite" style="display:none;"></p>
		</form>
		<div class="sbtw-w-form-ok" id="quoteOk" hidden>
			<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M7.5 12.5l3 3 6-6"/></svg>
			<h4><?php echo sbt_t1_text( 'C.weddings.quote_modal_ok_title', $p['quote_modal_ok_title'] ?? '' ); ?></h4>
			<p><?php echo sbt_t1_text( 'C.weddings.quote_modal_ok_p', $p['quote_modal_ok_p'] ?? '', array( 'multiline' => true ) ); ?></p>
		</div>
	</div>
</div>

<?php require __DIR__ . '/inc/footer.php'; ?>
