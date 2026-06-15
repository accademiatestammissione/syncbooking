<?php
$PAGE = 'villa';
$PAGE_TITLE = 'Villa – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$v = isset( $C['villa'] ) && is_array( $C['villa'] ) ? $C['villa'] : array();
$intro_ps = isset( $v['intro_p'] ) ? ( is_array( $v['intro_p'] ) ? $v['intro_p'] : array( $v['intro_p'] ) ) : array();
$am = ( ! empty( $v['amenities'] ) && is_array( $v['amenities'] ) ) ? array_values( $v['amenities'] ) : array();
$am_icons = array(
  '<path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/>',
  '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
  '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  '<path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/>',
);
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Villa banner">
  <img class="sbtw-bg" src="<?php echo esc_url( $v['banner'] ?? sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Villa Rosa Resort' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.over', $v['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.villa.h1', $v['h1'] ?? 'The Villa' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $v['h1'] ?? 'Villa' ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Villa intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.intro_over', $v['intro_over'] ?? '' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.villa.intro_h2', $v['intro_h2'] ?? '' ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <?php foreach ( $intro_ps as $ipi => $ip ) : ?>
      <p class="sbtw-body-text" style="max-width:54ch;<?php echo $ipi > 0 ? 'margin-top:18px;' : ''; ?>"><?php echo sbt_t1_text( 'C.villa.intro_p.' . $ipi, $ip, array( 'multiline' => true ) ); ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Villa Rosa interior" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Villa Rosa detail" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-048.jpg' ) ); ?>" alt="Villa Rosa room" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-094.jpg' ) ); ?>" alt="Villa Rosa living" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="Villa Rosa garden" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="Villa Rosa pool" />
    </div>
  </div>
</section>

<!-- ============ AMENITIES ============ -->
<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Villa amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.am_over', $v['am_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.villa.am_h2', $v['am_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.villa.am_p', $v['am_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $am as $ai => $amenity ) : ?>
      <div class="sbtw-amenity sbtw-reveal">
        <svg viewBox="0 0 24 24"><?php echo $am_icons[ $ai ] ?? ''; ?></svg>
        <h4><?php echo sbt_t1_text( 'C.villa.amenities.' . $ai . '.1', $amenity[1] ?? '' ); ?></h4>
        <p><?php echo sbt_t1_text( 'C.villa.amenities.' . $ai . '.2', $amenity[2] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>');" data-screen-label="Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.villa.cta_over', $v['cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.villa.cta_h2', $v['cta_h2'] ?? '' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $v['cta_url'] ?? 'houses.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.villa.cta_btn', $v['cta_btn'] ?? 'Explore the houses' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
