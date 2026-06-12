<?php
$PAGE = 'home';
require __DIR__ . '/inc/header.php';
$p = $C['home'];
$display_cards = $HOUSE_CARDS;
if ( function_exists( 'sbt_is_entire_rental_mode' ) && sbt_is_entire_rental_mode( 'theme03' ) && ! $display_cards ) {
	$display_cards = array(
		array(
			'tag' => 'Exclusive use',
			'title' => sbt_entire_label( 'theme03' ),
			'gallery' => $C['whole']['gallery'] ?? array( $IMG['whole'] ),
			'url' => sbt_entire_nav_url( 'theme03' ),
		),
		array(
			'tag' => 'Outdoors',
			'title' => 'Pool',
			'gallery' => $C['pool']['gallery'] ?? array( $IMG['pool'] ),
			'url' => 'pool.php',
		),
	);
}
?>

<section class="sbtw-hero" id="top" data-screen-label="Hero">
	<div class="sbtw-hero-video" data-heroslide>
		<?php foreach ( $p['hero_slides'] as $index => $image ) : ?>
			<?php echo sbt_t1_img( 'C.home.hero_slides.' . $index, $image, $SITE['name'] ); ?>
		<?php endforeach; ?>
	</div>
	<div class="sbtw-hero-overlay"></div>
	<div class="sbtw-hero-inner">
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.hero_over', $p['hero_over'] ); ?></div>
		<h1><?php echo sbt_t1_text( 'C.home.hero_h1', $p['hero_h1'], array( 'multiline' => true ) ); ?></h1>
		<p class="sbtw-sub"><?php echo sbt_t1_text( 'C.home.hero_sub', $p['hero_sub'], array( 'multiline' => true ) ); ?></p>
	</div>
	<div class="sbtw-scrolldown"><span><?php echo sbt_t1_text( 'C.home.scroll_label', $p['scroll_label'] ); ?></span><span class="sbtw-line"></span></div>
</section>

<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
	<div class="sbtw-wrap">
		<div class="sbtw-two-col">
			<div class="sbtw-reveal">
				<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.welcome_over', $p['welcome_over'] ); ?></div>
				<h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.home.welcome_h2', $p['welcome_h2'], array( 'multiline' => true ) ); ?></h2>
				<p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.welcome_p1', $p['welcome_p1'], array( 'multiline' => true ) ); ?></p>
				<p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.welcome_p2', $p['welcome_p2'], array( 'multiline' => true ) ); ?></p>
				<a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['welcome_url'] ) ); ?>" style="margin-top:30px;">Discover the Masseria</a>
				<?php echo sbt_t1_control( 'C.home.welcome_url', $p['welcome_url'], 'Button link', 'url' ); ?>
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

<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Discover">
	<div class="sbtw-wrap">
		<div class="sbtw-section-head sbtw-reveal">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.houses_over', $p['houses_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.houses_h2', $p['houses_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.home.houses_p', $p['houses_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="sbtw-house-grid">
			<?php foreach ( $display_cards as $index => $card ) : ?>
				<?php if ( function_exists( 'sbt_is_entire_rental_mode' ) && ! sbt_is_entire_rental_mode( 'theme03' ) && 'whole-masseria.php' === ( $card['url'] ?? '' ) ) : ?>
					<?php continue; ?>
				<?php endif; ?>
				<div class="sbtw-house sbtw-reveal">
					<div class="sbtw-ph">
						<span class="sbtw-tag"><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.tag', $card['tag'] ); ?></span>
						<?php sbt_t1_carousel( 'HOUSE_CARDS.' . $index . '.gallery', $card['gallery'], $card['title'], false, false ); ?>
					</div>
					<div class="sbtw-body">
						<h3><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.title', $card['title'] ); ?></h3>
						<a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( $card['url'] ) ); ?>"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?></a>
						<?php echo sbt_t1_control( 'HOUSE_CARDS.' . $index . '.url', $card['url'], 'Link card', 'url' ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
	<div class="sbtw-wrap">
		<div class="sbtw-section-head sbtw-reveal">
			<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.services_over', $p['services_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.services_h2', $p['services_h2'] ); ?></h2>
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

<section class="sbtw-band" id="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.band_bg', $p['band_bg'] ) ); ?>" data-screen-label="Surroundings band">
	<div class="sbtw-inner sbtw-reveal">
		<?php echo sbt_t1_control( 'C.home.band_bg', $p['band_bg'], 'Background image', 'image' ); ?>
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.band_over', $p['band_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.band_h2', $p['band_h2'], array( 'multiline' => true ) ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.home.band_p', $p['band_p'], array( 'multiline' => true ) ); ?></p>
	</div>
</section>

<section class="sbtw-feature sbtw-pad" data-screen-label="Farm & Surroundings">
	<div class="sbtw-wrap">
		<div class="sbtw-two-col" id="farm">
			<?php sbt_t1_carousel( 'C.home.farm_gallery', $p['farm_gallery'], $p['farm_h3'], true, true ); ?>
			<div class="sbtw-reveal">
				<div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.farm_label', $p['farm_label'] ); ?></div>
				<h3><?php echo sbt_t1_text( 'C.home.farm_h3', $p['farm_h3'] ); ?></h3>
				<p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.farm_p', $p['farm_p'], array( 'multiline' => true ) ); ?></p>
				<a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['farm_url'] ) ); ?>" style="margin-top:28px;">Discover the farm</a>
				<?php echo sbt_t1_control( 'C.home.farm_url', $p['farm_url'], 'Button link', 'url' ); ?>
			</div>
		</div>
		<div class="sbtw-two-col" id="explore">
			<div class="sbtw-reveal">
				<div class="sbtw-label"><?php echo sbt_t1_text( 'C.home.surroundings_label', $p['surroundings_label'] ); ?></div>
				<h3><?php echo sbt_t1_text( 'C.home.surroundings_h3', $p['surroundings_h3'] ); ?></h3>
				<p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.home.surroundings_p', $p['surroundings_p'], array( 'multiline' => true ) ); ?></p>
				<a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['surroundings_url'] ) ); ?>" style="margin-top:28px;">Explore the area</a>
				<?php echo sbt_t1_control( 'C.home.surroundings_url', $p['surroundings_url'], 'Button link', 'url' ); ?>
			</div>
			<?php sbt_t1_carousel( 'C.home.surroundings_gallery', $p['surroundings_gallery'], $p['surroundings_h3'], true, true ); ?>
		</div>
	</div>
</section>

<section class="sbtw-cta-band" id="house-cta" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Stay CTA">
	<div class="sbtw-inner sbtw-reveal">
		<?php echo sbt_t1_control( 'C.home.cta_bg', $p['cta_bg'], 'Background image', 'image' ); ?>
		<div class="sbtw-overline"><?php echo sbt_t1_text( 'C.home.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.cta_h2', $p['cta_h2'], array( 'multiline' => true ) ); ?></h2>
		<a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>"><?php echo sbt_t1_text( 'C.home.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.home.cta_url', $p['cta_url'], 'Button link', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
