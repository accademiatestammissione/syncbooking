<?php
$PAGE = 'houses';
$PAGE_TITLE = 'Houses – Villa Rosa Resort';
require __DIR__ . '/inc/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Houses banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="Villa Rosa houses" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Villa Rosa Resort</div>
    <h1>Houses</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Houses</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Houses intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Your private retreat in Puglia</div>
      <h2>An entire house, all to yourself</h2>
      <p>The new luxury when it comes to holidays is giving yourself more freedom: the possibility of having an entire house with an external pergola at your disposal, to enjoy a fully relaxing stay. The attention to detail, a refined design, the mix of modern and ancient, and many comforts make the homes of Villa Rosa Boutique Resort very exclusive.</p>
    </div>
    <div class="sbtw-house-grid">
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag">For 2 people</span><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-112.jpg' ) ); ?>" alt="House for 2" /></div>
        <div class="sbtw-body">
          <h3>Houses for 2</h3>
          <ul class="sbtw-specs">
            <li><span>Maximum occupancy</span><b>2 adults + 1 cot</b></li>
            <li><span>Bed</span><b>King-size</b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta">Discover</span>
        </div>
      </a>
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag">For 3 people</span><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-134.jpg' ) ); ?>" alt="House for 3" /></div>
        <div class="sbtw-body">
          <h3>Houses for 3</h3>
          <ul class="sbtw-specs">
            <li><span>Maximum occupancy</span><b>3 adults + 1 cot</b></li>
            <li><span>Beds</span><b>King-size + sofa bed</b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta">Discover</span>
        </div>
      </a>
      <a class="sbtw-house sbtw-reveal" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">
        <div class="sbtw-ph"><span class="sbtw-tag">For 4 people</span><img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-147.jpg' ) ); ?>" alt="House for 4" /></div>
        <div class="sbtw-body">
          <h3>Houses for 4</h3>
          <ul class="sbtw-specs">
            <li><span>Maximum occupancy</span><b>4 adults + 1 cot</b></li>
            <li><span>Beds</span><b>King-size + double sofa</b></li>
          </ul>
          <span class="sbtw-btn sbtw-btn--light sbtw-house-cta">Discover</span>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="padding-top:0;" data-screen-label="Houses gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:38px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>Rooms &amp; spaces</h2>
      <p>Bedrooms, living areas, kitchens and bathrooms — a glimpse of the interiors that make every Villa Rosa house a private home.</p>
    </div>
    <div class="sbtw-room-gallery sbtw-reveal">
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-048.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-052.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-004.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-094.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-069.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-047.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-053.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-007.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-010.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-058.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-030.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-099.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-068.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-055.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-095.jpg' ) ); ?>" alt="Kitchen" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-092.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-077.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-102.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-106.jpg' ) ); ?>" alt="Bathroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-097.jpg' ) ); ?>" alt="Bedroom" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-059.jpg' ) ); ?>" alt="Living area" />
      <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-103.jpg' ) ); ?>" alt="Bedroom" />
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Rates &amp; reservations</div>
    <h2>Prices &amp; conditions</h2>
    <p>Transparent rates, flexible terms and a warm welcome. Discover everything you need to plan your stay.</p>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>" style="margin-top:8px;">View price &amp; condition</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
