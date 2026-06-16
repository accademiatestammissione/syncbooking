<?php
$PAGE = 'villa';
$PAGE_TITLE = 'The Masseria – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
$p = isset( $C['villa'] ) && is_array( $C['villa'] ) ? $C['villa'] : array();
$gal = ( ! empty( $p['gallery2'] ) && is_array( $p['gallery2'] ) ) ? $p['gallery2'] : array( 'mf-00.jpg', 'mf-01.jpg', 'mf-03.jpg', 'mf-07.jpg', 'mf-04.jpg', 'mf-08.jpg' );
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Masseria banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'The Masseria' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.over', $p['over'] ?? 'Masseria Montefieno' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.villa.h1', $p['h1'] ?? 'The Masseria' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Masseria' ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Masseria intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.intro_over', $p['intro_over'] ?? 'Restored stone, Apulian soul' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.villa.intro_h2', $p['intro_h2'] ?? 'Everywhere,<br/>silence and stillness' ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;"><?php echo sbt_t1_text( 'C.villa.intro_p1', $p['intro_p1'] ?? 'Masseria Montefieno is situated in an idyllic location in the Puglia countryside, surrounded by seven hectares of picturesque farmland of old olive trees and a selection of fruit trees.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.intro_p2', $p['intro_p2'] ?? 'The main structure consists of three bedrooms — all beautifully restored stone with special decoration typical of Puglia — two kitchens, three bathrooms, a large living room and three outdoor areas. The second house, 120 metres from the masseria, is composed of one bedroom, one bathroom and its own outdoor area.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.intro_p3', $p['intro_p3'] ?? 'Each room has been inspired by the elegance of the simple traditions of Puglia, and all enjoy magnificent views of the surrounding countryside of centuries-old olive groves.', array( 'multiline' => true ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Masseria gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <?php foreach ( $gal as $gi => $gimg ) : ?>
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $gimg ) ); ?>" alt="<?php echo esc_attr( ( $p['h1'] ?? 'Masseria' ) . ' ' . ( $gi + 1 ) ); ?>" />
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Masseria amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.am_over', $p['am_over'] ?? 'Comfort &amp; independence' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.villa.am_h2', $p['am_h2'] ?? 'Every detail, designed for you' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.villa.am_p', $p['am_p'] ?? 'Everything you need for an independent stay in the countryside — provided with the care of a family home.', array( 'multiline' => true ) ); ?></p>
    </div>
    <?php
    $am_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg>',
    );
    $amenities = ( ! empty( $p['amenities'] ) && is_array( $p['amenities'] ) ) ? $p['amenities'] : array();
    ?>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $amenities as $ai => $am ) : ?>
      <div class="sbtw-amenity sbtw-reveal">
        <?php echo $am_svgs[ $ai ] ?? ''; ?>
        <h4><?php echo sbt_t1_text( 'C.villa.amenities.' . $ai . '.h4', $am['h4'] ?? '' ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.amenities.' . $ai . '.p', $am['p'] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-06.jpg' ) ); ?>');" data-screen-label="Masseria CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.cta_over', $p['cta_over'] ?? 'Your private retreat awaits' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.villa.cta_h2', $p['cta_h2'] ?? 'Stay at Masseria Montefieno' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'whole-masseria.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.villa.cta_btn', $p['cta_btn'] ?? 'Explore the masseria' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
