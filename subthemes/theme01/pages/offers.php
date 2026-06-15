<?php
$PAGE = 'offers';
$PAGE_TITLE = 'Offers – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['offers'] ) && is_array( $C['offers'] ) ? $C['offers'] : array();
$offer_imgs = array(
  sbt_asset_url( 'assets/images/interior-094.jpg' ),
  sbt_asset_url( 'assets/images/exterior-081.jpg' ),
  sbt_asset_url( 'assets/images/jacuzzi.png' ),
  'https://commons.wikimedia.org/wiki/Special:FilePath/Alberobello%20trulli.JPG?width=1400',
);
?>
<section class="sbtw-page-hero" data-screen-label="Offers banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Offers' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.offers.h1', $p['h1'] ?? 'Offers' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Offers' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Offers intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.offers.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.offers.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-offer-grid">
      <?php
      $cards = ( ! empty( $p['cards'] ) && is_array( $p['cards'] ) ) ? $p['cards'] : array();
      foreach ( $cards as $ci => $card ) :
        $cimg = $offer_imgs[ $ci ] ?? ( $card['img'] ?? '' );
      ?>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><img src="<?php echo esc_url( $cimg ); ?>" alt="<?php echo esc_attr( $card['h3'] ?? '' ); ?>" /><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.badge', $card['badge'] ?? '' ); ?></span><div class="sbtw-oc-body"><h3><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.p', $card['p'] ?? '', array( 'multiline' => true ) ); ?></p></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>');" data-screen-label="Offers CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.cta_over', $p['cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.offers.cta_h2', $p['cta_h2'] ?? '' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.offers.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
