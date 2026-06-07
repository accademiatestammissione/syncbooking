<?php
$PAGE = 'houses';
require __DIR__ . '/inc/header.php';
$p = $C['price'];
sbt_t1_page_hero( 'price', $p, 'Price & Condition', array( 'url' => 'houses.php', 'label' => $TEXT['houses'] ?? 'Houses' ) );
?>

<section class="pad" data-screen-label="Price intro">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.price.intro_over', $p['intro_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.price.intro_h2', $p['intro_h2'] ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.price.intro_p', $p['intro_p'], array( 'multiline' => true ) ); ?></p>
		</div>
		<div class="book-cta reveal">
			<div class="bc-text">
				<div class="overline"><?php echo sbt_t1_text( 'C.price.book_over', $p['book_over'] ); ?></div>
				<h3><?php echo sbt_t1_text( 'C.price.book_h3', $p['book_h3'] ); ?></h3>
				<p><?php echo sbt_t1_text( 'C.price.book_p', $p['book_p'], array( 'multiline' => true ) ); ?></p>
			</div>
			<div class="bc-action">
				<a class="btn" href="<?php echo esc_url( sbt_t1_url( $p['book_url'] ) ); ?>"><?php echo sbt_t1_text( 'C.price.book_btn', $p['book_btn'] ); ?></a>
				<?php echo sbt_t1_control( 'C.price.book_url', $p['book_url'], 'Link booking', 'url' ); ?>
				<span class="bc-note"><?php echo sbt_t1_text( 'C.price.book_note', $p['book_note'] ); ?></span>
			</div>
		</div>
	</div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Conditions">
	<div class="wrap">
		<div class="section-head reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.price.cond_over', $p['cond_over'] ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.price.cond_h2', $p['cond_h2'] ); ?></h2>
		</div>
		<dl class="cond-list reveal">
			<?php foreach ( $p['conditions'] as $index => $row ) : ?>
				<div class="row"><dt><?php echo sbt_t1_text( 'C.price.conditions.' . $index . '.0', $row[0] ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.conditions.' . $index . '.1', $row[1], array( 'multiline' => true ) ); ?></dd></div>
			<?php endforeach; ?>
		</dl>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.price.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Price CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.price.cta_bg', $p['cta_bg'], 'Immagine sfondo', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.price.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.price.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.price.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.price.cta_url', $p['cta_url'], 'Link bottone', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
