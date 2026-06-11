<?php
$PAGE = 'surroundings';
require __DIR__ . '/inc/header.php';
$p = $C['surroundings'];
sbt_t1_page_hero( 'surroundings', $p, 'Surroundings' );
?>

<section class="pad" data-screen-label="Surroundings intro">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.surroundings.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.surroundings.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.surroundings.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="exp-grid">
			<?php foreach ( $p['cards'] as $index => $card ) : ?>
				<a class="exp reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ) ); ?>">
					<?php echo sbt_t1_img( 'C.surroundings.cards.' . $index . '.img', $card['img'], $card['h3'] ); ?>
					<div class="ex-body"><div class="overline"><?php echo sbt_t1_text( 'C.surroundings.cards.' . $index . '.over', $card['over'] ); ?></div><h3><?php echo sbt_t1_text( 'C.surroundings.cards.' . $index . '.h3', $card['h3'] ); ?></h3><div class="ex-link"><?php echo sbt_t1_text( 'TEXT.discover', $TEXT['discover'] ); ?> <span></span></div></div>
					<?php echo sbt_t1_control( 'C.surroundings.cards.' . $index . '.url', $card['url'], 'Link card', 'url' ); ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.surroundings.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Surroundings band">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.surroundings.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.surroundings.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.surroundings.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.surroundings.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.surroundings.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
