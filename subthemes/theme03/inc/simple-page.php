<?php
$CONTENT_KEY = isset( $CONTENT_KEY ) && isset( $C[ $CONTENT_KEY ] ) ? $CONTENT_KEY : 'villa';
$p = $C[ $CONTENT_KEY ];
sbt_t1_page_hero( $CONTENT_KEY, $p, $p['h1'] ?? $p['title'] );
?>

<section class="sbtw-pad pad" data-screen-label="<?php echo esc_attr( ( $p['h1'] ?? $p['title'] ) . ' intro' ); ?>">
	<div class="sbtw-wrap wrap">
		<div class="sbtw-section-head sbtw-reveal section-head reveal">
			<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_over', $p['intro_over'] ?? ( $p['over'] ?? '' ) ); ?></div>
			<h2><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_h2', $p['intro_h2'] ?? ( $p['h1'] ?? '' ), array( 'multiline' => true ) ); ?></h2>
			<p><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
		</div>
		<?php if ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) : ?>
			<?php sbt_t1_mosaic( 'C.' . $CONTENT_KEY . '.gallery', $p['gallery'], $p['h1'] ?? $SITE['name'], $TEXT['show_all_photos'] ?? 'Show all photos' ); ?>
		<?php endif; ?>
	</div>
</section>

<?php if ( ! empty( $p['cards'] ) && is_array( $p['cards'] ) ) : ?>
<section class="sbtw-pad-s pad-s" style="background:var(--surface);" data-screen-label="<?php echo esc_attr( ( $p['h1'] ?? 'Page' ) . ' cards' ); ?>">
	<div class="sbtw-wrap wrap">
		<div class="sbtw-house-grid house-grid">
			<?php foreach ( $p['cards'] as $index => $card ) : ?>
				<a class="sbtw-exp sbtw-reveal exp reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? 'contacts.php' ) ); ?>">
					<?php echo sbt_t1_img( 'C.' . $CONTENT_KEY . '.cards.' . $index . '.img', $card['img'] ?? ( $p['banner'] ?? '' ), $card['h3'] ?? '' ); ?>
					<div class="sbtw-ex-body ex-body">
						<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cards.' . $index . '.over', $card['over'] ?? '' ); ?></div>
						<h3><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cards.' . $index . '.h3', $card['h3'] ?? '' ); ?></h3>
						<div class="sbtw-ex-link ex-link"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?> <span></span></div>
						<?php echo sbt_t1_control( 'C.' . $CONTENT_KEY . '.cards.' . $index . '.url', $card['url'] ?? 'contacts.php', 'Link card', 'url' ); ?>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="sbtw-band band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.' . $CONTENT_KEY . '.cta_bg', $p['cta_bg'] ?? ( $p['banner'] ?? '' ) ) ); ?>" data-screen-label="<?php echo esc_attr( ( $p['h1'] ?? 'Page' ) . ' CTA' ); ?>">
	<div class="sbtw-inner sbtw-reveal inner reveal">
		<?php echo sbt_t1_control( 'C.' . $CONTENT_KEY . '.cta_bg', $p['cta_bg'] ?? ( $p['banner'] ?? '' ), 'Background image', 'image' ); ?>
		<div class="sbtw-overline overline"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_over', $p['cta_over'] ?? '' ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_h2', $p['cta_h2'] ?? '' ); ?></h2>
		<a class="sbtw-btn sbtw-btn--light btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.' . $CONTENT_KEY . '.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
		<?php echo sbt_t1_control( 'C.' . $CONTENT_KEY . '.cta_url', $p['cta_url'] ?? 'contacts.php', 'Button link', 'url' ); ?>
	</div>
</section>
