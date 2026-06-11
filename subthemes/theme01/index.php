<?php
$PAGE = 'home';
require __DIR__ . '/inc/header.php';
$p = $C['home'];
?>

<section class="hero" id="top" data-screen-label="Hero">
	<div class="hero-video">
		<?php if ( ! empty( $SITE['vimeo'] ) ) : ?>
			<iframe src="https://player.vimeo.com/video/<?php echo esc_attr( $SITE['vimeo'] ); ?>?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=<?php echo esc_attr( $SITE['vimeo'] ); ?>&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="<?php echo esc_attr( $SITE['name'] ); ?>"></iframe>
		<?php endif; ?>
	</div>
	<div class="hero-overlay"></div>
	<div class="hero-inner">
		<div class="overline"><?php echo sbt_t1_text( 'C.home.hero_over', $p['hero_over'] ); ?></div>
		<h1><?php echo sbt_t1_text( 'C.home.hero_h1', $p['hero_h1'], array( 'multiline' => true ) ); ?></h1>
		<p class="sub"><?php echo sbt_t1_text( 'C.home.hero_sub', $p['hero_sub'], array( 'multiline' => true ) ); ?></p>
	</div>
	<div class="scrolldown"><span><?php echo sbt_t1_text( 'C.home.scroll_label', $p['scroll_label'] ); ?></span><span class="line"></span></div>
</section>

<section class="pad" id="welcome" data-screen-label="Welcome">
	<div class="wrap">
		<div class="two-col">
			<div class="reveal">
				<div class="overline"><?php echo sbt_t1_text( 'C.home.welcome_over', $p['welcome_over'] ); ?></div>
				<h2 class="lead"><?php echo sbt_t1_text( 'C.home.welcome_h2', $p['welcome_h2'], array( 'multiline' => true ) ); ?></h2>
				<p class="body-text"><?php echo sbt_t1_text( 'C.home.welcome_p1', $p['welcome_p1'], array( 'multiline' => true ) ); ?></p>
				<p class="body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.home.welcome_p2', $p['welcome_p2'], array( 'multiline' => true ) ); ?></p>
				<a class="btn btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['welcome_url'] ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'TEXT.discover_villa', $TEXT['discover_villa'] ); ?></a>
				<?php echo sbt_t1_control( 'C.home.welcome_url', $p['welcome_url'], 'Link bottone', 'url' ); ?>
			</div>
			<div class="media reveal media-carousel" data-carousel>
				<div class="mc-track">
					<?php foreach ( $p['welcome_gallery'] as $index => $image ) : ?>
						<?php echo sbt_t1_img( 'C.home.welcome_gallery.' . $index, $image, $SITE['name'], array( 'data-lightbox' => '' ) ); ?>
					<?php endforeach; ?>
				</div>
				<button class="mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
				<button class="mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
				<div class="mc-dots"></div>
				<div class="frame"></div>
				<div class="stamp"><?php echo sbt_t1_text( 'C.home.welcome_stamp', $p['welcome_stamp'], array( 'multiline' => true ) ); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="sbtw-pad-s pad-s" data-screen-label="Gallery">
	<div class="sbtw-wrap wrap">
		<div class="sbtw-section-head sbtw-reveal section-head reveal" style="margin-bottom:40px;">
			<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.home.gallery_over', $p['gallery_over'] ?? 'A look inside' ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.gallery_h2', $p['gallery_h2'] ?? 'Spaces that tell a story' ); ?></h2>
		</div>
		<?php sbt_t1_mosaic( 'C.home.gallery', $p['gallery'] ?? $p['welcome_gallery'], $SITE['name'], $TEXT['show_all_photos'] ?? 'Show all photos' ); ?>
	</div>
</section>

