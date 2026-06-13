<?php
$PAGE = 'home';
$PAGE_TITLE = 'Masseria Montefieno – A stunning Masseria in Puglia';
require __DIR__ . '/../header/header.php';
?>
<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video" data-heroslide>
    <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="Masseria Montefieno among the olive trees" />
    <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-12.jpg' ) ); ?>" alt="The pool framed by olive trees" />
    <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-16.jpg' ) ); ?>" alt="Dining under the pergola" />
    <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-22.jpg' ) ); ?>" alt="The masseria by night" />
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline">Masseria Montefieno · Conversano · Puglia</div>
    <h1>Silence, stillness,<br/>and ancient olives</h1>
    <p class="sbtw-sub">A masseria in the Puglia countryside, surrounded by seven hectares of centuries-old olive groves and fruit trees.</p>
  </div>
  <div class="sbtw-scrolldown"><span>Scroll</span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline">Welcome</div>
        <h2 class="sbtw-lead">An idyllic corner<br/>of the Puglia countryside</h2>
        <p class="sbtw-body-text">Masseria Montefieno sits in an idyllic location in the Puglia countryside, surrounded by seven hectares of picturesque farmland of old olive trees and a selection of fruit trees. Everywhere, silence and stillness.</p>
        <p class="sbtw-body-text" style="margin-top:18px;">Each room has been inspired by the elegance of the simple traditions of Puglia, with magnificent views over the surrounding countryside — made up, for the most part, of centuries-old olive groves.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'villa.php' ) ); ?>" style="margin-top:30px;">Discover the Masseria</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="Masseria Montefieno — the facade" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-04.jpg' ) ); ?>" alt="Masseria Montefieno — the veranda" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-08.jpg' ) ); ?>" alt="Masseria Montefieno — the pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-02.jpg' ) ); ?>" alt="Masseria Montefieno — garden details" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-22.jpg' ) ); ?>" alt="Masseria Montefieno — by night" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp">Seven<br/>hectares</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY MOSAIC ============ -->
<section class="sbtw-pad-s" data-screen-label="Gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>Stone, light and tradition</h2>
    </div>
    <div class="sbtw-mosaic sbtw-reveal">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-03.jpg' ) ); ?>" alt="The kitchen and dining room" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-10.jpg' ) ); ?>" alt="A vaulted bedroom" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-01.jpg' ) ); ?>" alt="The living room" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-16.jpg' ) ); ?>" alt="Dining under the pergola" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-12.jpg' ) ); ?>" alt="The pool" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"></rect><rect x="14" y="3" width="7" height="7" rx="1"></rect><rect x="3" y="14" width="7" height="7" rx="1"></rect><rect x="14" y="14" width="7" height="7" rx="1"></rect></svg>Show all photos</button>
    </div>
  </div>
</section>

<!-- ============ DISCOVER CARDS ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Discover">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">The estate</div>
      <h2>Two houses among the olives</h2>
      <p>The main structure offers three beautifully restored stone bedrooms with decoration typical of Puglia, two kitchens, three bathrooms, a large living room and three outdoor areas. A second house, 120 metres away, adds one more bedroom with its own bathroom and outdoor space.</p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Sleep</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-10.jpg' ) ); ?>" alt="Vaulted stone bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-24.jpg' ) ); ?>" alt="Bedroom by lamplight" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-14.jpg' ) ); ?>" alt="Bathroom" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Bedrooms</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || sbt_is_entire_rental_mode( 'theme03' ) ) : ?>

      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Exclusive use</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-05.jpg' ) ); ?>" alt="The main house" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-09.jpg' ) ); ?>" alt="The second house" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-17.jpg' ) ); ?>" alt="The estate among the olives" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Whole Masseria</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'whole-masseria.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <?php endif; ?>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Outdoors</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-12.jpg' ) ); ?>" alt="The pool among the olive trees" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-18.jpg' ) ); ?>" alt="Loungers by the pool" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-20.jpg' ) ); ?>" alt="The pool through the branches" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Pool</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'pool.php' ) ); ?>">Discover</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Comfort &amp; Care</div>
      <h2>The estate at your service</h2>
    </div>
    <div class="sbtw-svc-grid">
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4>Pool</h4>
        <p>A pool set among the centuries-old olive trees, with loungers and large pool towels provided.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4>Olive Groves</h4>
        <p>Seven hectares of old olive trees and fruit trees to wander, in complete silence.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4>Two Kitchens</h4>
        <p>Fully equipped with fridge, dishwasher, oven and hob, coffee machine, toaster and tea.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Wi-Fi</h4>
        <p>Connectivity across the estate, for whenever you need it.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4>Outdoor Areas</h4>
        <p>Three outdoor areas around the main house, including a pergola for long meals in the shade.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg>
        <h4>Linen &amp; Towels</h4>
        <p>Bed linen plus a small, medium and large towel per person, and a professional hairdryer in each bathroom.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg>
        <h4>Laundry</h4>
        <p>Washing machine, ironing board and clothes hanger at your disposal.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="11" r="3"/><path d="M12 2a8 8 0 0 1 8 8c0 5.4-8 12-8 12S4 15.4 4 10a8 8 0 0 1 8-8Z"/></svg>
        <h4>Strategic Location</h4>
        <p>In the middle of Polignano, Conversano and Castellana Grotte — 15 minutes from Alberobello.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">In the heart of Puglia</div>
    <h2>Between Polignano, Conversano<br/>and Castellana Grotte</h2>
    <p>Fifteen minutes from the trulli of Alberobello, the beaches of Monopoli and the Itria Valley — explore Apulia's masterpieces of art, architecture and gastronomy.</p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="Farm & Surroundings">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="farm">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-27.jpg' ) ); ?>" alt="The olive grove" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-21.jpg' ) ); ?>" alt="The vineyard" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-11.jpg' ) ); ?>" alt="The garden among the olives" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-13.jpg' ) ); ?>" alt="The dry-stone walls" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label">Masseria Montefieno</div>
        <h3>The Farm</h3>
        <p class="sbtw-body-text">The masseria is a working farm: extra-virgin olive oil from the centuries-old grove and Vitus Primitivo wine from our vineyards, made the way they have always been made in this corner of Puglia.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'farm.php' ) ); ?>" style="margin-top:28px;">Discover the farm</a>
      </div>
    </div>
    <div class="sbtw-two-col" id="explore">
      <div class="sbtw-reveal">
        <div class="sbtw-label">Masseria Montefieno</div>
        <h3>The Surroundings</h3>
        <p class="sbtw-body-text">The complex sits at a strategic point for travellers, in the middle of the most representative towns of the area — Polignano a Mare, Conversano and Castellana Grotte — and a 15-minute drive from the trulli of Alberobello, the beaches of Monopoli and the Itria Valley.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'surroundings.php' ) ); ?>" style="margin-top:28px;">Explore the area</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-25.jpg' ) ); ?>" alt="The countryside at dusk" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-26.jpg' ) ); ?>" alt="The view from the terrace" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/mf-21.jpg' ) ); ?>" alt="Vineyards and white towns" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STAY CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/mf-22.jpg' ) ); ?>');" data-screen-label="Stay CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Silence and stillness await</div>
    <h2>Your stay at<br/>Masseria Montefieno</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'whole-masseria.php' ) ); ?>">Discover the stay</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
