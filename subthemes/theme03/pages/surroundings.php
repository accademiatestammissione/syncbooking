<?php
$PAGE = 'surroundings';
$PAGE_TITLE = 'Surroundings – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>" alt="The countryside around Masseria Montefieno" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Conversano &amp; beyond</div>
    <h1>Surroundings</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Surroundings</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Surroundings intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">In the heart of Puglia</div>
      <h2>A strategic point for travellers</h2>
      <p>The masseria sits in the middle of the most representative towns of the area — Polignano a Mare, Conversano and Castellana Grotte — and a 15-minute drive from the beautiful trulli of Alberobello, the beaches of Monopoli and the Itria Valley. Explore Apulia's masterpieces of art, architecture and gastronomy, and unparalleled fine living.</p>
    </div>
    <div class="sbtw-exp-grid">
      <div class="sbtw-exp sbtw-reveal"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-26.jpg' ) ); ?>" alt="Conversano" /><div class="sbtw-ex-body"><div class="sbtw-overline">10 min</div><h3>Conversano</h3></div></div>
      <div class="sbtw-exp sbtw-reveal"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>" alt="Polignano a Mare" /><div class="sbtw-ex-body"><div class="sbtw-overline">15 min</div><h3>Polignano a Mare</h3></div></div>
      <div class="sbtw-exp sbtw-reveal"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-13.jpg' ) ); ?>" alt="Castellana Grotte" /><div class="sbtw-ex-body"><div class="sbtw-overline">10 min</div><h3>Castellana Grotte</h3></div></div>
      <div class="sbtw-exp sbtw-reveal"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-21.jpg' ) ); ?>" alt="Alberobello and the Itria Valley" /><div class="sbtw-ex-body"><div class="sbtw-overline">15 min</div><h3>Alberobello &amp; Itria Valley</h3></div></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-26.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Let us guide you</div>
    <h2>Discover Puglia from Montefieno</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Plan your stay</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
