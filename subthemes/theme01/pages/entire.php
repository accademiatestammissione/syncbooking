<?php
$PAGE = 'whole-villa';
$PAGE_TITLE = 'The Whole Villa – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$e = isset( $C['entire'] ) && is_array( $C['entire'] ) ? $C['entire'] : array();
$specs = ( ! empty( $e['specs'] ) && is_array( $e['specs'] ) ) ? array_values( $e['specs'] ) : array();
$intro_imgs = ( ! empty( $e['intro_imgs'] ) && is_array( $e['intro_imgs'] ) ) ? array_values( $e['intro_imgs'] ) : array( 'exterior-090.jpg', 'exterior-085.jpg', 'exterior-087.jpg', 'exterior-081.jpg' );
$gallery_imgs = array( 'exterior-090.jpg', 'exterior-085.jpg', 'exterior-072.jpg', 'exterior-081.jpg', 'exterior-087.jpg', 'exterior-026.jpg', 'exterior-078.jpg', 'exterior-082.jpg', 'exterior-086.jpg', 'exterior-073.jpg', 'exterior-079.jpg', 'exterior-084.jpg' );
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Whole Villa banner">
  <?php echo sbt_t1_img( 'C.entire.hero_bg', sbt_gallery_src( ( isset( $C['entire']['hero_bg'] ) && $C['entire']['hero_bg'] !== '' ) ? $C['entire']['hero_bg'] : 'exterior-090.jpg' ), $SITE['name'] ?? 'The whole Villa Rosa estate', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.over', $e['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.entire.h1', $e['h1'] ?? 'The Whole Villa' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $e['h1'] ?? 'The Whole Villa' ); ?></nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Whole Villa intro">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <?php foreach ( $intro_imgs as $ii_i => $ii ) : ?><?php echo sbt_t1_img( 'C.entire.intro_imgs.' . $ii_i, sbt_gallery_src( $ii ), 'The whole estate ' . ( $ii_i + 1 ), array( 'data-lightbox' => '' ) ); ?><?php endforeach; ?>
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.intro_over', $e['intro_over'] ?? '' ); ?></div>
        <h2 class="sbtw-lead"><?php echo sbt_t1_text( 'C.entire.intro_h2', $e['intro_h2'] ?? '' ); ?></h2>
        <p class="sbtw-body-text"><?php echo sbt_t1_text( 'C.entire.intro_p', $e['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
        <ul class="sbtw-estate-specs">
          <?php foreach ( $specs as $si => $spec ) : ?>
          <li><span><?php echo sbt_t1_text( 'C.entire.specs.' . $si . '.0', $spec[0] ?? '' ); ?></span><b><?php echo sbt_t1_text( 'C.entire.specs.' . $si . '.1', $spec[1] ?? '' ); ?></b></li>
          <?php endforeach; ?>
        </ul>
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>" style="margin-top:30px;"><?php echo sbt_t1_text( 'C.entire.book_btn', $e['book_btn'] ?? 'Book the whole villa' ); ?></a>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Whole Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.gallery_over', $e['gallery_over'] ?? 'The estate' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.entire.gallery_h2', $e['gallery_h2'] ?? 'Park, pool &amp; pergolas' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.entire.gallery_p', $e['gallery_p'] ?? 'Every corner of the estate is yours: the gardens, the pool, the outdoor lounges and the pergolas where days begin with breakfast and end with dinner under the stars.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <?php foreach ( $gallery_imgs as $gi ) : ?><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $gi ) ); ?>" alt="The estate" /><?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>');" data-screen-label="Whole Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.entire.cta_over', $e['cta_over'] ?? 'Rates &amp; reservations' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.entire.cta_h2', $e['cta_h2'] ?? 'Plan your exclusive stay' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.entire.cta_p', $e['cta_p'] ?? 'Transparent rates, flexible terms and a warm welcome for you and your guests.', array( 'multiline' => true ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $e['cta_url'] ?? 'price-and-condition.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.entire.cta_btn', $e['cta_btn'] ?? 'View price &amp; condition' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
