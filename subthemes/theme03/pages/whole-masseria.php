<?php
$PAGE = 'whole-masseria';
$PAGE_TITLE = 'The Whole Masseria – Masseria Montefieno';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Whole masseria banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-17.jpg' ) ); ?>" alt="The whole estate of Masseria Montefieno" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Exclusive use</div>
    <h1>The Whole Masseria</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Accommodation<span>/</span>The Whole Masseria</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Whole masseria overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="The main house" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-09.jpg' ) ); ?>" alt="The second house" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-12.jpg' ) ); ?>" alt="The pool" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-16.jpg' ) ); ?>" alt="Dining under the pergola" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-17.jpg' ) ); ?>" alt="The masseria among the olives" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline">One booking, the entire estate</div>
      <h2 class="sbtw-lead">The masseria, yours alone</h2>
      <p class="sbtw-body-text">Book the estate in its entirety: the main house with its three stone bedrooms, two kitchens, three bathrooms, large living room and three outdoor areas — plus the second house, 120 metres away, with its own bedroom, bathroom and outdoor space. The pool and seven hectares of olive groves, reserved exclusively for your party.</p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span>Houses</span><b>2</b></li>
        <li><span>Bedrooms</span><b>3 + 1</b></li>
        <li><span>Bathrooms</span><b>3 + 1</b></li>
        <li><span>Use</span><b>Entire estate, exclusive</b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Request availability</a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>">Price &amp; condition</a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="Whole masseria gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look around</div>
      <h2>The estate, in detail</h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-11.jpg' ) ); ?>" alt="The garden among the olives" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-04.jpg' ) ); ?>" alt="The veranda" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-03.jpg' ) ); ?>" alt="The kitchen and dining room" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-13.jpg' ) ); ?>" alt="The dry-stone walls" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-17.jpg' ) ); ?>" alt="The estate among the olives" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Whole masseria included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline">What's included</div>
      <h2>Everything, exclusively yours</h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"></path></svg><h4>Two Houses</h4><p>The main house plus the second house, 120 metres apart among the olives.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"></path><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"></path><path d="M8 13V5a2 2 0 0 1 4 0"></path></svg><h4>Pool</h4><p>Set among the centuries-old olive trees, all yours.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"></path><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"></path></svg><h4>Two Kitchens</h4><p>Fully equipped, with dining areas indoors and out.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 21v-7"></path><circle cx="12" cy="9" r="6"></circle></svg><h4>Seven Hectares</h4><p>Old olive trees and fruit trees, in complete silence.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"></path><path d="M8 15.5a6 6 0 0 1 8 0"></path><circle cx="12" cy="19" r="1"></circle></svg><h4>Free Wi-Fi</h4><p>Connection across the estate.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"></path></svg><h4>Linen &amp; Towels</h4><p>Bed linen, three towels per person and a large pool towel each.</p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>');" data-screen-label="Whole masseria CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Ready when you are</div>
    <h2>Reserve the whole masseria</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
