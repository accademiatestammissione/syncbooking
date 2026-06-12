<?php
$PAGE = 'villa';
require __DIR__ . '/inc/header.php';
$p = $C['villa'];
sbt_t1_page_hero( 'villa', $p, 'Villa' );
?>

<section class="pad" data-screen-label="Villa intro">
	<div class="wrap two-col">
		<div class="reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.villa.intro_over', $p['intro_over'] ); ?></div>
			<h2 class="lead"><?php echo sbt_t1_text( 'C.villa.intro_h2', $p['intro_h2'], array( 'multiline' => true ) ); ?></h2>
		</div>
		<div class="reveal">
			<?php foreach ( $p['intro_p'] as $index => $text ) : ?>
				<p class="body-text" style="max-width:54ch;<?php echo $index ? 'margin-top:18px;' : ''; ?>"><?php echo sbt_t1_text( 'C.villa.intro_p.' . $index, $text, array( 'multiline' => true ) ); ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
	<div class="wrap">
		<div class="gallery">
			<?php foreach ( $p['gallery'] as $index => $image ) : ?>
				<?php echo sbt_t1_img( 'C.villa.gallery.' . $index, $image, $SITE['name'], array( 'data-lightbox' => '' ) ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Villa amenities">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.villa.am_over', $p['am_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.villa.am_h2', $p['am_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.villa.am_p', $p['am_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<?php sbt_t1_amenities( 'C.villa.amenities', $p['amenities'], $ICON ); ?>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.villa.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Villa CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.villa.cta_bg', $p['cta_bg'], 'Background image', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.villa.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.villa.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.villa.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.villa.cta_url', $p['cta_url'], 'Button link', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
