<?php
$PAGE = 'offers';
$CONTENT_KEY = 'offers';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Offers banner">
  <?php echo sbt_t1_img( 'C.offers.image_1', sbt_t1_asset( 'uploads/Esterni/090.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.text_1', 'Villa Rosa offers', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.offers.text_2', 'Offers', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.offers.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.offers.text_4', 'Offers', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Offers intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.text_5', 'Best available conditions', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.offers.text_6', 'Seasonal promotions', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.offers.text_7', 'Reserve your stay in the heart of Puglia at the very best conditions. Discover our current offers — and contact us directly for exclusive, tailor-made rates.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-offer-grid">
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_2', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.offers.image_2', sbt_t1_asset( 'uploads/ota/094.jpg' ), '', array() ); ?><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.text_8', 'Early booking', array( 'multiline' => false ) ); ?></span><div class="sbtw-oc-body"><h3><?php echo sbt_t1_text( 'C.offers.text_9', 'Book Early, Save More', array( 'multiline' => false ) ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.text_10', 'Reserve well in advance and enjoy a special rate on your favourite house.', array( 'multiline' => false ) ); ?></p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_3', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.offers.image_3', sbt_t1_asset( 'uploads/Esterni/081.jpg' ), '', array() ); ?><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.text_11', 'Long stay', array( 'multiline' => false ) ); ?></span><div class="sbtw-oc-body"><h3><?php echo sbt_t1_text( 'C.offers.text_12', '7 Nights = 6', array( 'multiline' => false ) ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.text_13', 'Stay a week and pay for six nights — the perfect way to truly unwind in Puglia.', array( 'multiline' => false ) ); ?></p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_4', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.offers.image_4', sbt_t1_asset( 'assets/images/jacuzzi.jpg' ), '', array() ); ?><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.text_14', 'Wellness', array( 'multiline' => false ) ); ?></span><div class="sbtw-oc-body"><h3><?php echo sbt_t1_text( 'C.offers.text_15', 'SPA Escape', array( 'multiline' => false ) ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.text_16', 'A romantic stay for two with a dedicated wellness experience in our SPA.', array( 'multiline' => false ) ); ?></p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_5', 'single.php' ) ) ); ?>"><?php echo sbt_t1_img( 'C.offers.image_5', sbt_t1_asset( 'https://commons.wikimedia.org/wiki/Special:FilePath/Alberobello%20trulli.JPG?width=1400' ), '', array() ); ?><span class="sbtw-badge"><?php echo sbt_t1_text( 'C.offers.text_17', 'Season', array( 'multiline' => false ) ); ?></span><div class="sbtw-oc-body"><h3><?php echo sbt_t1_text( 'C.offers.text_18', 'Spring &amp; Autumn', array( 'multiline' => false ) ); ?></h3><p><?php echo sbt_t1_text( 'C.offers.text_19', 'Discover Puglia in its gentlest seasons with our reduced shoulder-season rates.', array( 'multiline' => false ) ); ?></p></div></a>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'uploads/Esterni/078.jpg' ) ); ?>');" data-screen-label="Offers CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.offers.text_20', 'Tailored to you', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.offers.text_21', 'Ask for your best rate', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.offers.link_6', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.offers.text_22', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
