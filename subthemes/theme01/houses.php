<?php
$PAGE = 'houses';
require __DIR__ . '/inc/header.php';
$p = $C['houses'];
sbt_t1_page_hero( 'houses', $p, $TEXT['houses'] ?? 'Houses' );
?>

<section class="pad" data-screen-label="Houses intro">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.houses.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.houses.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.houses.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="house-grid">
			<?php foreach ( $HOUSE_CARDS as $index => $house ) : ?>
				<a class="house reveal" href="<?php echo esc_url( sbt_t1_url( $house['url'] ) ); ?>">
					<div class="ph">
						<span class="tag"><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.tag', $house['tag'] ); ?></span>
						<?php echo sbt_t1_img( 'HOUSE_CARDS.' . $index . '.img', $house['img'], $house['title'] ); ?>
					</div>
					<div class="body">
						<h3><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.listing_title', $house['listing_title'] ?? $house['title'] ); ?></h3>
						<ul class="specs">
							<?php foreach ( $house['specs'] as $spec_index => $spec ) : ?>
								<li><span><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.specs.' . $spec_index . '.0', $spec[0] ); ?></span><b><?php echo sbt_t1_text( 'HOUSE_CARDS.' . $index . '.specs.' . $spec_index . '.1', $spec[1] ); ?></b></li>
							<?php endforeach; ?>
						</ul>
						<span class="btn btn--light house-cta"><?php echo sbt_t1_text( 'TEXT.discover', $TEXT['discover'] ); ?></span>
						<?php echo sbt_t1_control( 'HOUSE_CARDS.' . $index . '.url', $house['url'], 'Link card', 'url' ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.houses.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Houses CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.houses.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.houses.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.houses.cta_h2', $p['cta_h2'] ); ?></h2>
		<p><?php echo sbt_t1_text( 'C.houses.cta_p', $p['cta_p'], array( 'multiline' => true ) ); ?></p>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.houses.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.houses.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
