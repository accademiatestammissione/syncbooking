<?php
$PAGE = 'house';
$PAGE_TITLE = 'Houses for 2 – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="House for 2 banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="House for 2" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">The Houses</div>
    <h1>Houses for 2</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>">Houses</a><span>/</span>For 2 people</nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="House for 2 overview">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="House for 2 — bedroom" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-069.jpg' ) ); ?>" alt="House for 2 — bathroom" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-102.jpg' ) ); ?>" alt="House for 2 — interior" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Intimate &amp; refined</div>
      <h2 class="sbtw-lead">A romantic retreat for two</h2>
      <p class="sbtw-body-text">An elegant private house with its own external pergola — the perfect base for a couple's escape in the heart of Conversano. Refined design, the comfort of a five-star resort, and the freedom of a home of your own.</p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span>Maximum occupancy</span><b>2 adults + 1 baby cot</b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>">Request availability</a>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'price-and-condition.php' ) ); ?>">Price &amp; condition</a>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="House for 2 gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>The room, in detail</h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="House for 2 — pergola" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="House for 2 — bedroom" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="House for 2 — living detail" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="House for 2 — garden" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-069.jpg' ) ); ?>" alt="House for 2 — interior" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" data-screen-label="House for 2 included">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:48px;">
      <div class="sbtw-overline">What's included</div>
      <h2>Comfort in every corner</h2>
    </div>
    <div class="sbtw-amenity-grid">
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg><h4>Equipped Kitchen</h4><p>A complete kitchen with dining area for full independence.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4>King-size Bed</h4><p>A spacious king-size bed dressed in fine linens.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4>Free Wi-Fi</h4><p>Fast, free connection throughout the house and grounds.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg><h4>SPA Access</h4><p>Access to the wellness centre, pool and park.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4>Air Conditioning</h4><p>Independent climate control for the perfect temperature year-round.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4>Private Parking</h4><p>Reserved on-site parking for a relaxed, stress-free arrival.</p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>');" data-screen-label="House for 2 CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Ready when you are</div>
    <h2>Book your house for two</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
