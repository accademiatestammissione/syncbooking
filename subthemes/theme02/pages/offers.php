<?php
$PAGE = 'offers';
$PAGE_TITLE = 'Offers – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['offers'] ) && is_array( $C['offers'] ) ? $C['offers'] : array();
$offer_imgs = array( 'bedroom-2.jpg', 'courtyard.jpg', 'jacuzzi.png', 'aerial-pool.jpg' );
?>
<section class="sbtw-page-hero" data-screen-label="Offers banner">
  <?php echo sbt_t1_img( 'C.offers.hero_bg', sbt_gallery_src( ( isset( $C['offers']['hero_bg'] ) && $C['offers']['hero_bg'] !== '' ) ? $C['offers']['hero_bg'] : 'aerial-pool.jpg' ), $SITE['name'] ?? 'Offers', array( 'class' => 'sbtw-bg' ) ); ?>
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
        $cimg = $offer_imgs[ $ci ] ?? '';
      ?>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( $card['url'] ?? '#' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/' . $cimg ) ); ?>" alt="<?php echo esc_attr( $card['h3'] ?? '' ); ?>" /><div class="sbtw-oc-body"><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.badge', $card['badge'] ?? '' ); ?></span><h3><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.h3', $card['h3'] ?? '' ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.cards.' . $ci . '.p', $card['p'] ?? '', array( 'multiline' => true ) ); ?></p></div></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>');" data-screen-label="Offers CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.cta_over', $p['cta_over'] ?? 'Tailored to you' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.offers.cta_h2', $p['cta_h2'] ?? 'Ask for your best rate' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.offers.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
