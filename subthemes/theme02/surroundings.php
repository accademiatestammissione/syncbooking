<?php
$PAGE = 'surroundings';
$PAGE_TITLE = 'Surroundings – Masseria Le Cerase';
require __DIR__ . '/inc/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Surroundings banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/conversano-castle.jpg' ) ); ?>" alt="Surroundings" />
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
      <h2>A region to fall in love with</h2>
      <p>Masseria Le Cerase sits in the ancient heart of Conversano, one of Puglia's most charming villages, crowned by its Norman-Swabian Castle. From here, the wonders of the region are all within easy reach — whitewashed towns, the trulli of the Itria Valley, and the turquoise Adriatic coast.</p>
    </div>
    <div class="sbtw-exp-grid">
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:conversano' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/conversano-castle.jpg' ) ); ?>" alt="Conversano" /><div class="sbtw-ex-body"><div class="sbtw-overline">2 min walk</div><h3>Conversano</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:polignano-a-mare' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-bluehour.jpg' ) ); ?>" alt="Polignano a Mare" /><div class="sbtw-ex-body"><div class="sbtw-overline">25 min</div><h3>Polignano a Mare</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:alberobello-itria-valley' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-garden.jpg' ) ); ?>" alt="Alberobello & Itria Valley" /><div class="sbtw-ex-body"><div class="sbtw-overline">35 min</div><h3>Alberobello &amp; Itria Valley</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
      <a class="sbtw-exp sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'post:bari' ) ); ?>"><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-vines.jpg' ) ); ?>" alt="Bari" /><div class="sbtw-ex-body"><div class="sbtw-overline">40 min</div><h3>Bari</h3><div class="sbtw-ex-link">Discover <span></span></div></div></a>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Let us guide you</div>
    <h2>Discover Puglia with us</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'experiences.php' ) ); ?>" style="margin-top:8px;">See our experiences</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
