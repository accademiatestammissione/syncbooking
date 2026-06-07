<?php
$PAGE = 'spa';
require __DIR__ . '/inc/header.php';
$p = $C['spa'];
sbt_t1_page_hero( 'spa', $p, 'SPA & Wellness' );
?>

<section class="pad" data-screen-label="SPA intro">
	<div class="wrap two-col">
		<div class="reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.spa.intro_over', $p['intro_over'] ); ?></div>
			<h2 class="lead"><?php echo sbt_t1_text( 'C.spa.intro_h2', $p['intro_h2'], array( 'multiline' => true ) ); ?></h2>
		</div>
		<div class="reveal">
			<?php foreach ( $p['intro_p'] as $index => $text ) : ?>
				<p class="body-text" style="max-width:54ch;<?php echo $index ? 'margin-top:18px;' : ''; ?>"><?php echo sbt_t1_text( 'C.spa.intro_p.' . $index, $text, array( 'multiline' => true ) ); ?></p>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="feature pad" style="padding-top:0;" data-screen-label="SPA features">
	<div class="wrap">
		<?php foreach ( $p['feat_rows'] as $index => $row ) : ?>
			<div class="two-col">
				<?php if ( 0 === $index % 2 ) : ?>
					<?php sbt_t1_carousel( 'C.spa.feat_rows.' . $index . '.gallery', $row['gallery'], $row['h3'], true, true ); ?>
				<?php endif; ?>
				<div class="reveal">
					<div class="label"><?php echo sbt_t1_text( 'C.spa.feat_rows.' . $index . '.label', $row['label'] ); ?></div>
					<h3><?php echo sbt_t1_text( 'C.spa.feat_rows.' . $index . '.h3', $row['h3'] ); ?></h3>
					<p class="body-text"><?php echo sbt_t1_text( 'C.spa.feat_rows.' . $index . '.p', $row['p'], array( 'multiline' => true ) ); ?></p>
				</div>
				<?php if ( 1 === $index % 2 ) : ?>
					<?php sbt_t1_carousel( 'C.spa.feat_rows.' . $index . '.gallery', $row['gallery'], $row['h3'], true, true ); ?>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="SPA amenities">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.spa.am_over', $p['am_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.spa.am_h2', $p['am_h2'] ); ?></h2>
		</div>
		<?php sbt_t1_amenities( 'C.spa.amenities', $p['amenities'], $ICON ); ?>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.spa.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="SPA CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.spa.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.spa.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.spa.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.spa.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.spa.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
