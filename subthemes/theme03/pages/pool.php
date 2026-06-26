<?php
$PAGE = 'pool';
$PAGE_TITLE = 'Pool – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
$p = isset( $C['pool'] ) && is_array( $C['pool'] ) ? $C['pool'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Pool banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'The Pool' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.pool.over', $p['over'] ?? 'Among the olive trees' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.pool.h1', $p['h1'] ?? 'The Pool' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Pool' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Pool intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.pool.intro_over', $p['intro_over'] ?? 'Water and silver leaves' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.pool.intro_h2', $p['intro_h2'] ?? 'A pool set<br/>in the olive grove' ); ?></h2>
      <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.pool.intro_p1', $p['intro_p1'] ?? 'The pool lies a few steps from the houses, framed on every side by the centuries-old olive trees of the estate. Loungers wait in the shade of the branches, and a large pool towel is provided for each guest.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="margin-top:18px;"><?php echo sbt_t1_text( 'C.pool.intro_p2', $p['intro_p2'] ?? 'Mornings of slow swims, afternoons of reading under the trees, evenings when the water reflects the lights of the masseria — the pool is the quiet heart of summer at Montefieno.', array( 'multiline' => true ) ); ?></p>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['action_url'] ?? 'contacts.php' ) ); ?>"><?php echo sbt_t1_text( 'C.pool.action_btn', $p['action_btn'] ?? 'Request availability' ); ?></a>
      </div>
    </div>
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <?php $sld = ( ! empty( $p['sld0_imgs'] ) && is_array( $p['sld0_imgs'] ) ) ? array_values( $p['sld0_imgs'] ) : array( 'mf-12.jpg', 'mf-18.jpg', 'mf-19.jpg', 'mf-15.jpg' ); ?>
        <?php foreach ( $sld as $si => $sim ) : ?>
        <?php echo sbt_t1_img( 'C.pool.sld0_imgs.' . $si, sbt_gallery_src( $sim ), 'The pool among the olive trees ' . ( $si + 1 ), array( 'data-lightbox' => '' ) ); ?>
        <?php endforeach; ?>
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Pool gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <?php $sbt_gal = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? array_values( $p['gallery'] ) : array( 'mf-20.jpg', 'mf-11.jpg', 'mf-18.jpg' ); ?>
      <?php foreach ( $sbt_gal as $gi => $gimg ) : ?>
      <?php echo sbt_t1_img( 'C.pool.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $p['h1'] ?? 'The Pool' ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-20.jpg' ) ); ?>');" data-screen-label="Pool CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.pool.cta_over', $p['cta_over'] ?? 'Summer at Montefieno' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.pool.cta_h2', $p['cta_h2'] ?? 'The olive grove, the water, you' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.pool.cta_btn', $p['cta_btn'] ?? 'Plan your stay' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
