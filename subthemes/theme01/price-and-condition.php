<?php
$PAGE = 'price-and-condition';
$PAGE_TITLE = 'Price &amp; Condition – Villa Rosa Resort';
require __DIR__ . '/header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Price banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-082.jpg' ) ); ?>" alt="Price & Condition" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Rates &amp; reservations</div>
    <h1>Price &amp; Condition</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>">Houses</a><span>/</span>Price &amp; Condition</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Price intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Transparent &amp; flexible</div>
      <h2>Plan your stay with confidence</h2>
      <p>Check live availability and the best rates for each house, then confirm your reservation in a few secure steps — instant booking, no waiting for a reply.</p>
    </div>
    <div class="sbtw-book-cta sbtw-reveal">
      <div class="sbtw-bc-text">
        <div class="sbtw-overline">Real-time availability</div>
        <h3>Check dates &amp; book online</h3>
        <p>Select your house, see live prices for your dates and complete your reservation through our secure booking system.</p>
      </div>
      <div class="sbtw-bc-action">
        <a class="sbtw-btn" href="https://villarosaresort.it/booking">Book your stay</a>
        <span class="sbtw-bc-note">Best rate guaranteed when you book direct.</span>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Good to know</div>
      <h2>Conditions</h2>
    </div>
    <dl class="sbtw-cond-list sbtw-reveal">
      <div class="sbtw-row"><dt>Check-in</dt><dd>From 3:00 PM. Late arrivals can be arranged on request.</dd></div>
      <div class="sbtw-row"><dt>Check-out</dt><dd>By 10:30 AM on the day of departure.</dd></div>
      <div class="sbtw-row"><dt>Minimum stay</dt><dd>2 nights; longer in high season and during special periods.</dd></div>
      <div class="sbtw-row"><dt>Included</dt><dd>Final cleaning, bed linen and towels, Wi-Fi, SPA, pool and park access.</dd></div>
      <div class="sbtw-row"><dt>City tax</dt><dd>Applied per person/night as required by the Municipality of Conversano.</dd></div>
      <div class="sbtw-row"><dt>Pets</dt><dd>Welcome on request — please let us know in advance.</dd></div>
    </dl>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>');" data-screen-label="Price CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Tailored to your dates</div>
    <h2>Request your personalised quote</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/footer/footer.php'; ?>
