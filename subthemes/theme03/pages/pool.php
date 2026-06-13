<?php
$PAGE = 'pool';
$PAGE_TITLE = 'Pool – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Pool banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>" alt="The pool of Masseria Montefieno" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Among the olive trees</div>
    <h1>The Pool</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Pool</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Pool intro">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Water and silver leaves</div>
      <h2 class="sbtw-lead">A pool set<br/>in the olive grove</h2>
      <p class="sbtw-body-text">The pool lies a few steps from the houses, framed on every side by the centuries-old olive trees of the estate. Loungers wait in the shade of the branches, and a large pool towel is provided for each guest.</p>
      <p class="sbtw-body-text" style="margin-top:18px;">Mornings of slow swims, afternoons of reading under the trees, evenings when the water reflects the lights of the masseria — the pool is the quiet heart of summer at Montefieno.</p>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Request availability</a>
      </div>
    </div>
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-12.jpg' ) ); ?>" alt="The pool among the olive trees" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>" alt="Loungers and umbrella by the pool" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-19.jpg' ) ); ?>" alt="The pool corner" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-15.jpg' ) ); ?>" alt="The pool behind the olives" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="padding-top:0;" data-screen-label="Pool gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-gallery">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-20.jpg' ) ); ?>" alt="The pool through the branches" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-11.jpg' ) ); ?>" alt="Loungers in the olive garden" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-22.jpg' ) ); ?>" alt="The pool by night" />
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-20.jpg' ) ); ?>');" data-screen-label="Pool CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Summer at Montefieno</div>
    <h2>The olive grove, the water, you</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Plan your stay</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
