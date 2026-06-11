<?php
$PAGE = 'price';
$CONTENT_KEY = 'price';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Price banner">
  <?php echo sbt_t1_img( 'C.price.image_1', sbt_t1_asset( 'assets/images/courtyard.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.text_1', 'Rates &amp; reservations', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.price.text_2', 'Price &amp; Condition', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.price.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.price.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.price.text_4', 'Accommodation', array( 'multiline' => false ) ); ?><span>/</span><?php echo sbt_t1_text( 'C.price.text_5', 'Price &amp; Condition', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Price intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.text_6', 'Transparent &amp; flexible', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.text_7', 'Plan your stay with confidence', array( 'multiline' => false ) ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.price.text_8', 'Check live availability and the best rates for each room, then confirm your reservation in a few secure steps — instant booking, no waiting for a reply.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-book-cta sbtw-reveal">
      <div class="sbtw-bc-text">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.text_9', 'Real-time availability', array( 'multiline' => false ) ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.price.text_10', 'Check dates &amp; book online', array( 'multiline' => false ) ); ?></h3>
        <p><?php echo sbt_t1_text( 'C.price.text_11', 'Select your room, see live prices for your dates and complete your reservation through our secure booking system.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-bc-action">
        <a class="sbtw-btn" href="https://syncbooking.com"><?php echo sbt_t1_text( 'C.price.text_12', 'Book your stay', array( 'multiline' => false ) ); ?></a>
        <span class="sbtw-bc-note"><?php echo sbt_t1_text( 'C.price.text_13', 'Best rate guaranteed when you book direct.', array( 'multiline' => false ) ); ?></span>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.text_14', 'Good to know', array( 'multiline' => false ) ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.text_15', 'Conditions', array( 'multiline' => false ) ); ?></h2>
    </div>
    <dl class="sbtw-cond-list sbtw-reveal">
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_16', 'Check-in', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_17', 'From 3:00 PM. Late arrivals can be arranged on request.', array( 'multiline' => false ) ); ?></dd></div>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_18', 'Check-out', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_19', 'By 10:30 AM on the day of departure.', array( 'multiline' => false ) ); ?></dd></div>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_20', 'Minimum stay', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_21', '2 nights; longer in high season and during special periods.', array( 'multiline' => false ) ); ?></dd></div>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_22', 'Included', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_23', 'Final cleaning, bed linen and towels, Wi-Fi, SPA, pool and park access.', array( 'multiline' => false ) ); ?></dd></div>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_24', 'City tax', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_25', 'Applied per person/night as required by the Municipality of Conversano.', array( 'multiline' => false ) ); ?></dd></div>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.text_26', 'Pets', array( 'multiline' => false ) ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.text_27', 'Welcome on request — please let us know in advance.', array( 'multiline' => false ) ); ?></dd></div>
    </dl>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Price CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.text_28', 'Tailored to your dates', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.price.text_29', 'Request your personalised quote', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.price.link_3', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.price.text_30', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
