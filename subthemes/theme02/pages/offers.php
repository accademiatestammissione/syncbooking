<?php
$PAGE = 'offers';
$PAGE_TITLE = 'Offers – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Offers banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Offers" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Masseria Le Cerase offers</div>
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
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:book-early-save-more' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Book Early, Save More" /><div class="sbtw-oc-body"><span class="sbtw-badge">Early booking</span><h3>Book Early, Save More</h3><p>Reserve well in advance and enjoy a special rate on your favourite house.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:seven-nights-six' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="7 Nights = 6" /><div class="sbtw-oc-body"><span class="sbtw-badge">Long stay</span><h3>7 Nights = 6</h3><p>Stay a week and pay for six nights — the perfect way to truly unwind in Puglia.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:spa-escape' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="SPA Escape" /><div class="sbtw-oc-body"><span class="sbtw-badge">Wellness</span><h3>SPA Escape</h3><p>A romantic stay for two with a dedicated wellness experience in our SPA.</p></div></a>
      <a class="sbtw-offer-card sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:spring-autumn' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Spring & Autumn" /><div class="sbtw-oc-body"><span class="sbtw-badge">Season</span><h3>Spring &amp; Autumn</h3><p>Discover Puglia in its gentlest seasons with our reduced shoulder-season rates.</p></div></a>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>');" data-screen-label="Offers CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Tailored to you</div>
    <h2>Ask for your best rate</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
