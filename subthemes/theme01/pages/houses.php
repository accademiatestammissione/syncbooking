<?php
$PAGE = 'houses';
$PAGE_TITLE = 'Houses – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['houses'] ) && is_array( $C['houses'] ) ? $C['houses'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Houses banner">
  <?php echo sbt_t1_img( 'C.houses.banner', $p['banner'] ?? sbt_asset_url( 'assets/images/exterior-085.jpg' ), $SITE['name'] ?? 'Villa Rosa houses', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.houses.h1', $p['h1'] ?? 'Houses' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? ( $TEXT['houses'] ?? 'Houses' ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Houses intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.houses.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.houses.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-house-grid">
      <?php
      $listing_cards = ( isset( $HOUSE_CARDS ) && is_array( $HOUSE_CARDS ) ) ? $HOUSE_CARDS : array();
      foreach ( $listing_cards as $house_card ) :
        $hc_title = $house_card['listing_title'] ?? ( $house_card['title'] ?? '' );
        $hc_tag   = $house_card['tag'] ?? '';
        $hc_url   = $house_card['url'] ?? 'syncbooking:booking';
        $hc_img   = '';
        if ( ! empty( $house_card['gallery'] ) && is_array( $house_card['gallery'] ) ) {
          $hc_g   = array_values( array_filter( $house_card['gallery'] ) );
          $hc_img = $hc_g ? $hc_g[0] : '';
        }
        if ( '' === $hc_img ) {
          $hc_img = $house_card['img'] ?? '';
        }
        $hc_specs = ( ! empty( $house_card['specs'] ) && is_array( $house_card['specs'] ) ) ? $house_card['specs'] : array();
      ?>
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'syncbooking:booking' ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag"><?php echo esc_html( $hc_tag ); ?></span><img src="<?php echo esc_url( $hc_img ); ?>" alt="<?php echo esc_attr( $hc_title ); ?>" /></div>
        <div class="sbtw-body">
          <h3><?php echo esc_html( $hc_title ); ?></h3>
          <?php if ( $hc_specs ) : ?>
          <ul class="sbtw-specs">
            <?php foreach ( $hc_specs as $hc_spec ) : ?>
            <li><span><?php echo esc_html( $hc_spec[0] ?? '' ); ?></span><b><?php echo esc_html( $hc_spec[1] ?? '' ); ?></b></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta"><?php echo esc_html( $TEXT['discover'] ?? 'Discover' ); ?></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Houses gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.gallery_over', $p['gallery_over'] ?? 'A look inside' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.houses.gallery_h2', $p['gallery_h2'] ?? 'Rooms &amp; spaces' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.houses.gallery_p', $p['gallery_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <?php $sbt_rg = ( ! empty( $p['room_gallery'] ) && is_array( $p['room_gallery'] ) ) ? array_values( $p['room_gallery'] ) : array( 'interior-001.jpg', 'interior-067.jpg', 'interior-048.jpg', 'interior-052.jpg', 'interior-004.jpg', 'interior-094.jpg', 'interior-069.jpg', 'interior-047.jpg', 'interior-053.jpg', 'interior-007.jpg', 'interior-010.jpg', 'interior-058.jpg', 'interior-030.jpg', 'interior-099.jpg', 'interior-068.jpg', 'interior-055.jpg', 'interior-095.jpg', 'interior-092.jpg', 'interior-077.jpg', 'interior-102.jpg', 'interior-106.jpg', 'interior-097.jpg', 'interior-059.jpg', 'interior-103.jpg' ); ?>
      <?php foreach ( $sbt_rg as $rgi => $rgimg ) : ?>
      <?php echo sbt_t1_img( 'C.houses.room_gallery.' . $rgi, sbt_gallery_src( $rgimg ), ( $p['h1'] ?? 'Rooms' ) . ' ' . ( $rgi + 1 ), array( 'data-lightbox' => '' ) ); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( $p['cta_bg'] ?? sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.houses.cta_over', $p['cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.houses.cta_h2', $p['cta_h2'] ?? '' ); ?></h2>
    <p><?php echo sbt_t1_text( 'C.houses.cta_p', $p['cta_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'price-and-condition.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.houses.cta_btn', $p['cta_btn'] ?? '' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
