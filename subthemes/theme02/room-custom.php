<?php
$PAGE = 'room';
$PAGE_TITLE = 'Camera degli Ulivi – Masseria Le Cerase';
require __DIR__ . '/header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Room banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Camera degli Ulivi" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Under the vaults</div>
    <h1>Camera degli Ulivi</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>">Rooms</a><span>/</span>Camera degli Ulivi</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Room overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Camera degli Ulivi — bedroom" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-cozy.jpg' ) ); ?>" alt="Camera degli Ulivi — detail" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/wellness-corridor.jpg' ) ); ?>" alt="Camera degli Ulivi — interior" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Camera degli Ulivi — vaults" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Double room</div>
      <h2 class="sbtw-lead">A vaulted retreat among the olive groves</h2>
      <p class="sbtw-body-text">Carved beneath centuries-old stone vaults, the room pairs a wrought-iron king-size bed with antique wardrobes, warm linen and soft, indirect light. Thick limestone walls keep it naturally cool through the Apulian summer; at night, only the quiet of the countryside.</p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span>Guests</span><b>2</b></li>
        <li><span>Bed</span><b>King-size, wrought iron</b></li>
        <li><span>Bathroom</span><b>En-suite, walk-in shower</b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Book this room</a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>">Price &amp; condition</a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="Room included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline">What's included</div>
      <h2>Comfort in every corner</h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4>Wrought-iron Bed</h4><p>King-size bed in wrought iron, dressed in fine linen.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4>Air Conditioning</h4><p>Independent climate control for the perfect temperature year-round.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4>Free Wi-Fi</h4><p>Fast, free connection in the room and across the estate.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><h4>Daily Housekeeping</h4><p>Fresh towels and a tidy room, every day of your stay.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4>Pool Access</h4><p>The pool among the olive trees, shared only with estate guests.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4>Private Parking</h4><p>Reserved on-site parking for a relaxed, stress-free arrival.</p></div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="Room gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>The room, in detail</h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-cozy.jpg' ) ); ?>" alt="Room — bed" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/wellness-corridor.jpg' ) ); ?>" alt="Room — detail" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Room — vaults" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/living-1.jpg' ) ); ?>" alt="Room — interior" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Room — outside" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Room CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Ready when you are</div>
    <h2>Book this room</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/footer/footer.php'; ?>
