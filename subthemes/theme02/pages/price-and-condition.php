<?php
$PAGE = 'price-and-condition';
$PAGE_TITLE = 'Price &amp; Condition – Masseria Le Cerase';
require __DIR__ . '/../header/header.php';
$p = isset( $C['price'] ) && is_array( $C['price'] ) ? $C['price'] : array();
?>
<section class="sbtw-page-hero" data-screen-label="Price banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="<?php echo esc_attr( $p['h1'] ?? 'Price & Condition' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.over', $p['over'] ?? 'Rates &amp; reservations' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.price.h1', $p['h1'] ?? 'Price &amp; Condition' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><?php echo esc_html( $TEXT['accommodation'] ?? 'Accommodation' ); ?><span>/</span><?php echo esc_html( $p['h1'] ?? 'Price & Condition' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Price intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.intro_over', $p['intro_over'] ?? 'Transparent &amp; flexible' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.intro_h2', $p['intro_h2'] ?? 'Plan your stay with confidence' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.price.intro_p', $p['intro_p'] ?? 'Check live availability and the best rates for each room, then confirm your reservation in a few secure steps — instant booking, no waiting for a reply.', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-book-cta sbtw-reveal">
      <div class="sbtw-bc-text">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.bc_over', $p['bc_over'] ?? 'Real-time availability' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.price.bc_h3', $p['bc_h3'] ?? 'Check dates &amp; book online' ); ?></h3>
        <p><?php echo sbt_t1_text( 'C.price.bc_p', $p['bc_p'] ?? 'Select your room, see live prices for your dates and complete your reservation through our secure booking system.', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-bc-action">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['bc_url'] ?? 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.price.bc_btn', $p['bc_btn'] ?? 'Book your stay' ); ?></a>
        <span class="sbtw-bc-note"><?php echo sbt_t1_text( 'C.price.bc_note', $p['bc_note'] ?? 'Best rate guaranteed when you book direct.' ); ?></span>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.cond_over', $p['cond_over'] ?? 'Good to know' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.cond_h2', $p['cond_h2'] ?? 'Conditions' ); ?></h2>
    </div>
    <dl class="sbtw-cond-list sbtw-reveal">
      <?php
      $rows = ( ! empty( $p['conditions'] ) && is_array( $p['conditions'] ) ) ? $p['conditions'] : array();
      foreach ( $rows as $ri => $row ) :
      ?>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.conditions.' . $ri . '.dt', $row['dt'] ?? '' ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.conditions.' . $ri . '.dd', $row['dd'] ?? '', array( 'multiline' => true ) ); ?></dd></div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Price CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.cta_over', $p['cta_over'] ?? 'Tailored to your dates' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.price.cta_h2', $p['cta_h2'] ?? 'Request your personalised quote' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.price.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
