<?php
$PAGE = 'whole-villa';
$PAGE_TITLE = 'The Whole Villa – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
?>
<!-- ============ BANNER ============ -->
<section class="sbtw-page-hero" data-screen-label="Whole Villa banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="The whole Villa Rosa estate" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Villa Rosa Resort &amp; SPA</div>
    <h1>The Whole Villa</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>The Whole Villa</nav>
  </div>
</section>

<!-- ============ INTRO ============ -->
<section class="sbtw-pad" data-screen-label="Whole Villa intro">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="The whole estate from above" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="The villa at dusk" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="The pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="The private pool" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline">Exclusive use</div>
        <h2 class="sbtw-lead">One booking,<br/>the entire estate</h2>
        <p class="sbtw-body-text">All the houses, the centuries-old park, the pool and the pergolas — reserved exclusively for you and your guests. The freedom of a private home, with the soul of a 1930s villa, in the ancient heart of Conversano.</p>
        <ul class="sbtw-estate-specs">
          <li><span>Guests</span><b>Up to 10</b></li>
          <li><span>Houses</span><b>All, exclusively yours</b></li>
          <li><span>Use</span><b>Entire estate, exclusive</b></li>
        </ul>
        <a class="sbtw-btn" href="https://syncbooking.com" style="margin-top:30px;">Book the whole villa</a>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Whole Villa gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline">The estate</div>
      <h2>Park, pool &amp; pergolas</h2>
      <p>Every corner of the estate is yours: the gardens, the pool, the outdoor lounges and the pergolas where days begin with breakfast and end with dinner under the stars.</p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="The estate from above" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="The villa" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>" alt="The park" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="The pool" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="The pergola" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-026.jpg' ) ); ?>" alt="The gardens" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>" alt="Long table in the park" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-082.jpg' ) ); ?>" alt="Outdoor lounge" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-086.jpg' ) ); ?>" alt="The grounds" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-073.jpg' ) ); ?>" alt="The park" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-079.jpg' ) ); ?>" alt="Outdoor dining" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-084.jpg' ) ); ?>" alt="The villa grounds" />
    </div>
  </div>
</section>

<!-- ============ BAND CTA ============ -->
<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>');" data-screen-label="Whole Villa CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Rates &amp; reservations</div>
    <h2>Plan your exclusive stay</h2>
    <p>Transparent rates, flexible terms and a warm welcome for you and your guests.</p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>" style="margin-top:8px;">View price &amp; condition</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
