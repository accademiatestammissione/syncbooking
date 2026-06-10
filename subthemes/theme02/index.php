<?php
$PAGE = 'home';
require __DIR__ . '/inc/header.php';
$p = $C['home'];
if ( empty( $HOUSE_CARDS ) ) {
	$HOUSE_CARDS = array(
		array(
			'tag' => 'Double',
			'title' => 'Camera degli Ulivi',
			'gallery' => $C['house']['overview_gallery'] ?? array( $IMG['room_main'] ),
			'url' => 'house.php',
		),
		array(
			'tag' => 'Double',
			'title' => 'Camera del Ciliegio',
			'gallery' => $C['house']['gallery'] ?? array( $IMG['room_main'] ),
			'url' => 'house.php',
		),
		array(
			'tag' => 'Double',
			'title' => 'Camera della Vigna',
			'gallery' => $C['house']['overview_gallery'] ?? array( $IMG['room_main'] ),
			'url' => 'house.php',
		),
	);
}
?>

<section class="sbtw-hero" id="top" data-screen-label="Hero">
	<div class="sbtw-hero-video">
		<img src="<?php echo esc_url( $IMG['whole'] ); ?>" alt="<?php echo esc_attr( $SITE['name'] ); ?>" />
	</div>
	<div class="sbtw-hero-overlay"></div>
	<div class="sbtw-hero-inner">
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.hero_over', $p['hero_over'] ); ?></div>
		<h1><?php echo sbt_t1_text( 'C.home.hero_h1', $p['hero_h1'], array( 'multiline' => true ) ); ?></h1>
		<p class="sbtw-sub"><?php echo sbt_t1_text( 'C.home.hero_sub', $p['hero_sub'], array( 'multiline' => true ) ); ?></p>
	</div>
	<div class="sbtw-scrolldown"><span><?php echo sbt_t1_text( 'C.home.scroll_label', $p['scroll_label'] ?? 'Scroll' ); ?></span><span class="sbtw-line"></span></div>
</section>

<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
	<div class="sbtw-wrap">
		<div class="sbtw-two-col">
			<div class="sbtw-reveal">
				<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.welcome_over', $p['welcome_over'] ); ?></div>
				<h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.welcome_h2', $p['welcome_h2'], array( 'multiline' => true ) ); ?></h2>
				<p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.welcome_p1', $p['welcome_p1'], array( 'multiline' => true ) ); ?></p>
				<p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.welcome_p2', $p['welcome_p2'], array( 'multiline' => true ) ); ?></p>
				<a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['welcome_url'] ?? 'villa.php' ) ); ?>" style="margin-top:30px;"><?php echo esc_html( 'Discover the Masseria' ); ?></a>
				<?php echo sbt_t1_control( 'C.home.welcome_url', $p['welcome_url'] ?? 'villa.php', 'Link bottone', 'url' ); ?>
			</div>
			<?php sbt_t1_carousel( 'C.home.welcome_gallery', $p['welcome_gallery'], $SITE['name'], true, true ); ?>
		</div>
	</div>
</section>

