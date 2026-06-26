<?php
$PAGE = 'spa-wellness';
$PAGE_TITLE = 'SPA &amp; Wellness – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$s = isset( $C['spa'] ) && is_array( $C['spa'] ) ? $C['spa'] : array();
$intro_ps = isset( $s['intro_p'] ) ? ( is_array( $s['intro_p'] ) ? $s['intro_p'] : array( $s['intro_p'] ) ) : array();
$rows = ( ! empty( $s['feat_rows'] ) && is_array( $s['feat_rows'] ) ) ? array_values( $s['feat_rows'] ) : array();
$am = ( ! empty( $s['amenities'] ) && is_array( $s['amenities'] ) ) ? array_values( $s['amenities'] ) : array();
$am_icons = array(
  '<path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/>',
  '<path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/>',
  '<path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/>',
  '<path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/>',
  '<path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/>',
  '<path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/>',
);
$row0_imgs = ( ! empty( $s['row0_imgs'] ) && is_array( $s['row0_imgs'] ) ) ? array_values( $s['row0_imgs'] ) : array( 'jacuzzi.png', 'hammam.png', 'turkish-bath.png' );
$row1_imgs = ( ! empty( $s['row1_imgs'] ) && is_array( $s['row1_imgs'] ) ) ? array_values( $s['row1_imgs'] ) : array( 'sauna.png', 'relax-area.png', 'gym.png' );
?>
<section class="sbtw-page-hero" data-screen-label="SPA banner">
  <?php echo sbt_t1_img( 'C.spa.hero_bg', sbt_gallery_src( ( isset( $C['spa']['hero_bg'] ) && $C['spa']['hero_bg'] !== '' ) ? $C['spa']['hero_bg'] : 'relax-lounge.png' ), $SITE['name'] ?? 'SPA & Wellness', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.over', $s['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.spa.h1', $s['h1'] ?? 'SPA &amp; Wellness' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $s['h1'] ?? 'SPA & Wellness' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="SPA intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.intro_over', $s['intro_over'] ?? '' ); ?></div>
      <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.spa.intro_h2', $s['intro_h2'] ?? '' ); ?></h2>
    </div>
    <div class="sbtw-reveal">
      <?php foreach ( $intro_ps as $ipi => $ip ) : ?>
      <p class="sbtw-body-text" style="max-width:54ch;<?php echo $ipi > 0 ? 'margin-top:18px;' : ''; ?>"><?php echo sbt_t1_text( 'C.spa.intro_p.' . $ipi, $ip, array( 'multiline' => true ) ); ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-feature sbtw-pad" style="padding-top:0;" data-screen-label="SPA features">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php foreach ( $row0_imgs as $ri_i => $rim ) : ?><?php echo sbt_t1_img( 'C.spa.row0_imgs.' . $ri_i, sbt_gallery_src( $rim ), 'SPA ' . ( $ri_i + 1 ), array( 'data-lightbox' => '' ) ); ?><?php endforeach; ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.feat_rows.0.label', $rows[0]['label'] ?? '' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.feat_rows.0.h3', $rows[0]['h3'] ?? '' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.feat_rows.0.p', $rows[0]['p'] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
    </div>
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-label"><?php echo sbt_t1_text( 'C.spa.feat_rows.1.label', $rows[1]['label'] ?? '' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.spa.feat_rows.1.h3', $rows[1]['h3'] ?? '' ); ?></h3>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.spa.feat_rows.1.p', $rows[1]['p'] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php foreach ( $row1_imgs as $ri_i => $rim ) : ?><?php echo sbt_t1_img( 'C.spa.row1_imgs.' . $ri_i, sbt_gallery_src( $rim ), 'SPA ' . ( $ri_i + 1 ), array( 'data-lightbox' => '' ) ); ?><?php endforeach; ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="SPA amenities">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.am_over', $s['am_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.spa.am_h2', $s['am_h2'] ?? '' ); ?></h2>
    </div>
    <div class="sbtw-amenity-grid">
      <?php foreach ( $am as $ai => $amenity ) : ?>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><?php echo $am_icons[ $ai ] ?? ''; ?></svg><h4><?php echo sbt_t1_text( 'C.spa.amenities.' . $ai . '.1', $amenity[1] ?? '' ); ?></h4><p><?php echo sbt_t1_text( 'C.spa.amenities.' . $ai . '.2', $amenity[2] ?? '', array( 'multiline' => true ) ); ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>');" data-screen-label="SPA CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.spa.cta_over', $s['cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.spa.cta_h2', $s['cta_h2'] ?? '' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $s['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.spa.cta_btn', $s['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
