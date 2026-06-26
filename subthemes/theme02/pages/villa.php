<?php
$PAGE = 'villa';
$PAGE_TITLE = 'The Masseria – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['villa'] ) && is_array( $C['villa'] ) ? $C['villa'] : array();
$gal = ( ! empty( $p['gallery'] ) && is_array( $p['gallery'] ) ) ? $p['gallery'] : array(
  'pool-pergola.jpg', 'living-1.jpg', 'bedroom-1.jpg', 'bedroom-2.jpg', 'courtyard.jpg', 'aerial-pool.jpg'
);
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Villa banner">
  <?php echo sbt_t1_img( 'C.villa.hero_bg', sbt_gallery_src( ( isset( $C['villa']['hero_bg'] ) && $C['villa']['hero_bg'] !== '' ) ? $C['villa']['hero_bg'] : 'aerial-pool.jpg' ), $p['h1'] ?? 'The Masseria', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.over', $p['over'] ?? 'Masseria Le Cerase &amp; SPA' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.villa.h1', $p['h1'] ?? 'The Masseria' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Masseria' ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Villa intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.intro_over', $p['intro_over'] ?? 'The luxury of feeling at home' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.villa.intro_h2', $p['intro_h2'] ?? 'On holiday,<br/>just like at home' ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <p class="sbtw-body-text" style="max-width:54ch;"><?php echo sbt_t1_text( 'C.villa.intro_p1', $p['intro_p1'] ?? 'Privacy, confidentiality, serenity and five-star comfort. The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house at your disposal, to enjoy a fully relaxing stay.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.intro_p2', $p['intro_p2'] ?? 'In the centre of the most beautiful Puglia, in the ancient heart of Conversano, in the park of a historic villa, having a house available is the ideal solution for those looking for a secluded, independent and even more exclusive stay.', array( 'multiline' => true ) ); ?></p>
      <p class="sbtw-body-text" style="max-width:54ch;margin-top:18px;"><?php echo sbt_t1_text( 'C.villa.intro_p3', $p['intro_p3'] ?? 'Attention to detail, refined design, a mix of modern and ancient, a stone\'s throw from monuments and shops — the rooms of Masseria Le Cerase, with private external pergolas, also offer the typical comforts of a resort.', array( 'multiline' => true ) ); ?></p>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <?php foreach ( $gal as $gi => $gimg ) : ?>
      <?php echo sbt_t1_img( 'C.villa.gallery.' . $gi, sbt_gallery_src( $gimg ), ( $p['h1'] ?? 'Masseria' ) . ' ' . ( $gi + 1 ), array( 'data-lightbox' => '' ) ); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad sbtw-surface" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.am_over', $p['am_over'] ?? 'Wellness, comfort &amp; independence' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.villa.am_h2', $p['am_h2'] ?? 'Every detail, designed for you' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.villa.am_p', $p['am_p'] ?? 'A wide range of services for your comfort and relaxation — all designed to guarantee maximum comfort and a truly unique experience.', array( 'multiline' => true ) ); ?></p>
    </div>
    <?php
    $am_svgs = array(
      '<svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>',
      '<svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>',
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
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>');" data-screen-label="Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.cta_over', $p['cta_over'] ?? 'Your private retreat awaits' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.villa.cta_h2', $p['cta_h2'] ?? 'Choose your room in Masseria Le Cerase' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'whole-masseria.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.villa.cta_btn', $p['cta_btn'] ?? 'Explore the masseria' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