<section class="sbtw-pad-s" data-screen-label="Gallery">
	<div class="sbtw-wrap">
		<div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.gallery_over', $p['gallery_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.gallery_h2', $p['gallery_h2'] ); ?></h2>
		</div>
		<?php sbt_t1_mosaic( 'C.home.gallery', $p['gallery'], $SITE['name'], $TEXT['show_all_photos'] ?? 'Show all photos' ); ?>
	</div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || ! sbt_is_entire_rental_mode( 'theme02' ) ) : ?>
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Rooms">
	<div class="sbtw-wrap">
		<div class="sbtw-section-head sbtw-reveal">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.houses_over', $p['houses_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.houses_h2', $p['houses_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.home.houses_p', $p['houses_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="sbtw-house-grid">
			<?php foreach ( $HOUSE_CARDS as $index => $room ) : ?>
				<div class="sbtw-house sbtw-reveal">
					<div class="sbtw-ph">
						<span class="sbtw-tag"><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.tag', $room['tag'] ?? 'Double' ); ?></span>
						<div class="sbtw-media-carousel" data-carousel>
							<div class="sbtw-mc-track">
								<?php foreach ( ( $room['gallery'] ?? array( $IMG['room_main'] ) ) as $image_index => $image ) : ?>
									<?php echo sbt_t1_img( 'HOUSE_CARDS.' . $index . '.gallery.' . $image_index, $image, $room['title'] ?? 'Room' ); ?>
								<?php endforeach; ?>
							</div>
							<button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
							<button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
							<div class="sbtw-mc-dots"></div>
						</div>
					</div>
					<div class="sbtw-body">
						<h3><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.title', $room['title'] ?? 'Room' ); ?></h3>
						<a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( $room['url'] ?? 'house.php' ) ); ?>"><?php echo sbt_t1_text( 'TEXT.discover', $TEXT['discover'] ?? 'Discover' ); ?></a>
						<?php echo sbt_t1_control( 'HOUSE_CARDS.' . $index . '.url', $room['url'] ?? 'house.php', 'Link card', 'url' ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="sbtw-pad-s" id="whole-masseria" style="background:var(--surface);" data-screen-label="Whole masseria">
	<div class="sbtw-wrap sbtw-two-col">
		<?php sbt_t1_carousel( 'C.home.whole_gallery', $p['whole_gallery'], $p['whole_h2'], true, true ); ?>
		<div class="sbtw-reveal">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.whole_over', $p['whole_over'] ); ?></div>
			<h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.whole_h2', $p['whole_h2'], array( 'multiline' => true ) ); ?></h2>
			<p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.whole_p', $p['whole_p'], array( 'multiline' => true ) ); ?></p>
			<div class="sbtw-house-actions">
				<a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['whole_url'] ?? 'whole-masseria.php' ) ); ?>"><?php echo sbt_t1_text( 'C.home.whole_btn', $p['whole_btn'] ); ?></a>
				<?php echo sbt_t1_control( 'C.home.whole_url', $p['whole_url'] ?? 'whole-masseria.php', 'Link bottone', 'url' ); ?>
			</div>
		</div>
	</div>
</section>

<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
	<div class="sbtw-wrap">
		<div class="sbtw-section-head sbtw-reveal">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.services_over', $p['services_over'] ?? 'Comfort & Care' ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.services_h2', $p['services_h2'] ?? 'The estate at your service' ); ?></h2>
		</div>
		<div class="sbtw-svc-grid">
			<?php foreach ( $SERVICES as $index => $service ) : ?>
				<div class="sbtw-svc sbtw-reveal">
					<svg viewBox="0 0 24 24"><?php echo $ICON[ $service[0] ] ?? ''; ?></svg>
					<h4><?php echo sbt_t1_text( 'SERVICES.' . $index . '.1', $service[1] ); ?></h4>
					<p><?php echo sbt_t1_text( 'SERVICES.' . $index . '.2', $service[2], array( 'multiline' => true ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="sbtw-band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.band_bg', $IMG['masseria_pool'] ) ); ?>" data-screen-label="Surroundings band">
	<div class="sbtw-inner sbtw-reveal">
		<?php echo sbt_t1_control( 'C.home.band_bg', $IMG['masseria_pool'], 'Immagine sfondo', 'image' ); ?>
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.band_over', $p['band_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.band_h2', $p['band_h2'], array( 'multiline' => true ) ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.home.band_p', $p['band_p'], array( 'multiline' => true ) ); ?></p>
	</div>
</section>

<section class="sbtw-cta-band cta-band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.cta_bg', $IMG['whole'] ) ); ?>" data-screen-label="CTA">
	<div class="sbtw-inner sbtw-reveal inner reveal">
		<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.home.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.cta_h2', $p['cta_h2'], array( 'multiline' => true ) ); ?></h2>
		<p class="sbtw-body-text body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.88);max-width:50ch;"><?php echo sbt_t1_text( 'C.home.cta_p', $p['cta_p'], array( 'multiline' => true ) ); ?></p>
		<a class="sbtw-btn sbtw-btn--light btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.home.cta_btn', $p['cta_btn'] ?? 'Request availability' ); ?></a>
		<?php echo sbt_t1_control( 'C.home.cta_url', $p['cta_url'] ?? 'syncbooking:booking', 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
