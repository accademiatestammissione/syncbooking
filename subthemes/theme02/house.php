<?php
$PAGE = 'house';
$PAGE_TITLE = 'Rooms – Masseria Le Cerase';
require __DIR__ . '/inc/header.php';
?>
<section class="sbtw-page-hero" data-screen-label="Rooms banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-vines.jpg' ) ); ?>" alt="The rooms of Masseria Le Cerase" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline">Under the vaults</div>
    <h1>Rooms</h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>">Home</a><span>/</span>Accommodation<span>/</span>Rooms</nav>
  </div>
</section>

<section class="sbtw-houses sbtw-pad" data-screen-label="Rooms cards">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Intimate &amp; refined</div>
      <h2>Sleeping under ancient vaults</h2>
      <p>Five double bedrooms, each carved beneath centuries-old stone vaults and dressed with wrought-iron beds, antique wardrobes and warm linen. Thick limestone walls keep them cool through the Apulian summer, while the quiet of the open countryside settles over every room at night.</p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Vaulted bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Bedroom interior" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-cozy.jpg' ) ); ?>" alt="Room detail" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera degli Ulivi</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'room-custom.php' ) ); ?>">View the room</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-3.jpg' ) ); ?>" alt="Vaulted bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-iron.jpg' ) ); ?>" alt="Iron bed" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Bedroom" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera del Ciliegio</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'room-custom.php' ) ); ?>">View the room</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-iron.jpg' ) ); ?>" alt="Iron bed bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-3.jpg' ) ); ?>" alt="Bedroom detail" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera della Vigna</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'room-custom.php' ) ); ?>">View the room</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad-s" style="background:var(--surface);" data-screen-label="House for 2 gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>The rooms, in detail</h2>
    </div>
    <div class="sbtw-mosaic">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="Rooms — pergola" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Rooms — bedroom" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/living-1.jpg' ) ); ?>" alt="Rooms — living detail" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Rooms — garden" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Rooms — interior" /></div>
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
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M3 11h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M4 11v7M20 11v7M4 15h16"/></svg><h4>Wrought-iron Beds</h4><p>King-size beds in wrought iron, dressed in fine linen.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg><h4>Free Wi-Fi</h4><p>Fast, free connection throughout the house and grounds.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg><h4>Private Pool</h4><p>A pool among the olive trees, reserved for your party.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M12 2v20M3.4 7l17.2 10M20.6 7L3.4 17"/></svg><h4>Air Conditioning</h4><p>Independent climate control for the perfect temperature year-round.</p></div>
      <div class="sbtw-amenity sbtw-reveal"><svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg><h4>Private Parking</h4><p>Reserved on-site parking for a relaxed, stress-free arrival.</p></div>
    </div>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="House for 2 CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Ready when you are</div>
    <h2>Reserve your room</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'contacts.php' ) ); ?>" style="margin-top:8px;">Contact us</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
