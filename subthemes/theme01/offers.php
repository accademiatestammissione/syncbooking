<?php
$PAGE = 'offers';
$PAGE_TITLE = 'Offers – Villa Rosa Resort';
require __DIR__ . '/inc/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Offers banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="Offers" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Villa Rosa offers</div>
    <h1>Offers</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Offers</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Offers intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Best available conditions</div>
      <h2>Seasonal promotions</h2>
      <p>Reserve your stay in the heart of Puglia at the very best conditions. Discover our current offers — and contact us directly for exclusive, tailor-made rates.</p>
    </div>
    <div class="sbtw-offer-grid">
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:book-early-save-more' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-094.jpg' ) ); ?>" alt="Book Early, Save More" /><span class="sbtw-badge">Early booking</span><div class="sbtw-oc-body"><h3>Book Early, Save More</h3><p>Reserve well in advance and enjoy a special rate on your favourite house.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:seven-nights-six' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="7 Nights = 6" /><span class="sbtw-badge">Long stay</span><div class="sbtw-oc-body"><h3>7 Nights = 6</h3><p>Stay a week and pay for six nights — the perfect way to truly unwind in Puglia.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:spa-escape' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="SPA Escape" /><span class="sbtw-badge">Wellness</span><div class="sbtw-oc-body"><h3>SPA Escape</h3><p>A romantic stay for two with a dedicated wellness experience in our SPA.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:spring-autumn' ) ); ?>"><img src="https://commons.wikimedia.org/wiki/Special:FilePath/Alberobello%20trulli.JPG?width=1400" alt="Spring & Autumn" /><span class="sbtw-badge">Season</span><div class="sbtw-oc-body"><h3>Spring &amp; Autumn</h3><p>Discover Puglia in its gentlest seasons with our reduced shoulder-season rates.</p></div></a>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>');" data-screen-label="Offers CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Tailored to you</div>
    <h2>Ask for your best rate</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