<section class="sbtw-pad-s pad-s" id="entire-villa" style="background:var(--surface);" data-screen-label="Entire villa">
	<div class="sbtw-wrap sbtw-two-col wrap two-col">
		<?php sbt_t1_carousel( 'C.home.entire_gallery', $p['entire_gallery'] ?? $p['welcome_gallery'], $p['entire_h2'] ?? $SITE['name'], true, true ); ?>
		<div class="sbtw-reveal reveal">
			<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.home.entire_over', $p['entire_over'] ?? 'Rent the entire villa' ); ?></div>
			<h2 class="sbtw-lead lead"><?php echo sbt_t1_text( 'C.home.entire_h2', $p['entire_h2'] ?? 'Villa Rosa,<br/>all to yourself', array( 'multiline' => true ) ); ?></h2>
			<p class="sbtw-body-text body-text"><?php echo sbt_t1_text( 'C.home.entire_p', $p['entire_p'] ?? '', array( 'multiline' => true ) ); ?></p>
			<div class="sbtw-house-actions house-actions">
				<a class="sbtw-btn btn" href="<?php echo esc_url( sbt_t1_url( $p['entire_url'] ?? sbt_entire_nav_url( 'theme01' ) ) ); ?>"><?php echo sbt_t1_text( 'C.home.entire_btn', $p['entire_btn'] ?? sbt_entire_label( 'theme01' ) ); ?></a>
				<?php echo sbt_t1_control( 'C.home.entire_url', $p['entire_url'] ?? sbt_entire_nav_url( 'theme01' ), 'Link bottone', 'url' ); ?>
			</div>
		</div>
	</div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || ! sbt_is_entire_rental_mode( 'theme01' ) ) : ?>
<section class="houses pad" id="houses" data-screen-label="Houses">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.home.houses_over', $p['houses_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.houses_h2', $p['houses_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.home.houses_p', $p['houses_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="house-grid">
			<?php foreach ( $HOUSE_CARDS as $index => $house ) : ?>
				<div class="house reveal">
					<div class="ph">
						<span class="tag"><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.tag', $house['tag'] ); ?></span>
						<div class="media-carousel" data-carousel>
							<div class="mc-track">
								<?php foreach ( ( $house['gallery'] ?? array( $house['img'] ) ) as $image_index => $image ) : ?>
									<?php echo sbt_t1_img( 'HOUSE_CARDS.' . $index . '.gallery.' . $image_index, $image, $house['title'] ); ?>
								<?php endforeach; ?>
							</div>
							<button class="mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
							<button class="mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
							<div class="mc-dots"></div>
						</div>
					</div>
					<div class="body">
						<h3><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.title', $house['title'] ); ?></h3>
						<a class="btn btn--light house-cta" href="<?php echo esc_url( sbt_t1_url( $house['url'] ) ); ?>"><?php echo sbt_t1_text( 'TEXT.discover', $TEXT['discover'] ); ?></a>
						<?php echo sbt_t1_control( 'HOUSE_CARDS.' . $index . '.url', $house['url'], 'Link card', 'url' ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="services pad" id="services" data-screen-label="Services">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.home.services_over', $p['services_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.home.services_h2', $p['services_h2'] ); ?></h2>
		</div>
		<div class="svc-grid">
			<?php foreach ( $SERVICES as $index => $service ) : ?>
				<div class="svc reveal">
					<svg viewBox="0 0 24 24"><?php echo $ICON[ $service[0] ] ?? ''; ?></svg>
					<h4><?php echo sbt_t1_text( 'SERVICES.' . $index . '.1', $service[1] ); ?></h4>
					<p><?php echo sbt_t1_text( 'SERVICES.' . $index . '.2', $service[2], array( 'multiline' => true ) ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="band" id="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.band_bg', $p['band_bg'] ) ); ?>" data-screen-label="Surroundings band">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.home.band_bg', $p['band_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.home.band_over', $p['band_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.band_h2', $p['band_h2'], array( 'multiline' => true ) ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.home.band_p', $p['band_p'], array( 'multiline' => true ) ); ?></p>
	</div>
</section>

<section class="feature pad" data-screen-label="SPA & Experience">
	<div class="wrap">
		<div class="two-col" id="spa">
			<?php sbt_t1_carousel( 'C.home.spa_gallery', $p['spa_gallery'], 'SPA & Wellness', true, true ); ?>
			<div class="reveal">
				<div class="label"><?php echo sbt_t1_text( 'C.home.spa_label', $p['spa_label'] ); ?></div>
				<h3><?php echo sbt_t1_text( 'C.home.spa_teaser_h3', $p['spa_teaser_h3'] ); ?></h3>
				<p class="body-text"><?php echo sbt_t1_text( 'C.home.spa_teaser_p', $p['spa_teaser_p'], array( 'multiline' => true ) ); ?></p>
				<a class="btn btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['spa_teaser_url'] ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'TEXT.discover_spa', $TEXT['discover_spa'] ); ?></a>
				<?php echo sbt_t1_control( 'C.home.spa_teaser_url', $p['spa_teaser_url'], 'Link bottone', 'url' ); ?>
			</div>
		</div>
		<div class="two-col" id="experience">
			<div class="reveal">
				<div class="label"><?php echo sbt_t1_text( 'C.home.experience_label', $p['experience_label'] ); ?></div>
				<h3><?php echo sbt_t1_text( 'C.home.experience_teaser_h3', $p['experience_teaser_h3'] ); ?></h3>
				<p class="body-text"><?php echo sbt_t1_text( 'C.home.experience_teaser_p', $p['experience_teaser_p'], array( 'multiline' => true ) ); ?></p>
				<a class="btn btn--ghost" href="<?php echo esc_url( sbt_t1_url( $p['experience_teaser_url'] ) ); ?>" style="margin-top:28px;"><?php echo sbt_t1_text( 'TEXT.explore_experiences', $TEXT['explore_experiences'] ); ?></a>
				<?php echo sbt_t1_control( 'C.home.experience_teaser_url', $p['experience_teaser_url'], 'Link bottone', 'url' ); ?>
			</div>
			<?php sbt_t1_carousel( 'C.home.experience_gallery', $p['experience_gallery'], 'Apulian Experience', true, true ); ?>
		</div>
	</div>
</section>

<section class="offers" id="offers" data-screen-label="Offers">
	<div class="wrap inner reveal">
		<div class="overline"><?php echo sbt_t1_text( 'C.home.offers_over', $p['offers_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.offers_h2', $p['offers_h2'] ); ?></h2>
		<p class="body-text" style="margin:0 auto 36px;color:rgba(255,255,255,.88);max-width:50ch;"><?php echo sbt_t1_text( 'C.home.offers_p', $p['offers_p'], array( 'multiline' => true ) ); ?></p>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['offers_url'] ) ); ?>"><?php echo sbt_t1_text( 'C.home.offers_btn', $p['offers_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.home.offers_url', $p['offers_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php
