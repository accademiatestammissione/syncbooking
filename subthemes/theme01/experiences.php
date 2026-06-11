<?php
$PAGE = 'experiences';
require __DIR__ . '/inc/header.php';
$p = $C['experiences'];
sbt_t1_page_hero( 'experiences', $p, 'Experiences' );
?>

<section class="pad" data-screen-label="Experiences intro">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.experiences.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.experiences.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.experiences.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="exp-grid">
			<?php foreach ( $p['cards'] as $index => $card ) : ?>
				<a class="exp reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ) ); ?>">
					<?php echo sbt_t1_img( 'C.experiences.cards.' . $index . '.img', $card['img'], $card['h3'] ); ?>
					<div class="ex-body"><div class="overline"><?php echo sbt_t1_text( 'C.experiences.cards.' . $index . '.over', $card['over'] ); ?></div><h3><?php echo sbt_t1_text( 'C.experiences.cards.' . $index . '.h3', $card['h3'] ); ?></h3><div class="ex-link"><?php echo sbt_t1_text( 'TEXT.discover', $TEXT['discover'] ); ?> <span></span></div></div>
					<?php echo sbt_t1_control( 'C.experiences.cards.' . $index . '.url', $card['url'], 'Link card', 'url' ); ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
	<div class="wrap">
		<div class="section-head reveal" style="margin-bottom:44px;">
			<div class="overline"><?php echo sbt_t1_text( 'C.experiences.wellness_over', $p['wellness_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.experiences.wellness_h2', $p['wellness_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.experiences.wellness_p', $p['wellness_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<?php sbt_t1_mosaic( 'C.experiences.wellness_gallery', $p['wellness_gallery'], 'Villa Rosa SPA', $TEXT['show_all_photos'] ); ?>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.experiences.band_bg', $p['band_bg'] ) ); ?>" data-screen-label="Experiences band">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.experiences.band_bg', $p['band_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.experiences.band_over', $p['band_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.experiences.band_h2', $p['band_h2'], array( 'multiline' => true ) ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.experiences.band_p', $p['band_p'], array( 'multiline' => true ) ); ?></p>
	</div>
</section>

<section class="pad" data-screen-label="Experiences CTA">
	<div class="wrap" style="text-align:center;">
		<div class="reveal" style="max-width:620px;margin:0 auto;">
			<div class="overline"><?php echo sbt_t1_text( 'C.experiences.cta_over', $p['cta_over'] ); ?></div>
			<h2 class="lead" style="margin-bottom:24px;"><?php echo sbt_t1_text( 'C.experiences.cta_h2', $p['cta_h2'] ); ?></h2>
			<a class="btn" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>"><?php echo sbt_t1_text( 'C.experiences.cta_btn', $p['cta_btn'] ); ?></a>
			<?php echo sbt_t1_control( 'C.experiences.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
		</div>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
