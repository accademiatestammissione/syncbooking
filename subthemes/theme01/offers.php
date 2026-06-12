<?php
$PAGE = 'offers';
require __DIR__ . '/inc/header.php';
$p = $C['offers'];
sbt_t1_page_hero( 'offers', $p, 'Offers' );
?>

<section class="pad" data-screen-label="Offers intro">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.offers.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.offers.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.offers.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="offer-grid">
			<?php foreach ( $p['cards'] as $index => $card ) : ?>
				<a class="offer-card reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ) ); ?>">
					<?php echo sbt_t1_img( 'C.offers.cards.' . $index . '.img', $card['img'], $card['h3'] ); ?>
					<div class="oc-body">
						<span class="badge"><?php echo sbt_t1_text( 'C.offers.cards.' . $index . '.badge', $card['badge'] ); ?></span>
						<h3><?php echo sbt_t1_text( 'C.offers.cards.' . $index . '.h3', $card['h3'] ); ?></h3>
						<p><?php echo sbt_t1_text( 'C.offers.cards.' . $index . '.p', $card['p'], array( 'multiline' => true ) ); ?></p>
					</div>
					<?php echo sbt_t1_control( 'C.offers.cards.' . $index . '.url', $card['url'], 'Link card', 'url' ); ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.offers.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Offers CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.offers.cta_bg', $p['cta_bg'], 'Background image', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.offers.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.offers.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.offers.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.offers.cta_url', $p['cta_url'], 'Button link', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
