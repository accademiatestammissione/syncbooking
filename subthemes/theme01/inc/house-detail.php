<?php
$CONTENT_KEY = isset( $CONTENT_KEY ) && isset( $C[ $CONTENT_KEY ] ) ? $CONTENT_KEY : 'house';
$p = $C[ $CONTENT_KEY ];
sbt_t1_page_hero(
	$CONTENT_KEY,
	$p,
	$p['crumb_label'] ?? $p['h1'],
	array( 'url' => 'houses.php', 'label' => $TEXT['houses'] ?? 'Houses' )
);
?>

<section class="pad" data-screen-label="<?php echo esc_attr( $p['h1'] . ' overview' ); ?>">
	<div class="wrap two-col">
		<?php sbt_t1_carousel( 'C.' . $CONTENT_KEY . '.overview_gallery', $p['overview_gallery'], $p['h1'], true, true ); ?>
		<div class="reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_over', $p['intro_over'] ); ?></div>
			<h2 class="lead"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_h2', $p['intro_h2'], array( 'multiline' => true ) ); ?></h2>
			<p class="body-text"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
			<ul class="specs" style="margin-top:28px;max-width:420px;">
				<?php foreach ( $p['specs'] as $index => $spec ) : ?>
					<li><span><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.specs.' . $index . '.0', $spec[0] ); ?></span><b><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.specs.' . $index . '.1', $spec[1] ); ?></b></li>
				<?php endforeach; ?>
			</ul>
			<div class="house-actions">
				<a class="btn" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'TEXT.request_availability', $TEXT['request_availability'] ); ?></a>
				<a class="btn btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>"><?php echo sbt_t1_text( 'TEXT.price_condition', $TEXT['price_condition'] ); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="pad-s" style="background:var(--surface);" data-screen-label="<?php echo esc_attr( $p['h1'] . ' gallery' ); ?>">
	<div class="wrap">
		<div class="section-head reveal" style="margin-bottom:40px;">
			<div class="overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.gallery_over', $p['gallery_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.gallery_h2', $p['gallery_h2'] ); ?></h2>
		</div>
		<?php sbt_t1_mosaic( 'C.' . $CONTENT_KEY . '.gallery', $p['gallery'], $p['h1'], $TEXT['show_all_photos'] ); ?>
	</div>
</section>

<section class="pad-s" data-screen-label="<?php echo esc_attr( $p['h1'] . ' included' ); ?>">
	<div class="wrap">
		<div class="section-head reveal" style="margin-bottom:48px;">
			<div class="overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.included_over', $p['included_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.included_h2', $p['included_h2'] ); ?></h2>
		</div>
		<?php sbt_t1_amenities( 'C.' . $CONTENT_KEY . '.included', $p['included'], $ICON ); ?>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.' . $CONTENT_KEY . '.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="<?php echo esc_attr( $p['h1'] . ' CTA' ); ?>">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.' . $CONTENT_KEY . '.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.' . $CONTENT_KEY . '.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>
