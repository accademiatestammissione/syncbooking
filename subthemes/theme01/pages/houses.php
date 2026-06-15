<?php
$PAGE = 'houses';
$PAGE_TITLE = 'Houses – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['houses'] ) && is_array( $C['houses'] ) ? $C['houses'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Houses banner">
  <img class="sbtw-bg" src="<?php echo esc_url( $p['banner'] ?? sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Villa Rosa houses' ); ?>" />
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
        $hc_url   = $house_card['url'] ?? 'house-custom.php';
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
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-048.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-052.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-004.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-094.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-069.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-047.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-053.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-007.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-010.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-058.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-030.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-099.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-068.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-055.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-095.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-092.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-077.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-102.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-106.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-097.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-059.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-103.jpg' ) ); ?>" alt="Bedroom" />
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