$home_cta_url = ( function_exists( 'sbt_is_entire_rental_mode' ) && sbt_is_entire_rental_mode( 'theme01' ) ) ? ( $p['entire_url'] ?? sbt_entire_nav_url( 'theme01' ) ) : $p['house_cta_url'];
$home_cta_h2 = ( function_exists( 'sbt_is_entire_rental_mode' ) && sbt_is_entire_rental_mode( 'theme01' ) ) ? ( $p['entire_h2'] ?? $p['house_cta_h2'] ) : $p['house_cta_h2'];
$home_cta_btn = ( function_exists( 'sbt_is_entire_rental_mode' ) && sbt_is_entire_rental_mode( 'theme01' ) ) ? ( $p['entire_btn'] ?? $p['house_cta_btn'] ) : $p['house_cta_btn'];
?>
<section class="cta-band" id="house-cta" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.home.house_cta_bg', $p['house_cta_bg'] ) ); ?>" data-screen-label="Houses CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.home.house_cta_bg', $p['house_cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.home.house_cta_over', $p['house_cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.home.house_cta_h2', $home_cta_h2, array( 'multiline' => true ) ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $home_cta_url ) ); ?>"><?php echo sbt_t1_text( 'C.home.house_cta_btn', $home_cta_btn ); ?></a>
		<?php echo sbt_t1_control( 'C.home.house_cta_url', $home_cta_url, 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
